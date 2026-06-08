<?php
include_once 'models/databaseModel.php';
class SignUpModel extends DatabaseModel {

    private $dataFile = 'assets/data/participants.json';


    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['info-submit'])) {
            $name = trim($_POST['name-signup-input'] ?? '');
            $email = trim($_POST['email-signup-input'] ?? '');
            $age = trim($_POST['age-signup-input'] ?? '');
            $reason = trim($_POST['reason-signup-input'] ?? '');
            $source = trim($_POST['source-signup-input'] ?? '');
            $note = trim($_POST['note-signup-input'] ?? '');
            $eventId = trim($_POST['event-id'] ?? '');

            // Validate form data
            $errors = [];
            if (empty($name)) {
                $errors['name'] = 'Naam is verplicht.';
            }

            if (empty($email)) {
                $errors['email'] = 'E-mailadres is verplicht.';
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Ongeldig e-mailadres.';
            }

            if (empty($age)) {
                $errors['age'] = 'Leeftijd is verplicht.';
            } elseif (!is_numeric($age) || (int)$age < 18) {
                $errors['age'] = 'Je moet minimaal 18 jaar oud zijn.';
            }

            // Check if event is full
            if (!empty($eventId)) {
                include_once 'models/evenementenModel.php';
                $evenementenModel = new EvenementenModel($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
                if ($evenementenModel->isEventFull((int)$eventId)) {
                    $errors['general'] = 'Dit evenement is al vol. Aanmelding niet mogelijk.';
                }
            }

            // If no errors, save the data
            if (empty($errors)) {
                $this->saveParticipant([
                    'name' => $name,
                    'email' => $email,
                    'age' => (int)$age,
                    'reason' => $reason,
                    'source' => $source,
                    'note' => $note,
                    'event_id' => (int)$eventId,
                    'submitted_at' => date('Y-m-d H:i:s')
                ]);
                
                header('Location: index.php?page=success');
                exit();
            }
            
            return $errors;
        }
        return [];
    }

    public function saveParticipant($participantData) {
        // Save to database instead of JSON file
        $stmt = $this->con->prepare("INSERT INTO participants (name, email, age, reason, source, note, event_id) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param(
            "ssisssi",
            $participantData['name'],
            $participantData['email'], 
            $participantData['age'],
            $participantData['reason'],
            $participantData['source'],
            $participantData['note'],
            $participantData['event_id']
        );
        return $stmt->execute();
    }

    public function getParticipants($eventId = null) {
        try {
            if ($eventId !== null) {
                $stmt = $this->con->prepare("SELECT * FROM participants WHERE event_id = ?");
                if (!$stmt) {
                    throw new Exception("Prepare failed: " . $this->con->error);
                }
                $stmt->bind_param("i", $eventId);
            } else {
                $stmt = $this->con->prepare("SELECT * FROM participants");
                if (!$stmt) {
                    throw new Exception("Prepare failed: " . $this->con->error);
                }
            }
            
            if (!$stmt->execute()) {
                throw new Exception("Execute failed: " . $stmt->error);
            }
            
            $result = $stmt->get_result();
            if (!$result) {
                throw new Exception("Get result failed: " . $this->con->error);
            }
            
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (Exception $e) {
            error_log("SignUpModel::getParticipants error: " . $e->getMessage());
            throw $e;
        }
    }
}