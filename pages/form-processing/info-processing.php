<?php
declare(strict_types=1);

include_once('models/signUpModel.php');

$formData = [
    'name' => '',
    'email' => '',
    'age' => '',
    'reason' => '',
    'source' => '',
    'note' => '',
    'errors' => [
        'name' => '',
        'email' => '',
        'age' => '',
        'reason' => '',
        'source' => ''
    ]
];

if (isset($_POST['info-submit'])) {
    
    // Create SignUpModel instance for database operations
    try {
        $signUpModel = new SignUpModel($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
        
        // Get and validate form data
        $name = trim($_POST['name-signup-input'] ?? '');
        $email = trim($_POST['email-signup-input'] ?? '');
        $age = trim($_POST['age-signup-input'] ?? '');
        $reason = trim($_POST['reason-signup-input'] ?? '');
        $source = trim($_POST['source-signup-input'] ?? '');
        $note = trim($_POST['note-signup-input'] ?? '');
        $eventId = trim($_POST['event-id'] ?? '');
        
        // Validation
        $errors = [];
        
        // Name validation
        if (empty($name)) {
            $errors['name'] = 'Naam is verplicht.';
        }
        
        if (empty($email)) {
            $errors['email'] = 'Email is verplicht.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Dit is een ongeldige email.';
        }
        

        if (empty($age)) {
            $errors['age'] = 'Leeftijd is verplicht.';
        } elseif (!is_numeric($age) || (int)$age < 18) {
            $errors['age'] = 'Je moet minimaal 18 jaar oud zijn.';
        }
        

        if (empty($reason)) {
            $errors['reason'] = 'Geen reden ingevuld.';
        }
        

        if (empty($source)) {
            $errors['source'] = 'Geen bron ingevuld.';
        }
        
        if (empty($errors)) {
            $participantData = [
                'name' => $name,
                'email' => $email,
                'age' => (int)$age,
                'reason' => $reason,
                'source' => $source,
                'note' => $note,
                'event_id' => (int)$eventId,
                'submitted_at' => date('Y-m-d H:i:s')
            ];
            
            // Save to database
            if ($signUpModel->saveParticipant($participantData)) {
                // Success - redirect to success page
                header('Location: index.php?page=evenementen&success=1');
                exit();
            } else {
                $errors['general'] = 'Er is een fout opgetreden bij het opslaan. Probeer het opnieuw.';
            }
        }
        
        // Store errors and form data for display
        $formData['errors'] = $errors;
        $formData['name'] = $name;
        $formData['email'] = $email;
        $formData['age'] = $age;
        $formData['reason'] = $reason;
        $formData['source'] = $source;
        $formData['note'] = $note;
        
    } catch (Exception $e) {
        $formData['errors']['general'] = 'Database verbinding mislukt: ' . $e->getMessage();
    }
}
?>
