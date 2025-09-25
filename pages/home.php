<?php
    declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="nl-NL">
    <head>
        <meta charset="UTF-8">
        <title>Home - Chaos Atelier</title>
        <link rel="icon" type="image/svg" href="../assets/icons/brands/site/logo.svg">
        <meta name="description" content="Het Chaos Atelier is een ontmoetingsplek voor jongvolwassenen die zich herkennen in neurodivergentie. Maak iets moois van jouw chaos!">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/modules/header.css">
        <link rel="stylesheet" href="../css/modules/footer.css">
        <link rel="stylesheet" href="../css/pages/home.css">
        <script src="../js/header-dropdown-menu-toggle.js" defer></script>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "Name": "Chaos Atelier",
            "description": "Het Chaos Atelier is een ontmoetingsplek voor jongvolwassenen die zich herkennen in neurodivergentie. Maak iets moois van jouw chaos!",
            "logo": "logo.svg",
            "url": "chaosatelier.nl",
            "email": "hetchaosatelier@gmail.com",
            "address":{
                "@type": "PostalAddress",
                "streetAddress": "Flevoweg 11",
                "postalCode": "2318 BZ",
                "addressCountry": "NL"
            },
            "founder":{
                "@type": "Person",
                "name": "Sofia van der Knaap",
                "email": "s.vanderknaap@rcnheliomare.nl",
                "address":{
                "@type": "PostalAddress",
                "addressCountry": "NL"
                }
            }
        }
        </script>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "Audience",
                "audienceType": "Neurodivergente individuelen"
            }
        </script>
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
                            <a href="../pages/info.php" class="btn">LEES MEER</a>
                        </section>
                        <section class="home-content-section">
                            <h2>Activiteiten</h2>
                            <p>Verdiepende activiteiten, voor iedereen die een thema uit de ontmoetingsgroep verder wil onderzoeken. Én workshops en uitstapjes voor jongeren die opzoek zijn naar gezellig contact met gelijksgestemden.</p>
                            <a href="../pages/evenementen.php" class="btn">LEES MEER</a>
                        </section>
                    </div>
                </main>
                <?php include_once('../views/footer.php'); ?>
            </div>
        </div>
    </body>
</html>