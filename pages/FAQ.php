<?php
    declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="nl-NL">
    <head>
        <meta charset="UTF-8">
        <title>FAQ - Chaos Atelier</title>
        <link rel="icon" type="image/svg" href="../assets/icons/brands/site/logo.svg">
        <meta name="description" content="Vind hier wat de meest gestelde vragen zijn over de Chaos Atelier.">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/pages/faq.css">
        <link rel="stylesheet" href="../css/modules/header.css">
        <link rel="stylesheet" href="../css/modules/footer.css">
        <script src="../js/header-dropdown-menu-toggle.js" defer></script>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "Name": "Chaos Atelier",
            "description": "Vind hier alle informatie over onze activiteiten van de Chaos Atelier!",
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
                    <section>
                        <header class="faq-header">
                            <h1>FAQ</h1>
                            <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
                        </header>
                    </section>
                    <section class="faq-content">
                      <article>
                        <details>
                          <summary><h2>Waar is het Chaos Atelier?</h2></summary>
                          <p>Het Chaos Atelier heeft geen vaste bezoeklocatie, we werken voornamelijk vanuit het kantoor van STAD Leiden, op de Morsweg 55E-1.</p>
                          <p>Voor de activiteiten werken we zo veel mogelijk samen met andere partijen en zullen dus op veel verschillende locaties - door Leiden heen - plaatsvinden.</p>
                          <p>Een van onze doelstellingen voor de toekomst is de activiteiten van het Chaos Atelier óók in andere steden te hosten.</p>
                        </details>
                      </article>
                      <article>
                        <details>
                          <summary><h2>Voor wie?</h2></summary>
                          <p>Het Chaos Atelier is een programma voor jongvolwassenen die zich herkennen in neurodivergentie. Daaronder verstaan wij jongeren van ongeveer 18 - 30.</p>
                          <p>Mocht je twijfelen of één van de activiteiten iets voor jou is, kun je altijd een kennismakingsgesprek inplannen. Dan kijken we samen of jouw verwachtingen en wensen een match zijn met wat wij aanbieden.</p>
                        </details>
                      </article>
                      <article>
                        <details>
                          <summary><h2>Hoe meld ik me aan?</h2></summary>
                          <p>Als je interesse hebt in een activiteit kan je via de activiteitenpagina het aanmeldformulier invullen.</p>
                          <p>Weet je nog niet waar je aan wilt deelnemen? We denken graag met je mee! Stuur ons een berichtje zodat we een kennismakingsgesprek kunnen inplannen.</p>
                        </details>
                      </article>
                      <article>
                        <details>
                          <summary><h2>Ik heb geen bevestiging gekregen?</h2></summary>
                          <p>Heb je geen bevestigingsbericht gekregen van jouw deelname? Check dan even je spambox, of stuur ons een berichtje.</p>
                        </details>
                      </article>
                      <article>
                        <details>
                          <summary><h2>Hoe meld ik me af?</h2></summary>
                          <p>Afmelden kan via het e-mailadres of telefoonnummer waar je ook het bevestigingsbericht van hebt ontvangen.</p>
                        </details>
                      </article>
                      <article>
                        <details>
                          <summary><h2>Wie organiseert het?</h2></summary>
                          <p>Team Chaos werkt samen met verschillende partijen voor het organiseren van alle workshops, activiteiten en evenementen. Op de activiteitenpagina zie je per activiteiten de betrokkenen.</p>
                        </details>
                      </article>
                      <article>
                        <details>
                          <summary><h2>Wat zijn de kosten?</h2></summary>
                          <p>De activiteiten die het Chaos Atelier organiseert zijn zo veel mogelijk gratis toegankelijk. Mochten er wel kosten verbonden zitten aan deelname, dan wordt dat vermeld op de activiteitenpagina.</p>
                        </details>
                      </article>
                    </section>
                </main>
                <?php include_once('../views/footer.php'); ?>
            </div>
        </div>
    </body>
</html>