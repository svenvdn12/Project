<?php
include_once('models/loginModel.php');
$loginModel = new LoginModel($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
$isLoggedIn = $loginModel->isLoggedIn();
$currentUser = $loginModel->getLoggedInUser();
?>

<header id="page-header">
    <section class="header-top">
        <a href="index.php"><img src="./assets/icons/brands/site/logo.svg" alt="Chaos Atelier logo"></a>
        <label for="hamburger-toggle" class="hamburger-toggle-wrapper">
            <input type="checkbox" name="hamburger-toggle" id="hamburger-toggle">
            <span class="hamburger-icon">
                <span class="line top"></span>
                <span class="line middle"></span>
                <span class="line bottom"></span>
            </span>
        </label>
    </section>
    <section id="header-dropdown-menu">
        <ul>
            <li><a href="index.php?page=home">Home</a></li>
            <li><a href="index.php?page=over-ons">Wie we zijn</a></li>
            <li><a href="index.php?page=info">Wat we doen</a></li>
            <li><a href="index.php?page=evenementen">Evenementen</a></li>
            <li><a href="index.php?page=nieuws">Nieuws</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
            <li><a href="index.php?page=FAQ">FAQ</a></li>
                    <?php if ($isLoggedIn): ?>
            <li><a href="index.php?page=logout">Uitloggen</a></li>
        <?php else: ?>
            <li><a href="index.php?page=login">Inloggen</a></li>
        <?php endif; ?>

        </ul>
    </section>
</header>