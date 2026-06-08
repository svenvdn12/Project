<?php
include_once 'models/databaseModel.php';

class LoginModel extends DatabaseModel {
    
    public function authenticateUser($username, $password) {
        try {
            $stmt = $this->con->prepare("SELECT id, username, email, password, admin FROM accounts WHERE username = ? OR email = ?");
            if (!$stmt) {
                throw new Exception("Prepare failed: " . $this->con->error);
            }
            
            $stmt->bind_param("ss", $username, $username);
            
            if (!$stmt->execute()) {
                throw new Exception("Execute failed: " . $stmt->error);
            }
            
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            
            if ($user && password_verify($password, $user['password'])) {
                return [
                    'success' => true,
                    'user' => [
                        'id' => $user['id'],
                        'username' => $user['username'],
                        'email' => $user['email'],
                        'admin' => (bool)$user['admin']
                    ]
                ];
            }
            
            return ['success' => false, 'message' => 'Ongeldige gebruikersnaam of wachtwoord.'];
            
        } catch (Exception $e) {
            error_log("LoginModel::authenticateUser error: " . $e->getMessage());
            return ['success' => false, 'message' => 'Er is een fout opgetreden bij het inloggen.'];
        }
    }
    
    public function createUser($username, $email, $password) {
        try {
            // Check if username or email already exists
            $stmt = $this->con->prepare("SELECT id FROM accounts WHERE username = ? OR email = ?");
            if (!$stmt) {
                throw new Exception("Prepare failed: " . $this->con->error);
            }
            
            $stmt->bind_param("ss", $username, $email);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result->num_rows > 0) {
                return ['success' => false, 'message' => 'Gebruikersnaam of e-mailadres bestaat al.'];
            }
            
            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            
            // Insert new user
            $stmt = $this->con->prepare("INSERT INTO accounts (username, email, password) VALUES (?, ?, ?)");
            if (!$stmt) {
                throw new Exception("Prepare failed: " . $this->con->error);
            }
            
            $stmt->bind_param("sss", $username, $email, $hashedPassword);
            
            if ($stmt->execute()) {
                return [
                    'success' => true,
                    'message' => 'Account succesvol aangemaakt.',
                    'user_id' => $this->con->insert_id
                ];
            }
            
            return ['success' => false, 'message' => 'Er is een fout opgetreden bij het aanmaken van het account.'];
            
        } catch (Exception $e) {
            error_log("LoginModel::createUser error: " . $e->getMessage());
            return ['success' => false, 'message' => 'Er is een fout opgetreden bij het aanmaken van het account.'];
        }
    }

    public function userIsUnique($username, $email) {
        try {
            $stmt = $this->con->prepare("SELECT id FROM accounts WHERE username = ? OR email = ?");
            if (!$stmt) {
                throw new Exception("Prepare failed: " . $this->con->error);
            }
            
            $stmt->bind_param("ss", $username, $email);
            $stmt->execute();
            $result = $stmt->get_result();
            
            return $result->num_rows === 0;
        } catch (Exception $e) {
            error_log("LoginModel::userIsUnique error: " . $e->getMessage());
            return false;
        }
    }
    
    public function startSession($user) {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['email'] = $user['email'] ?? null;
        $_SESSION['admin'] = $user['admin'] ?? false;
        $_SESSION['logged_in'] = true;
    }
    
    public function logout() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        session_destroy();
    }
    
    public function isLoggedIn() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
    }
    
    public function getLoggedInUser() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        if ($this->isLoggedIn()) {
            return [
                'id' => $_SESSION['user_id'] ?? null,
                'username' => $_SESSION['username'] ?? null,
                'email' => $_SESSION['email'] ?? null,
                'admin' => $_SESSION['admin'] ?? false
            ];
        }
        
        return null;
    }
    
    public function isAdmin() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        
        return $this->isLoggedIn() && isset($_SESSION['admin']) && $_SESSION['admin'] === true;
    }
}
?>