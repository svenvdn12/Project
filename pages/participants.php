<?php
    include_once('models/evenementenModel.php');
    include_once('models/signUpModel.php');
    include_once('models/databaseModel.php');
    include_once('models/loginModel.php');
    

    // Check if user is logged in and is admin
    $loginModel = new LoginModel($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);

    $signUpModel = new SignUpModel($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
    $evenementenModel = new EvenementenModel($_ENV['DB_HOST'], $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD'], $_ENV['DB_DATABASE']);
    $evenementen = $evenementenModel->getEvenementen();
    
    // Handle participant deletion
    if (isset($_POST['delete-participant']) && isset($_POST['participant-id'])) {
        $participantId = (int)$_POST['participant-id'];
        try {
            $evenementenModel->deleteParticipant($participantId);
            header("Location: index.php?page=participants&id=" . (int)$_GET['id']);
            exit();
        } catch (Exception $e) {
            $deleteError = "Error deleting participant: " . $e->getMessage();
        }
    }
    
    // Validate event ID
    $eventId = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    $selectedEventTitle = '';
    $selectedDate = '';
    $validEvent = false;
    
    foreach ($evenementen as $evenement) {
        if ($evenement['id'] == $eventId) {
            $selectedEventTitle = $evenement['title'];
            $selectedDate = $evenement['date'];
            $validEvent = true;
            break;
        }
    }
    
    if (!$validEvent) {
        echo '<div class="error">Evenement niet gevonden.</div>';
        return;
    }
?>

<section class="content-main-section">
    <header id="content-header" class="events-header">
        <h1>AANMELDINGEN</h1>
        <div class="hidden-img">
            <img src="./assets/icons/megaphone.svg" alt="megaphone icon">
        </div>
    </header>
</section>
    <div class="border-content">
        <?php if (isset($deleteError)): ?>
            <div class="error" style="margin-bottom: 20px;"><?php echo htmlspecialchars($deleteError); ?></div>
        <?php endif; ?>
        <h2><?php echo htmlspecialchars($selectedEventTitle); ?> (<?php echo htmlspecialchars($selectedDate); ?>)</h2>
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>E-mailadres</th>
                    <th>Leeftijd</th>
                    <th>Reden van aanmelding</th>
                    <th>Hoe ben je bij het chaos atelier gekomen?</th>
                    <th>Opmerkingen</th>
                    <th>verwijderen</th>
                </tr>
            </thead>
            <tbody>
                <?php
                try {
                    $participants = $signUpModel->getParticipants($eventId);
                    if (!is_array($participants) || empty($participants)) {
                        echo '<tr><td colspan="6" style="text-align: center; font-style: italic;">Nog geen aanmeldingen voor dit evenement.</td></tr>';
                    } else {
                        foreach ($participants as $participant) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($participant['name'] ?? '') . '</td>';
                            echo '<td>' . htmlspecialchars($participant['email'] ?? '') . '</td>';
                            echo '<td>' . htmlspecialchars($participant['age'] ?? '') . '</td>';
                            echo '<td>' . htmlspecialchars($participant['reason'] ?? '') . '</td>';
                            echo '<td>' . htmlspecialchars($participant['source'] ?? '') . '</td>';
                            echo '<td>' . htmlspecialchars($participant['note'] ?? '') . '</td>';
                            echo '<td>';
                            echo '<form method="post" style="display:inline;" onsubmit="return confirm(\'Weet je zeker dat je deze aanmelding wilt verwijderen?\');">';
                            echo '<input type="hidden" name="participant-id" value="' . htmlspecialchars($participant['id']) . '">';
                            echo '<button type="submit" name="delete-participant" class="btn">Verwijderen</button>';
                            echo '</form>';
                            echo '</td>';
                            echo '</tr>';
                        }
                    }
                } catch (Exception $e) {
                    echo '<tr><td colspan="6" style="text-align: center; color: red;">Error loading participants: ' . htmlspecialchars($e->getMessage()) . '</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</section>