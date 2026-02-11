<?php

class EvenementenModel {

    private $evenementen = [
        [
            'id' => 1,
            'title' => 'Evenement 1',
            'text' => 'testing text for evenementen, testing testing and testing',
            'date' => '2025-07-15',
            'time' => '19:00',
            'location' => 'Leiden',
            'capacity' => '7/10',
            'image' => './assets/images/chaos-atelier-leiden.jpg'
        ],
        [
            'id' => 2,
            'title' => 'Evenement 2',
            'text' => 'testing text for evenementen, testing testing and testing',
            'date' => '2025-08-20',
            'time' => '18:00',
            'location' => 'Amsterdam',
            'capacity' => '5/10',
            'image' => './assets/images/chaos-atelier-Leiden.jpg'
        ],
        [
            'id' => 3,
            'title' => 'Evenement 3',
            'text' => 'testing text for evenementen, testing testing and testing',
            'date' => '2025-09-10',
            'time' => '20:00',
            'location' => 'Rotterdam',
            'capacity' => '10/10',
            'image' => './assets/images/chaos-atelier-Leiden.jpg'
        ],
            [
                'id' => 4,
                'title' => 'Evenement 4',
                'text' => 'testing text for evenementen, testing testing and testing',
                'date' => '2025-10-05',
                'time' => '17:00',
                'location' => 'Utrecht',
                'capacity' => '3/10',
                'image' => './assets/images/chaos-atelier-Leiden.jpg'
            ]
    ];

    public function getEvenementen() {
        return $this->evenementen;
    }

    // Add a new evenement with auto-incremented ID
    public function addEvenement($title, $date, $time, $location, $capacity, $image) {
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
            'date' => $date,
            'time' => $time,
            'location' => $location,
            'capacity' => $capacity,
            'image' => $image
        ];
        
        $this->evenementen[] = $newEvenement;
        return $newEvenement;
    }

    public function getEvenementById($id) {
        $evenementen = $this->getEvenementen();
        foreach ($evenementen as $evenement) {
            if ($evenement['id'] == $id) {
                return $evenement;
            }
        }
        return null; // Return null if no event is found with the given ID
    }
}