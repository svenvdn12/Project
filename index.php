<?php
    declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="UTF-8">
        <title>php base</title>
        <meta name="description" content="php base">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/modules/header.css">
        <link rel="stylesheet" href="css/modules/footer.css">
        <script src="js/header-dropdown-menu-toggle.js" defer></script>
    </head>
    <body>
        <div id="container">
            <?php include_once('views/header.php'); ?>
            <div id="page-content-container">
                <main>
                    <section>
                        <header>
                            <h1>TEST HEADING</h1>
                            <img src="assets/icons/megaphone.svg" alt="megaphone icon">
                        </header>
                    </section>
                    <div class="test-block">
                        <h1>TEST BLOCK PLEASE REMOVE</h1>
                    </div>
                    <div class="test-block">
                        <h1>TEST BLOCK PLEASE REMOVE</h1>
                    </div>
                    <div class="test-block">
                        <h1>TEST BLOCK PLEASE REMOVE</h1>
                    </div>
                </main>
                <?php include_once('views/footer.php'); ?>
            </div>
        </div>
    </body>
</html>