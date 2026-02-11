<div class="program">
    <img src="<?php echo htmlspecialchars($evenement['image']); ?>" width="357" height="200" alt="<?php echo htmlspecialchars($evenement['title']); ?>">
    <section>
        <h2><?php echo htmlspecialchars($evenement['title']); ?></h2>
        <p><?php echo htmlspecialchars($evenement['text']); ?></p>
        <div id="info-grid">
            <div>
                <img src="./assets/icons/Calendar.svg" alt="">
                <h2><?php echo date('d-m-Y', strtotime($evenement['date'])); ?></h2>
            </div>
            <div>
                <img src="./assets/icons/Clock.svg" alt="">
                <h2><?php echo htmlspecialchars($evenement['time']); ?></h2>
            </div>
            <div>
                <img src="./assets/icons/Vector.svg" alt="">
                <h2><?php echo htmlspecialchars($evenement['location']); ?></h2>
            </div>
            <div>
                <img src="./assets/icons/People.svg" alt="">
                <h2><?php echo htmlspecialchars($evenement['capacity']); ?></h2>
            </div>
            <?php if (isset($_GET['page']) && $_GET['page'] === 'evenementen') { ?>
            <a href="index.php?page=sign-up&id=<?php echo $evenement['id']; ?>" class="btn desktop-only">AANMELDEN</a>
            <?php } else {?>
            <a href="index.php?page=evenementen" class="btn desktop-only">Lees Meer</a>
            <?php } ?>
        </div>
         <button class="btn-aanmelden mobile-only" data-event-id="<?php echo $evenement['id']; ?>">AANMELDEN</button>
    </section>
</div>