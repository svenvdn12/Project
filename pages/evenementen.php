<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="">

<head>
  <meta charset="UTF-8">
  <title>Over ons - Chaos Atelier</title>
  <meta name="description" content="Chaos Atelier Home">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="../css/main.css">
  <link rel="stylesheet" href="../css/modules/header.css">
  <link rel="stylesheet" href="../css/modules/footer.css">
    <link rel="stylesheet" href="../css/pages/evenementen.css">
    <link rel="stylesheet" href="../css/modules/program.css">

  <script src="../js/header-dropdown-menu-toggle.js" defer></script>
</head>
<body>
    <div id="container">
        <?php include_once('../views/header.php'); ?>
        <div id="page-content-container">
            <div id="evenementen-container">
                <section>
                    <header>
                        <h1>ACTIVITEITEN</h1>
                        <img src="../assets/icons/megaphone.svg" alt="megaphone icon">
                    </header>
                </section>
                <section>
                    <button class="filter"><h2>UITSTAPJES</h2></button>
                    <button class="filter active"><h2>ONTMOETINGSGROEP</h2></button>
                    <button class="filter"><h2>WORKSHOPS</h2></button>
                </section>
                <section>
                    <?php 
                        // Dit is gewoon om de program view te testen en de pagina wat body te geven, haal weg voordat dit live gaat
                        for ($i = 0; $i < 4; $i++)
                        {
                            include('../views/program.php');
                        }
                    ?>
                </section>
                <section>
                    <a href="#"><img src="../assets/icons/arrow-left.svg" alt="back"></a>
                    <span>Volgende Pagina</span>
                    <a href="#"><img src="../assets/icons/arrow-right.svg" alt="next"></a>
                </section>
            </div>
        </div>
        <?php include_once('../views/footer.php'); ?>
    </div>
</body>
</html>