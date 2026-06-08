        <section id="contact-section-header">
            <header class="faq-header page-header">
                <h1>CONTACT</h1>
                <div class="hidden-img">
                    <img src="./assets/icons/megaphone.svg" alt="megaphone icon">
                </div>
            </header>
        </section>
    <section class="main-contact-content">
        <div class="border-content">
            <section class="contact-content">
                <h2>Heb je een vraag of wil je gewoon even sparren?</h2>
                <p class="contact-text">Of je nu een jongere bent die zich herkent in onze chaos, een potentiële partner met
                    een goed idee, of een expert die wil bijdragen: we horen graag van je.</p>
                <p>Twijfel je of de ontmoetingsgroep bij je past? Heb je een idee voor een workshop of wil je
                    meer weten over onze community? Geen vraag is te gek.</p>
                <ol>
                    <li>Stuur een appje: <a href="https://chat.whatsapp.com/Ji5LMAyK5tp5lSvz1h71mg" target="_blank">chaos atelier whatsapp groep</a></li>
                    <li>Mail ons: <a href="mailto:hetchaosatelier@gmail.com">hetchaosatelier@gmail.com</a></li>
                </ol>
                <p>Voor organisaties & partners Wij slaan graag bruggen tussen organisaties die werken met
                    onze doelgroep. Wil je samenwerken, heb je een subsidievraag of wil je ons uitnodigen voor
                    een lezing over neurodiversiteit op de werkvloer?
                </p>
                <ol>
                    <li>contact persoon: Sofia of Nika.</li>
                    <li>LinkedIn: <a target="_blank" href="https://www.linkedin.com/company/het-chaos-atelier/posts/?feedView=all">https://www.linkedin.com/hetchaosatelier</a></li>
                    <li>Mail ons: <a href="mailto:hetchaosatelier@gmail.com">hetchaosatelier@gmail.com</a></li>
                </ol>
            </section>
                <h2 class="messsage">Laat een bericht achter!</h2>
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
                <button type="submit" id="submit" name="submit">VERSTUUR BERICHT</button>
            </form>
            <p>Heb je een praktische vraag over diagnoses of kosten? Check dan eerst even onze <a href="index.php?page=FAQ">FAQ/Veelgestelde vragen</a>.</p>
        </div>
    </section>