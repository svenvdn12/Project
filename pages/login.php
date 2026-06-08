<section class="content-main-section">
    <header id="content-header" class="login-header">
        <h1>INLOGGEN</h1>
        <div class="hidden-img">
            <img src="./assets/icons/megaphone.svg" alt="megaphone icon">
        </div>
    </header>
</section>

<div class="border-content" id="login-content">
    <?php if (!empty($formData['success_message'])): ?>
        <div class="success-message" style="background-color: #d4edda; border: 1px solid #c3e6cb; color: #155724; padding: 12px; margin: 20px 0; border-radius: 4px; text-align: center;">
            ✓ <?= htmlspecialchars($formData['success_message']) ?>
        </div>
    <?php endif; ?>
    
    <?php if (!empty($formData['errors']['general'])): ?>
        <div class="error general-error" style="background-color: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; padding: 12px; margin: 20px 0; border-radius: 4px; text-align: center;">
            ✗ <?= htmlspecialchars($formData['errors']['general']) ?>
        </div>
    <?php endif; ?>

    <!-- Login/Register Toggle -->
    <div class="login-toggle" style="display: flex; gap: 20px; margin-bottom: 30px; justify-content: center;">
        <button type="button" id="login-tab" class="btn filter active" onclick="showLoginForm()">INLOGGEN</button>
        <button type="button" id="register-tab" class="btn filter" onclick="showRegisterForm()">REGISTREREN</button>
    </div>

    <!-- Login Form -->
    <div id="login-form" class="auth-form">
        <h2 style="color: var(--text-color-secondary); margin-bottom: 20px; text-align: center;">Log in op je account</h2>
        
        <form action="<?php echo htmlspecialchars("index.php?page=login"); ?>" method="post" style="display: flex; flex-direction: column; gap: 20px;">
            <div class="form-row2-login">
                <input type="text" name="username-login" id="username-login" placeholder="Gebruikersnaam of email..." 
                value="<?= htmlspecialchars($formData['username'] ?? '') ?>" required />
                <?php if (!empty($formData['errors']['username'])): ?>
                    <p class="error error2" style="color: #721c24; margin-top: 5px; font-size: 14px;">
                        <?= htmlspecialchars($formData['errors']['username']) ?>
                    </p>
                <?php endif; ?>
            </div>
            
            <div class="form-row2-login">
                <input type="password" name="password-login" id="password-login" placeholder="Wachtwoord..." required />
                <?php if (!empty($formData['errors']['password'])): ?>
                    <p class="error error2" style="color: #721c24; margin-top: 5px; font-size: 14px;">
                        <?= htmlspecialchars($formData['errors']['password']) ?>
                    </p>
                <?php endif; ?>
            </div>
            
            <button type="submit" name="login-submit" class="btn" style="margin-top: 10px;" id="login-button">INLOGGEN</button>
        </form>
    </div>

    <!-- Registration Form -->
    <div id="register-form" class="auth-form" style="display: none;">
        <h2 style="color: var(--text-color-secondary); margin-bottom: 20px; text-align: center;">Maak een nieuw account</h2>
        
        <form action="<?php echo htmlspecialchars("index.php?page=login"); ?>" method="post" style="display: flex; flex-direction: column; gap: 20px;">
            <div class="form-row2-login">
                <input type="text" name="username-register" id="username-register" placeholder="Gebruikersnaam..." 
                       value="<?= htmlspecialchars($formData['username'] ?? '') ?>" required />
                <?php if (!empty($formData['errors']['username'])): ?>
                    <p class="error error2" style="color: #721c24; margin-top: 5px; font-size: 14px;">
                        <?= htmlspecialchars($formData['errors']['username']) ?>
                    </p>
                <?php endif; ?>
            </div>

            <div class="form-row1-login">
                <input type="email" name="email-register" id="email-register" placeholder="E-mailadres..." 
                       value="<?= htmlspecialchars($formData['email'] ?? '') ?>" required />
                <?php if (!empty($formData['errors']['email'])): ?>
                    <p class="error error2" style="color: #721c24; margin-top: 5px; font-size: 14px;">
                        <?= htmlspecialchars($formData['errors']['email']) ?>
                    </p>
                <?php endif; ?>
            </div>
            
            <div class="form-row2-login">
                <input type="password" name="password-register" id="password-register" placeholder="Wachtwoord..." required />
                <?php if (!empty($formData['errors']['password'])): ?>
                    <p class="error error2" style="color: #721c24; margin-top: 5px; font-size: 14px;">
                        <?= htmlspecialchars($formData['errors']['password']) ?>
                    </p>
                <?php endif; ?>
            </div>
            
            <div class="form-row2-login">
                <input type="password" name="password-confirm" id="password-confirm" placeholder="Bevestig wachtwoord..." required />
                <?php if (!empty($formData['errors']['confirm_password'])): ?>
                    <p class="error error2" style="color: #721c24; margin-top: 5px; font-size: 14px;">
                        <?= htmlspecialchars($formData['errors']['confirm_password']) ?>
                    </p>
                <?php endif; ?>
            </div>
            
            <button type="submit" name="register-submit" class="btn" style="margin-top: 10px;">REGISTREREN</button>
        </form>
    </div>
</div>

<script src="js/login.js">
// Show registration form if there were registration errors
<?php if (isset($_POST['register-submit']) && !empty($formData['errors'])): ?>
showRegisterForm();
<?php endif; ?>
</script>
