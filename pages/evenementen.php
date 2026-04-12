<section class="content-main-section">
    <header id="content-header" class="events-header">
        <h1>EVENEMENTEN</h1>
        <div class="hidden-img">
            <img src="./assets/icons/megaphone.svg" alt="megaphone icon">
        </div>
    </header>
</section>
<?php if (isset($_GET['success']) && $_GET['success'] == '1'): ?>
    <div class="success-message" style="background-color: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 12px; margin: 20px; border-radius: 4px; text-align: center;">
        ✓ Je aanmelding is succesvol verzonden! We nemen binnenkort contact met je op.
    </div>
<?php endif; ?>
<section id="category-selector">
    <a href="#" class="btn filter">UITSTAPJES</a>
    <a href="#" class="btn filter">ONTMOETINGSGROEP</a>
    <a href="#" class="btn filter">WORKSHOPS</a>
</section>
<section id="events">
    <?php 
    include_once('models/evenementenModel.php');
    $evenementenModel = new EvenementenModel($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
    $evenementen = $evenementenModel->getEvenementen();
    
    foreach ($evenementen as $evenement) {
        include 'views/program.php';
    }
    ?>
    
</section>
