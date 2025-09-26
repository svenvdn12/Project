<section id="contact-section-header">
    <header class="faq-header">
        <h1>CONTACT</h1>
        <img src="./assets/icons/megaphone.svg" alt="megaphone icon">
    </header>
</section>
<section class="contact-content">
    <p>Wij staan open voor het beantwoorden van al je vragen, het sparren over je suggesties, en het kennismaken met potentiële samenwerkingspartners.</p>
    <p>Laat hieronder een bericht voor ons achter en we nemen zo snel mogelijk contact met je op.</p>
</section>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="contact-form">
    <div class="form-row">
        <div class="form-row2">
            <input type="text" name="name" id="name" placeholder="Naam..." value="<?= $name ? $name : ''?>">
            <?php if (!empty($nameError)){ ?>
                <p class="error"><?php echo $nameError; ?></p>
            <?php } ?>
        </div>
        <div class="form-row2">
            <input type="email" name="email" id="email" placeholder="Email..." value="<?= $email ? $email : ''?>" required>
            <?php if (!empty($emailError)){ ?>
                <p class="error"><?php echo $emailError; ?></p>
            <?php } ?>
        </div>
    </div>
    <textarea name="message" id="message" placeholder="Bericht..." rows="4"></textarea>
    <?php if (!empty($msgError)){ ?>
        <p class="error"><?php echo $msgError; ?></p>
    <?php } ?>

    <input type="submit" name="submit" value="VERSTUUR">
</form>