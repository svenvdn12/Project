<link rel="icon" type="image/svg" href="../assets/icons/brands/site/logo.svg">
<link rel="stylesheet" href="../css/modules/evenementen.css">
<link rel="stylesheet" href="../css/modules/program.css">
<div id="evenementen-container">
    <section>
        <header>
            <h1>Activiteiten - Chaos Atelier</h1>
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