<?php
// Login form processing
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include_once('models/loginModel.php');
    
    $formData = [
        'username' => '',
        'password' => '',
        'errors' => [],
        'success_message' => ''
    ];
    
    // Handle login
    if (isset($_POST['login-submit'])) {
        $username = trim($_POST['username-login'] ?? '');
        $password = trim($_POST['password-login'] ?? '');
        
        $formData['username'] = $username;
        
        // Validate form data
        if (empty($username)) {
            $formData['errors']['username'] = 'Gebruikersnaam is verplicht.';
        }
        
        if (empty($password)) {
            $formData['errors']['password'] = 'Wachtwoord is verplicht.';
        }
        
        if (empty($formData['errors'])) {
            $loginModel = new LoginModel($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
            $result = $loginModel->authenticateUser($username, $password);
            
            if ($result['success']) {
                $loginModel->startSession($result['user']);
                header('Location: index.php?page=home');
                exit();
            } else {
                $formData['errors']['general'] = $result['message'];
            }
        }
    }
    
    // Handle registration
    if (isset($_POST['register-submit'])) {
        $username = trim($_POST['username-register'] ?? '');
        $email = trim($_POST['email-register'] ?? '');
        $password = trim($_POST['password-register'] ?? '');
        $confirmPassword = trim($_POST['password-confirm'] ?? '');
        
        $formData['username'] = $username;
        $formData['email'] = $email;
        
        // Validate form data
        if (empty($username)) {
            $formData['errors']['username'] = 'Gebruikersnaam is verplicht.';
        } elseif (strlen($username) < 3) {
            $formData['errors']['username'] = 'Gebruikersnaam moet minimaal 3 karakters lang zijn.';
        }
        
        if (empty($email)) {
            $formData['errors']['email'] = 'E-mailadres is verplicht.';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $formData['errors']['email'] = 'Ongeldig e-mailadres.';
        }
        
        if (empty($password)) {
            $formData['errors']['password'] = 'Wachtwoord is verplicht.';
        } elseif (strlen($password) < 6) {
            $formData['errors']['password'] = 'Wachtwoord moet minimaal 6 karakters lang zijn.';
        }
        
        if (empty($confirmPassword)) {
            $formData['errors']['confirm_password'] = 'Bevestig wachtwoord is verplicht.';
        } elseif ($password !== $confirmPassword) {
            $formData['errors']['confirm_password'] = 'Wachtwoorden komen niet overeen.';
        }
        
        // If no validation errors, attempt registration
        if (empty($formData['errors'])) {
            $loginModel = new LoginModel($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
            $result = $loginModel->createUser($username, $email, $password);
            
            if ($result['success']) {
                $formData['success_message'] = $result['message'] . ' Je kunt nu inloggen.';
                // Clear form data after successful registration
                $formData['username'] = '';
                $formData['email'] = '';
            } else {
                $formData['errors']['general'] = $result['message'];
            }
        }
    }
} else {
    $formData = [
        'username' => '',
        'password' => '',
        'errors' => [],
        'success_message' => ''
    ];
}
?>