<?php

    if (!isset($_SESSION['username'])) {
        $dbh = new LoginManager($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
    }

    if (!isset($_SESSION['username']) && (isset($_POST['submit']) || $_SERVER['REQUEST_METHOD'] === 'POST')) {
        $errors = [];
        if (!empty($_POST['username'])) {
            $username = $_POST['username'];
        } else {
            $errors[] = "Gebruikersnaam is verplicht.";
        }

        if (!empty($_POST['password'])) {
            $password = $_POST['password'];
        } else {
            $errors[] = "Wachtwoord is verplicht.";
        }
        
        if (isset($username) && isset($password)) {
            $result = $dbh->verifyCredentials($username, $password);
            $isadmin = $dbh->isAdmin($username);
            if (empty($result)) {
                $_SESSION['username'] = $username;
                if ($isadmin) {
                    $_SESSION['role'] = 'admin';
                }
                header('Location: index.php');
                exit;
            } else {
                $errors = array_merge($errors, $result);
            }
        }
    }
?>

<!-- 
    <header id="content-header" class="home-header">
        <h1>Login</h1>
        <img src="./assets/icons/megaphone.svg" alt="megaphone icon">
    </header> -->
    <section id="content-main-section" class="login-content">
        <div class="border-content">
            <?php if (!isset($_SESSION['username'])): ?>
                <form method="post" action="index.php" id="login">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required>
                    <br><br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                    <br><br>
                    <input type="hidden" name="role" value="user">
                    <input type="submit" name="submit" value="Login" class="login-button">
                </form>
                <?php
                if (isset($errors) && !empty($errors)) {
                    echo '<ul class="errors">';
                    foreach ($errors as $error) {
                        echo '<li> ' . $error . '</li>';
                    }
                    echo '</ul>';
                }
                ?>
            <?php else: ?>
                <p>You are already logged in as <strong><?php echo htmlspecialchars($_SESSION['username']); ?></strong></p>
                <p><a href="index.php?logout=1">Logout</a> | <a href="index.php">Go to Home</a></p>
            <?php endif; ?>
        </div>
    </section>


