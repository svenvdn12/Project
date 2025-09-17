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
        <link rel="stylesheet" href="../css/pages/home.css">
        <script src="../js/header-dropdown-menu-toggle.js" defer></script>
    </head>
    <body>
        <div id="container">
            <?php include_once('../views/header.php'); ?>
            <div id="page-content-container">
                <main>
                    <section id="content-main-section">
                        <header id="content-header">
                            <h1>WELKOM OP HET CHAOS ATELIER</h1>
                            <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
                        </header>
                        <section>
                            <img src="../assets/images/placeholder.jpg" alt="placeholder" id="home-image" width="400" height="600">
                            <section id="main-text">
                                <h2>Onze missie</h2>
                                <p>Het Chaos Atelier is een ontmoetingsplek voor jongvolwassenen die zich herkennen in neurodivergentie. Maak iets moois van jouw chaos!</p>
                                <br>
                                <p>chaos = creativiteit,</p>
                                <p>chaos = verbinding,</p>
                                <p>chaos = innovatie,</p>
                                <p>chaos = energie</p>
                            </section>
                        </section>
                    </section>
                    <div id="lees-meer-content">
                        <section class="home-content-section">
                            <h2>Ontmoetingsgroep</h2>
                            <p>In een vaste setting met 5-10 gelijkgestemden komen we 10 keer samen. Iedere bijeenkomst staat er een thema centraal. We gaan in wisselende werkvormen het gesprek aan.</p>
                            <a href="#" class="btn">LEES MEER</a>
                        </section>
                        <section class="home-content-section">
                            <h2>Activiteiten</h2>
                            <p>Verdiepende activiteiten, voor iedereen die een thema uit de ontmoetingsgroep verder wil onderzoeken. Én workshops en uitstapjes voor jongeren die opzoek zijn naar gezellig contact met gelijksgestemden.</p>
                            <a href="#" class="btn">LEES MEER</a>
                        </section>
                    </div>
                </main>
                <?php include_once('../views/footer.php'); ?>
            </div>
        </div>
    </body>
</html>