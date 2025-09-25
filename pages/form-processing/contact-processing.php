<?php
    $name = $email = $message = '';
    $nameError = $emailError = $msgError = '';

    if (isset($_POST['submit'])) {
        $errors = [];
        if (!empty($_POST['name'])) {
            $name = $_POST['name'];
        } else {
            $nameError = 'Naam is niet ingevuld.';
        }
        if (!empty($_POST['email'])) {
            $email = $_POST['email'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = 'Dit is een ongeldige email.';
            }
        } else {
            $emailError = 'Email is verplicht.';
        }
        if (!empty($_POST['message'])) {
            $message = $_POST['message'];
        } else {
            $msgError = 'Geen bericht ingevuld.';
        }
    }
