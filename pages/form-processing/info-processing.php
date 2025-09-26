<?php
declare(strict_types=1);

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

    // Name
    if (!empty($_POST['name-signup-input'])) {
        $formData['name'] = trim($_POST['name-signup-input']);
    } else {
        $formData['errors']['name'] = 'Naam is verplicht.';
    }

    // Email
    if (!empty($_POST['email-signup-input'])) {
        $formData['email'] = trim($_POST['email-signup-input']);
        if (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
            $formData['errors']['email'] = 'Dit is een ongeldige email.';
        }
    } else {
        $formData['errors']['email'] = 'Email is verplicht.';
    }

    // Age
    if (!empty($_POST['age-signup-input'])) {
        $formData['age'] = intval($_POST['age-signup-input']);
        if ($formData['age'] <= 0) {
            $formData['errors']['age'] = 'Voer een geldig nummer in.';
        }
    }

    // Reason
    if (!empty($_POST['reason-signup-input'])) {
        $formData['reason'] = trim($_POST['reason-signup-input']);
    } else {
        $formData['errors']['reason'] = 'Geen reden ingevuld.';
    }

    // Source
    if (!empty($_POST['source-signup-input'])) {
        $formData['source'] = trim($_POST['source-signup-input']);
    } else {
        $formData['errors']['source'] = 'Geen bron ingevuld.';
    }

    // Note (optional)
    if (isset($_POST['note-signup-input'])) {
        $formData['note'] = trim($_POST['note-signup-input']);
    }
}
?>
