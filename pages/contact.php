<section class="main-contact-content">
    <section id="contact-section-header">
        <header class="faq-header page-header">
            <h1>CONTACT</h1>
            <img src="./assets/icons/megaphone.svg" alt="megaphone icon">
        </header>
    </section>
    <div class="border-content">
        <section class="contact-content">
            <p>Wij staan open voor het beantwoorden van al je vragen, het sparren over je suggesties, en het kennismaken met potentiële samenwerkingspartners.</p>
            <p>Laat hieronder een bericht voor ons achter en we nemen zo snel mogelijk contact met je op.</p>
        </section>
        <form action="<?php echo htmlspecialchars("index.php?page=contact"); ?>" method="post" class="contact-form">
            <div class="form-row">
                <div class="form-row2">
                    <input type="text" name="name" id="name" placeholder="Naam..." value="<?= $name ? $name : ''?>">
                    <?php if (!empty($nameError)){ ?>
                        <p class="error error2"><?php echo $nameError; ?></p>
                    <?php } ?>
                </div>
                <div class="form-row2">
                    <input type="email" name="email" id="email" placeholder="Email..." value="<?= $email ? $email : ''?>" required>
                    <?php if (!empty($emailError)){ ?>
                        <p class="error error2"><?php echo $emailError; ?></p>
                    <?php } ?>
                </div>
            </div>
            <textarea name="message" id="message" placeholder="Bericht..." rows="4"></textarea>
            <?php if (!empty($msgError)){ ?>
                <p class="error"><?php echo $msgError; ?></p>
            <?php } ?>
            <button type="submit" id="submit" name="submit">VERSTUUR</button>
        </form>
    </div>
</section>