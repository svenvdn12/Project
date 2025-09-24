<?php
    declare(strict_types=1);
    
    $name = $email = $message = '';
    $nameError = $emailError = $msgError = '';

    if(isset($_POST['submit'])){
        $errors = [];
        if(!empty($_POST['name'])){
            $name = $_POST['name'];
        }
        else{
            $nameError = 'Naam is niet ingevuld.';
        }
        if(!empty($_POST['email'])){
            $email = $_POST['email'];

            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $emailError = 'Dit is een ongeldige email.';
            }
        }
        else{
            $emailError = 'Email is verplicht.';
        }
        if(!empty($_POST['message'])){
            $message = $_POST['message'];
        }
        else{
            $msgError = 'Geen bericht ingevuld.';
        }
    }
?>
<!DOCTYPE html>
<html lang="NL-nl">
    <head>
        <meta charset="UTF-8">
        <title>FAQ</title>
        <meta name="description" content="Chaos Atelier's FAQ Pagina">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/pages/faq.css">
        <link rel="stylesheet" href="../css/pages/contact.css">
        <link rel="stylesheet" href="../css/modules/header.css">
        <link rel="stylesheet" href="../css/modules/footer.css">
        <script src="../js/header-dropdown-menu-toggle.js" defer></script>
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
                </main>
                <?php include_once('../views/footer.php'); ?>
            </div>
        </div>
    </body>
</html>