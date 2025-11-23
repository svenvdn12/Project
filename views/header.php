<header id="page-header">
    <section class="header-top">
        <a href="index.php"><img src="./assets/icons/brands/site/logo.svg" alt="Chaos Atelier logo" class="logo"></a>
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
            <li><a href="index.php?page=info">Ontmoetings-<br>groep</a></li>
            <li><a href="index.php?page=evenementen">Evenementen</a></li>
            <li><a href="index.php?page=over-ons">Over ons</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
            <li><a href="index.php?page=FAQ">FAQ</a></li>
            <li><a href="index.php?page=nieuws">Nieuws</a></li>
            <?php if (isset($_SESSION['username']) && $_SESSION['role'] === 'admin'): ?>
                <li><a href="index.php?page=admin">Evenement toevoegen</a></li>
            <?php endif; ?>
            <?php if (!isset($_SESSION['username'])): ?>
                <li><a href="index.php?page=login">Login</a></li>
            <?php else: ?>
                <li><a href="index.php?logout=1">Logout (<?php echo htmlspecialchars($_SESSION['username']); ?>)</a></li>
            <?php endif; ?>
        </ul>
    </section>
</header>