<?php
include_once('models/loginModel.php');
$loginModel = new LoginModel($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
$isLoggedIn = $loginModel->isLoggedIn();
$isAdmin = $loginModel->isAdmin();
$currentUser = $loginModel->getLoggedInUser();
?>
<div class="menu scroll-anchor">
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#info">Ontmoetingsgroep</a></li>
        <li><a href="#evenementen">Evenementen</a></li>
        <li><a href="#over-ons">Over ons</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#nieuws">Nieuws</a></li>
        <li><a href="#FAQ">FAQ</a></li>
        <?php if ($isLoggedIn): ?>
            <?php if ($isAdmin): ?>
                <li><a href="#aanmeldingen">Aanmeldingen</a></li>
            <?php endif; ?>
            <li><a href="index.php?page=logout">Uitloggen</a></li>
        <?php else: ?>
            <li><a href="#login">Inloggen</a></li>
        <?php endif; ?>
        <!-- might be wrong ^ -->
    </ul>
    </ul>
    <aside></aside>
</div>