<section>
    <header id="content-header">
        <h1>ONTMOETINGS-GROEP</h1>
        <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
    </header>
    <p>placeholder datum en locatie</p>
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
</section>