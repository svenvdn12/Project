<section class="content-main-section">
    <header id="content-header" class="events-header">
        <h1>EVENEMENTEN</h1>
        <div class="hidden-img">
            <img src="./assets/icons/megaphone.svg" alt="megaphone icon">
        </div>
    </header>
</section>
<section id="category-selector">
    <a href="#" class="btn filter">UITSTAPJES</a>
    <a href="#" class="btn filter">ONTMOETINGSGROEP</a>
    <a href="#" class="btn filter">WORKSHOPS</a>
</section>
<section id="events">
    <!-- <section><p id="coming-soon-text">coming soon.....</p><br></br></section> -->
    <!-- <section><p id="coming-soon-text" class="evenement-links">houd je op de hoogte via:  </p> -->
        <!-- <div class="socials-wrapper">
            <a target="_blank" href="https://www.linkedin.com/in/sofia-van-der-knaap-4848062a5/?originalSubdomain=nl"><img src="./assets/icons/brands/social/linked-in.svg" alt="Linked In logo"></a>
            <a target="_blank" href="https://www.instagram.com/hetchaosatelier/"><img src="./assets/icons/brands/social/instagram.svg" alt="Instagram logo"></a>
        </div> -->
    <!-- </section> -->
    <?php 
    include_once('models/evenementenModel.php');
    $evenementenModel = new EvenementenModel();
    $evenementen = $evenementenModel->getEvenementen();
    
    foreach ($evenementen as $evenement) {
        include 'views/program.php';
    }
    ?>
</section>
<script src="../js/evenementen.js"></script>