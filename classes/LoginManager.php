<?php

class LoginManager extends DatabaseHandler {
    private $db;

    public function __construct($host, $user, $pass, $db) {
        parent::__construct($host, $user, $pass, $db);
    }

    public function verifyCredentials(string $username, string $password){
        $errors = [];
        $stmt = $this->con->prepare("SELECT password FROM account WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if(empty($user) || $user === null) {
            $errors[] = 'Gebruikersnaam bestaat niet.';
            $errors[] = 'Verkeerde wachtwoord.';
        } else {
            $storedpassword = $user['password'];

            if(!(password_verify($password, $storedpassword))) {
                $errors[] = 'Verkeerde wachtwoord.';
            }
        }

        return $errors;
    }

    public function logout() {
        session_start();
        session_destroy();
        return true;
    }

    public function isAdmin(string $username): bool {
        $stmt = $this->con->prepare("SELECT username FROM account WHERE admin = 1 AND username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            return true;
        }
        return false;
    }
}
