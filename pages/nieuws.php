<section class="content-main-section">
    <header id="content-header" class="news-header">
        <h1>NIEUWS</h1>
        <div class="hidden-img">
            <img src="./assets/icons/megaphone.svg" alt="megaphone icon">
        </div>
    </header>
</section>
<section id="news-articles">
    <?php 
    include_once('models/evenementenModel.php');
    $evenementenModel = new EvenementenModel();
    $evenementen = $evenementenModel->getEvenementen();
    
    foreach ($evenementen as $evenement) {
        include './views/program.php';
    }
    ?>
</section>