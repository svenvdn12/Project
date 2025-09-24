<?php
    declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="nl-NL">
    <head>
        <meta charset="UTF-8">
        <title>Evenementen - Chaos Atelier</title>
        <link rel="icon" type="image/svg" href="../assets/icons/brands/site/logo.svg">
        <meta name="description" content="Vind hier alle evenementen die wij organiseren! Wij organiseren niet alleen ontmoetingsgroepen, maar ook workshops en uitstapjes.">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/modules/header.css">
        <link rel="stylesheet" href="../css/modules/footer.css">
        <link rel="stylesheet" href="../css/pages/evenementen.css">
        <script src="../js/header-dropdown-menu-toggle.js" defer></script>
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "Name": "Chaos Atelier",
            "description": "Vind hier alle evenementen die wij organiseren! Wij organiseren niet alleen ontmoetingsgroepen, maar ook workshops en uitstapjes.",
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
                    <section class="content-main-section">
                        <header id="content-header">
                            <h1>EVENEMENTEN</h1>
                            <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
                        </header>
                    </section>
                    <section id="category-selector">
                        <a href="#" class="btn filter">UITSTAPJES</a>
                        <a href="#" class="btn filter active">ONTMOETINGSGROEP</a>
                        <a href="#" class="btn filter">WORKSHOPS</a>
                    </section>
                    <section class="event-article">
                        <img src="../assets/images/placeholder.jpg" alt="placeholder" width="200">
                        <div class="event-article-sub">
                            <h2>evenement 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="event-article-sub-sub">
                                <section>
                                    <section>
                                        <img src="../assets/icons/Calendar.svg" alt="" width="25">
                                        <p>00-00-2000</p>
                                        <img src="../assets/icons/Clock.svg" alt="" width="25">
                                        <p>00:00</p>
                                    </section>
                                    <section>
                                        <img src="../assets/icons/Location.svg" alt="" width="19">
                                        <p>location</p>
                                        <img src="../assets/icons/People.svg" alt="" width="25">
                                        <p>0/10</p>
                                    </section>
                                </section>
                                <a href="#" class="btn">LEES MEER</a>
                            </div>
                        </div>
                    </section>
                    <section class="event-article">
                        <img src="../assets/images/placeholder.jpg" alt="placeholder" width="200">
                        <div class="event-article-sub">
                            <h2>evenement 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="event-article-sub-sub">
                                <section>
                                    <section>
                                        <img src="../assets/icons/Calendar.svg" alt="" width="25">
                                        <p>00-00-2000</p>
                                        <img src="../assets/icons/Clock.svg" alt="" width="25">
                                        <p>00:00</p>
                                    </section>
                                    <section>
                                        <img src="../assets/icons/Location.svg" alt="" width="19">
                                        <p>location</p>
                                        <img src="../assets/icons/People.svg" alt="" width="25">
                                        <p>0/10</p>
                                    </section>
                                </section>
                                <a href="#" class="btn">LEES MEER</a>
                            </div>
                        </div>
                    </section>
                    <section class="event-article">
                        <img src="../assets/images/placeholder.jpg" alt="placeholder" width="200">
                        <div class="event-article-sub">
                            <h2>evenement 1</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="event-article-sub-sub">
                                <section>
                                    <section>
                                        <img src="../assets/icons/Calendar.svg" alt="" width="25">
                                        <p>00-00-2000</p>
                                        <img src="../assets/icons/Clock.svg" alt="" width="25">
                                        <p>00:00</p>
                                    </section>
                                    <section>
                                        <img src="../assets/icons/Location.svg" alt="" width="19">
                                        <p>location</p>
                                        <img src="../assets/icons/People.svg" alt="" width="25">
                                        <p>0/10</p>
                                    </section>
                                </section>
                                <a href="#" class="btn">LEES MEER</a>
                            </div>
                        </div>
                    </section>
                </main>
                <?php include_once('../views/footer.php'); ?>
            </div>
        </div>
    </body>
</html>