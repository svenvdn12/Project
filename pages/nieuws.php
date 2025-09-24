<?php
    declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <title>Chaos Atelier</title>
        <meta name="description" content="Chaos Atelier Home">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/modules/header.css">
        <link rel="stylesheet" href="../css/modules/footer.css">
        <link rel="stylesheet" href="../css/pages/nieuws.css">
        <script src="../js/header-dropdown-menu-toggle.js" defer></script>
    </head>
    <body>
        <div id="container">
            <?php include_once('../views/header.php'); ?>
            <div id="page-content-container">
                <main>
                    <section class="content-main-section">
                        <header id="content-header">
                            <h1>NIEUWS</h1>
                            <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
                        </header>
                    </section>
                    <section class="news-article">
                        <img src="../assets/images/placeholder.jpg" alt="placeholder" width="200">
                        <div class="news-article-sub">
                            <h2>nieuws 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="#" class="btn">LEES MEER</a>
                        </div>
                    </section>
                    <section class="news-article">
                        <img src="../assets/images/placeholder.jpg" alt="placeholder" width="200">
                        <div class="news-article-sub">
                            <h2>nieuws 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="#" class="btn">LEES MEER</a>
                        </div>
                    </section>
                    <section class="news-article">
                        <img src="../assets/images/placeholder.jpg" alt="placeholder" width="200">
                        <div class="news-article-sub">
                            <h2>nieuws 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <a href="#" class="btn">LEES MEER</a>
                        </div>
                    </section>
                    
                </main>
                <?php include_once('../views/footer.php'); ?>
            </div>
        </div>
    </body>
</html>