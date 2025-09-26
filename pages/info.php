<section>
    <header id="content-header" class="page-header">
        <h1>ONTMOETINGS-GROEP</h1>
        <img src="./assets/icons/megaphone.svg" alt="megaphone icon">
    </header>
    <div class="border-content">
    <p>placeholder datum en locatie</p>
    <p>De ontmoetingsgroep is een serie van 10 bijeenkomsten, waar we steeds over een ander thema in gesprek gaan. Denk aan emoties, keuzes maken en identiteit. We zorgen samen voor een veilige omgeving, waaring het uitwisselen van ervaringen centraal staat.</p>
    <p>De ontmoetingsgroep is voor jongvolwassenen (plusminus 18 - 30 jaar) die zich herkenne in neurodivergentie en graag in gesprek gaan met gelijkgestmden</p>
    <p>Of je nou kort geleden gediagnosticeerd bent en opzoek bent naar wat dat voor jou betekent, je niks met labels hebt en gewoon iets wil doen met die chaos in je hoofd, of een doorgewinterde neurodivergent bent die graag diens wijsheid deelt.</p>
    <p>Ik vraag NIET om een officiële diagnose.</p>
    <img src="./assets/images/placeholder.jpg" alt="placeholder" width="300" id="info-image">
    <p>Onderdeel van de aanmelding is een kennismakingsgesprek met de host. Zo weten jullie beiden met wie je te maken hebt en bespreken jullie al jouw verwachtingen en wensen rondom de ontmoetingsgroep.</p>
    <p>Schrijf je hieronder in! Er wordt contact met je opgenomen voor het maken van een afspraak.</p>
    <form action="<?php echo htmlspecialchars("index.php?page=info"); ?>" id="meeting-form" method="post">
        <section id="form-section">
            <div class="form-row2">
                <input type="text" name="name-signup-input" id="name-signup-input" placeholder="Naam..." value="<?= htmlspecialchars($formData['name']) ?>" />
                    <?php if (!empty($formData['errors']['name'])): ?>
                        <p class="error error2"><?= $formData['errors']['name'] ?></p>
                    <?php endif; ?>
            </div>
            <div class="form-row2">
                <input type="email" name="email-signup-input" id="email-signup-input" placeholder="E-mailadres..." value="<?= htmlspecialchars($formData['email']) ?>" />
                    <?php if (!empty($formData['errors']['email'])): ?>
                        <p class="error error2"><?= $formData['errors']['email'] ?></p>
                    <?php endif; ?>
            </div>
            <div class="form-row2">
                <input type="number" name="age-signup-input" id="age-signup-input" placeholder="20" value="<?= htmlspecialchars($formData['age']) ?>" />
                    <?php if (!empty($formData['errors']['age'])): ?>
                        <p class="error error2"><?= $formData['errors']['age'] ?></p>
                    <?php endif; ?>
            </div>
        </section>
        <textarea placeholder="Rede van aanmelding..." id="reason-signup-input" name="reason-signup-input" ><?= htmlspecialchars($formData['reason']) ?></textarea>
            <?php if (!empty($formData['errors']['reason'])): ?>
                <p class="error"><?= $formData['errors']['reason'] ?></p>
            <?php endif; ?>
        <textarea placeholder="Hoe ben je bij het chaos atelier gekomen..." id="source-signup-input" name="source-signup-input" ><?= htmlspecialchars($formData['source']) ?></textarea>
            <?php if (!empty($formData['errors']['source'])): ?>
                <p class="error"><?= $formData['errors']['source'] ?></p>
            <?php endif; ?>
        <textarea placeholder="Opmerkingen..." id="note-signup-input" name="note-signup-input"><?= htmlspecialchars($formData['note']) ?></textarea>
        <button type="submit" id="info-submit" name="info-submit">VERSTUUR</button>
    </form>
</div>
</section>