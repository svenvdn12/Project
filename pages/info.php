<?php
    declare(strict_types=1);

    $name = $email = $reason = $source = $age = $message = $note = '';
    $nameError = $emailError = $ageError = $reasonError = $sourceError = '';

    if(isset($_POST['info-submit'])){
        $errors = [];
        if(!empty($_POST['name-signup-input'])){
            $name = $_POST['name-signup-input'];
        }
        else{
            $nameError = 'Naam is verplicht.';
        }
        if(!empty($_POST['email-signup-input'])){
            $email = $_POST['email-signup-input'];
            
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailError = 'Dit is een ongeldige email.';
            }
        }
        else{
            $emailError = 'Email is verplicht.';
        }
        if(!empty($_POST['age-signup-input'])){ 
            $ageInput = intval($_POST['age-signup-input']);
            if($ageInput <= 0){
                $ageError = 'Voer een geldig nummer in.';
            }
        }
        if(!empty($_POST['reason-signup-input'])){
            $reason = $_POST['reason-signup-input'];
        }
        else{
            $reasonError = 'Geen reden ingevuld.';
        }
        if(!empty($_POST['source-signup-input'])){
            $source = $_POST['source-signup-input'];
        }
        else{
            $sourceError = 'Geen bron ingevuld.';
        }
        if(isset($_POST['note-signup-input'])){
            $note = $_POST['note-signup-input'];
        }
    }
?>
<!DOCTYPE html>
<html lang="nl-NL">

<head>
    <meta charset="UTF-8">
    <title>Info - Chaos Atelier</title>
    <link rel="icon" type="image/svg" href="../assets/icons/brands/site/logo.svg">
    <meta name="description" content="Vind hier alle informatie over onze activiteiten van de Chaos Atelier!">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/modules/header.css">
    <link rel="stylesheet" href="../css/modules/footer.css">
    <link rel="stylesheet" href="../css/pages/info.css">
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
            "streetAddress": "Flevoweg",
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
                    <header id="content-header">
                        <h1>ONTMOETINGS-GROEP</h1>
                        <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
                    </header>
                    <div class="border-content">
                        <p>Placeholder Datum & Locatie</p>
                        <p>De ontmoetingsgroep is een serie van 10 bijeenkomsten, waar we steeds over een ander thema in gesprek gaan. Denk aan emoties, keuzes maken en identiteit. We zorgen samen voor een veilige omgeving, waaring het uitwisselen van ervaringen centraal staat.</p>
                        <p>De ontmoetingsgroep is voor jongvolwassenen (plusminus 18 - 30 jaar) die zich herkenne in neurodivergentie en graag in gesprek gaan met gelijkgestmden</p>
                        <p>Of je nou kort geleden gediagnosticeerd bent en opzoek bent naar wat dat voor jou betekent, je niks met labels hebt en gewoon iets wil doen met die chaos in je hoofd, of een doorgewinterde neurodivergent bent die graag diens wijsheid deelt.</p>
                        <p>Ik vraag NIET om een officiële diagnose.</p>
                        <img src="../assets/images/placeholder.jpg" alt="placeholder" width="300" id="info-image">
                        <p>Onderdeel van de aanmelding is een kennismakingsgesprek met de host. Zo weten jullie beiden met wie je te maken hebt en bespreken jullie al jouw verwachtingen en wensen rondom de ontmoetingsgroep.</p>
                        <p>Schrijf je hieronder in! Er wordt contact met je opgenomen voor het maken van een afspraak.</p>
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" id="meeting-form" method="post">
                            <section id="form-section">
                                <div class="form-row2">
                                    <input type="text" name="name-signup-input" id="name-signup-input" placeholder="Naam..." value="<?= $name ? $name : ''?>" required/>
                                    <?php if (!empty($nameError)){ ?>
                                        <p class="error"><?php echo $nameError; ?></p>
                                    <?php } ?>
                                </div>
                                <div class="form-row2">
                                    <input type="email" name="email-signup-input" id="email-signup-input" placeholder="E-mailadres..." value="<?= $email ? $email : ''?>" required />
                                    <?php if (!empty($emailError)){ ?>
                                        <p class="error"><?php echo $emailError; ?></p>
                                    <?php } ?>
                                </div>
                                <div class="form-row2">
                                    <input type="number" name="age-signup-input" id="age-signup-input" placeholder="20" value="<?= $ageInput ? $ageInput : ''?>" required/>
                                    <?php if (!empty($ageError)){ ?>
                                        <p class="error"><?php echo $ageError; ?></p>
                                    <?php } ?>
                                </div>
                            </section>
                            <textarea placeholder="Rede van aanmelding..." id="reason-signup-input" name="reason-signup-input" required><?= $reason ? $reason : ''?></textarea>
                            <?php if (!empty($reasonError)){ ?>
                                    <p class="error"><?php echo $reasonError; ?></p>
                                <?php } ?>
                            <textarea placeholder="Hoe ben je bij het chaos atelier gekomen..." id="source-signup-input" name="source-signup-input" required><?= $source ? $source : ''?></textarea>
                            <?php if (!empty($sourceError)){ ?>
                                    <p class="error"><?php echo $sourceError; ?></p>
                            <?php } ?>
                            <textarea placeholder="Opmerkingen..." id="note-signup-input" name="note-signup-input"><?= $note ? $note : ''?></textarea>
                            <button type="submit" id="info-submit" name="info-submit">VERSTUUR</button>
                        </form>
                    </div>
                </section>
            </main>
            <?php include_once('../views/footer.php'); ?>
        </div>
    </div>
</body>

</html>