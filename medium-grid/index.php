<!DOCTYPE html>
<html>
    <head>
        <title>hallo</title>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" href="../css/main.css">
        <link rel="stylesheet" href="../css/modules/header.css">
        <link rel="stylesheet" href="../css/modules/footer.css">
        <link rel="stylesheet" href="../css/medium-grid-supplement.css">
    </head>
    <body>
        <div id="container">
            <div id="page-content-container">
                <main>
                    <section>
                        <header>
                            <h1>MEDIUM GRID</h1>
                            <img src="../assets/icons/megaphone.svg" alt="totally a megaphone">
                        </header>
                    </section>
                    <section class="medium-grid">
                        <?php
                            for ($i = 0; $i < 6; $i++)
                            {
                                echo '<img src="../assets/images/medium-grid-test/000003070009.jpg" width="300" height="300" alt="">';
                            }
                        ?>
                    </section>
                <?php include_once('../views/footer.php'); ?>
            </div>
        </div>
    </body>
</html>