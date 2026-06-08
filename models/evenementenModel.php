<?php
include_once 'models/databaseModel.php';

class EvenementenModel extends DatabaseModel {

    private $maxCapacity = 10;
    
    private $evenementen = [
        [
            'id' => 1,
            'title' => 'Spreekbeurt Avond',
            'text' => 'testing text for evenementen, testing testing and testing',
            'date' => '2026-07-15',
            'time' => '19:00',
            'location' => 'Leiden',
            'image' => './assets/images/chaos-atelier-leiden.jpg',
            'type' => 'uitje'
        ],
        [
            'id' => 2,
            'title' => 'Workshop Creatief Schrijven',
            'text' => 'testing text for evenementen, testing testing and testing',
            'date' => '2026-08-20',
            'time' => '18:00',
            'location' => 'Amsterdam',
            'image' => './assets/images/chaos-atelier-Leiden.jpg',
            'type' => 'workshop'
        ],
        [
            'id' => 3,
            'title' => 'Real Talk Walk',
            'text' => 'testing text for evenementen, testing testing and testing',
            'date' => '2026-09-10',
            'time' => '20:00',
            'location' => 'Rotterdam',
            'image' => './assets/images/chaos-atelier-Leiden.jpg',
            'type' => 'uitstapje'
        ],
            [
                'id' => 4,
                'title' => 'Workshop Creatief Schrijven',
                'text' => 'testing text for evenementen, testing testing and testing',
                'date' => '2026-10-05',
                'time' => '17:00',
                'location' => 'Utrecht',
                'image' => './assets/images/chaos-atelier-Leiden.jpg',
                'type' => 'workshop'
            ]
    ];

    public function getEvenementen() {
        $evenementenWithCapacity = [];
        
        foreach ($this->evenementen as $evenement) {
            $participantCount = $this->getParticipantCount($evenement['id']);
            $evenement['capacity'] = $participantCount . '/' . $this->maxCapacity;
            $evenement['available_spots'] = $this->maxCapacity - $participantCount;
            $evenement['is_full'] = $participantCount >= $this->maxCapacity;
            $evenementenWithCapacity[] = $evenement;
        }
        
        return $evenementenWithCapacity;
    }
    
    // Get participant count for a specific event
    public function getParticipantCount($eventId) {
        try {
            $stmt = $this->con->prepare("SELECT COUNT(*) as participant_count FROM participants WHERE event_id = ?");
            if (!$stmt) {
                throw new Exception("Prepare failed: " . $this->con->error);
            }
            
            $stmt->bind_param("i", $eventId);
            
            if (!$stmt->execute()) {
                throw new Exception("Execute failed: " . $stmt->error);
            }
            
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            
            return (int)($row['participant_count'] ?? 0);
        } catch (Exception $e) {
            error_log("EvenementenModel::getParticipantCount error: " . $e->getMessage());
            return 0; // Return 0 if there's an error
        }
    }

    // Add a new evenement with auto-incremented ID
    public function addEvenement($title, $text, $date, $time, $location, $image) {
        // Get the highest ID from existing events
        $maxId = 0;
        foreach ($this->evenementen as $evenement) {
            if ($evenement['id'] > $maxId) {
                $maxId = $evenement['id'];
            }
        }
        
        $newEvenement = [
            'id' => $maxId + 1,
            'title' => $title,
            'text' => $text,
            'date' => $date,
            'time' => $time,
            'location' => $location,
            'image' => $image
        ];
        
        $this->evenementen[] = $newEvenement;
        
        // Add dynamic capacity info
        $participants = $this->getParticipantCount($newEvenement['id']);
        $newEvenement['capacity'] = $participants . '/' . $this->maxCapacity;
        $newEvenement['available_spots'] = $this->maxCapacity - $participants;
        $newEvenement['is_full'] = $participants >= $this->maxCapacity;
        
        return $newEvenement;
    }

    public function getEvenementById($id) {
        $evenementen = $this->getEvenementen(); // This already includes dynamic capacity
        foreach ($evenementen as $evenement) {
            if ($evenement['id'] == $id) {
                return $evenement;
            }
        }
        return null;
    }
    
    // Check if an event is full
    public function isEventFull($eventId) {
        $participantCount = $this->getParticipantCount($eventId);
        return $participantCount >= $this->maxCapacity;
    }
    
    // Get remaining spots for an event
    public function getAvailableSpots($eventId) {
        $participantCount = $this->getParticipantCount($eventId);
        return max(0, $this->maxCapacity - $participantCount);
    }

    public function deleteParticipant($participantId) {
        try {
            $stmt = $this->con->prepare("DELETE FROM participants WHERE id = ?");
            if (!$stmt) {
                throw new Exception("Prepare failed: " . $this->con->error);
            }
            
            $stmt->bind_param("i", $participantId);
            
            if (!$stmt->execute()) {
                throw new Exception("Execute failed: " . $stmt->error);
            }
            
            return $stmt->affected_rows > 0;
        } catch (Exception $e) {
            error_log("EvenementenModel::deleteParticipant error: " . $e->getMessage());
            throw $e;
        }
    }
}
