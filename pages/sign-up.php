    <div class="border-content" id="sign-up-content">
    <form action="<?php echo htmlspecialchars("index.php?page=info"); ?>" id="meeting-form" method="post">
        <input type="hidden" name="event-id" id="event-id-input" value="<?= isset($_GET['id']) ? htmlspecialchars($_GET['id']) : '' ?>" />
        <section id="form-section">
            <div class="form-row2">
                <input type="text" name="name-signup-input" id="name-signup-input" placeholder="Naam..." value="<?= htmlspecialchars($formData['name']) ?>" />
                    <?php if (!empty($formData['errors']['name'])): ?>
                        <p class="error error2"><?= $formData['errors']['name'] ?></p>
                    <?php endif; ?>
            </div>
            <div class="form-row2">
                <input type="email" name="email-signup-input" id="email-signup-input" placeholder="E-mailadres..." value="<?= htmlspecialchars($formData['email']) ?>" />
                    <?php if (!empty($formData['errors']['email'])): ?>
                        <p class="error error2"><?= $formData['errors']['email'] ?></p>
                    <?php endif; ?>
            </div>
            <div class="form-row2">
                <input type="number" name="age-signup-input" id="age-signup-input" placeholder="20" value="<?= htmlspecialchars($formData['age']) ?>" />
                    <?php if (!empty($formData['errors']['age'])): ?>
                        <p class="error error2"><?= $formData['errors']['age'] ?></p>
                    <?php endif; ?>
            </div>
        </section>
        <textarea placeholder="Rede van aanmelding..." id="reason-signup-input" name="reason-signup-input" ><?= htmlspecialchars($formData['reason']) ?></textarea>
            <?php if (!empty($formData['errors']['reason'])): ?>
                <p class="error"><?= $formData['errors']['reason'] ?></p>
            <?php endif; ?>
        <textarea placeholder="Hoe ben je bij het chaos atelier gekomen..." id="source-signup-input" name="source-signup-input" ><?= htmlspecialchars($formData['source']) ?></textarea>
            <?php if (!empty($formData['errors']['source'])): ?>
                <p class="error"><?= $formData['errors']['source'] ?></p>
            <?php endif; ?>
        <textarea placeholder="Opmerkingen..." id="note-signup-input" name="note-signup-input"><?= htmlspecialchars($formData['note']) ?></textarea>
        <button type="submit" id="info-submit" name="info-submit">MELD JE AAN!</button>
    </form>
    </div>