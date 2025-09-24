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
    <link rel="stylesheet" href="../css/pages/info.css">
    <script src="../js/header-dropdown-menu-toggle.js" defer></script>
</head>

<body>
    <div id="container">
        <?php include_once('../views/header.php'); ?>
        <div id="page-content-container">
            <main>
                <section>
                    <header id="content-header">
                        <h1>ONTMOETINGS-GROEP</h1>
                        <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
                    </header>
                    <div class="border-content">
                        <p>placeholder datum en locatie</p>
                        <p>De ontmoetingsgroep is een serie van 10 bijeenkomsten, waar we steeds over een ander thema in gesprek gaan. Denk aan emoties, keuzes maken en identiteit. We zorgen samen voor een veilige omgeving, waaring het uitwisselen van ervaringen centraal staat.</p>
                        <p>De ontmoetingsgroep is voor jongvolwassenen (plusminus 18 - 30 jaar) die zich herkenne in neurodivergentie en graag in gesprek gaan met gelijkgestmden</p>
                        <p>Of je nou kort geleden gediagnosticeerd bent en opzoek bent naar wat dat voor jou betekent, je niks met labels hebt en gewoon iets wil doen met die chaos in je hoofd, of een doorgewinterde neurodivergent bent die graag diens wijsheid deelt.</p>
                        <p>Ik vraag NIET om een officiële diagnose.</p>
                        <img src="../assets/images/placeholder.jpg" alt="placeholder" width="300" id="info-image">
                        <p>Onderdeel van de aanmelding is een kennismakingsgesprek met de host. Zo weten jullie beiden met wie je te maken hebt en bespreken jullie al jouw verwachtingen en wensen rondom de ontmoetingsgroep.</p>
                        <p>Schrijf je hieronder in! Er wordt contact met je opgenomen voor het maken van een afspraak.</p>
                        <form action="" id="meeting-form">
                            <section id="form-section">
                                <input type="text" name="name-signup-input" id="name-signup-input" placeholder="Naam..." />
                                <input type="email" name="email-signup-input" id="email-signup-input" placeholder="E-mailadres..." />
                                <input type="number" name="age-signup-input" id="age-signup-input" placeholder="20" />
                            </section>
                            <textarea placeholder="Rede van aanmelding..." id="reason-signup-input" name="reason-signup-input"></textarea>
                            <textarea placeholder="Hoe ben je bij het chaos atelier gekomen..." id="source-signup-input" name="source-signup-input"></textarea>
                            <textarea placeholder="Opmerkingen..." id="note-signup-input" name="note-signup-input"></textarea>
                            <button type="submit" id="info-submit">VERSTUUR</button>
                        </form>
                    </div>
                </section>
            </main>
            <?php include_once('../views/footer.php'); ?>
        </div>
    </div>
</body>

</html>