<?php
    $name = $email = $reason = $source = $ageInput = $message = $note = '';
    $nameError = $emailError = $ageError = $reasonError = $sourceError = '';

    if (isset($_POST['info-submit'])) {
        $errors = [];
        if (!empty($_POST['name-signup-input'])) {
            $name = $_POST['name-signup-input'];
        } else {
            $nameError = 'Naam is verplicht.';
        }
        if (!empty($_POST['email-signup-input'])) {
            $email = $_POST['email-signup-input'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = 'Dit is een ongeldige email.';
            }
        } else {
            $emailError = 'Email is verplicht.';
        }
        if (!empty($_POST['age-signup-input'])) {
            // echo gettype($_POST['age-signup-input']); 
            $ageInput = intval($_POST['age-signup-input']);
            if ($ageInput <= 0) {
                $ageError = 'Voer een geldig nummer in.';
            }
        }
        if (!empty($_POST['reason-signup-input'])) {
            $reason = $_POST['reason-signup-input'];
        } else {
            $reasonError = 'Geen reden ingevuld.';
        }
        if (!empty($_POST['source-signup-input'])) {
            $source = $_POST['source-signup-input'];
        } else {
            $sourceError = 'Geen bron ingevuld.';
        }
        if (isset($_POST['note-signup-input'])) {
            $note = $_POST['note-signup-input'];
        }
    }