<?php
session_start(); // Avvia la sessione

// Funzione per includere la navbar
function includeNavbar() {
    echo '
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="index.php" class="navbar-link">HOME</a>
            <a href="menu.php" class="navbar-link">MENÙ</a>
            <a href="ordina.php" class="navbar-link">ORDINA</a>
            <a href="prenota.php" class="navbar-link">PRENOTA UN TAVOLO</a>
            <a href="contatti.php" class="navbar-link">CONTATTI</a>
        </div>
    </nav>';
}

// Controlla se il form è stato inviato tramite POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recupera i dati inviati dal form in modo sicuro
    $nome = filter_input(INPUT_POST, 'nome');
    $cognome = filter_input(INPUT_POST, 'cognome');
    $email = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
    $messaggio = filter_input(INPUT_POST, 'messaggio');

    // Verifica se i dati obbligatori sono stati inseriti
    if (!empty($nome) && !empty($email) && !empty($messaggio)) {
        // Mostra il messaggio di conferma senza card
        ?>
        <!DOCTYPE html>
        <html lang="it">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Contatto Inviato - 21 OVEN</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="styles.css"> 
        </head>
        <body>
            <?php includeNavbar(); ?>
            <section class="home-section">
            <h2 class="section-title">Grazie per averci contattato!</h2>
                    <p class="section-text">Il tuo messaggio è stato inviato con successo. Ti risponderemo al più presto!</p>
                    <div class="text-center">
                        <a href="index.php" class="btn btn-danger">Torna alla Home</a>
                    </div>
                </div>
            </section>
        </body>
        </html>
        <?php
    } else {
        // Mostra un messaggio di errore
        ?>
        <!DOCTYPE html>
        <html lang="it">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Errore - 21 OVEN</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="styles.css"> <!-- Assicurati che styles.css sia incluso -->
        </head>
        <body>
            <?php includeNavbar(); ?>
            <section class="home-section">
                <div class="container" style="max-width: 600px;">
                    <h2 class="section-title text-center mb-4">Errore nell'Invio del Messaggio</h2>
                    <!-- Messaggio di errore -->
                    <div class="alert alert-danger">
                        <h5 class="alert-heading">Si è verificato un errore</h5>
                        <p>Assicurati di aver compilato tutti i campi obbligatori (Nome, E-mail e Messaggio) prima di inviare.</p>
                    </div>
                    <p class="mt-4 text-center">Per favore, prova a inviare il messaggio di nuovo.</p>
                    <div class="text-center">
                        <a href="index.php" class="btn btn-danger">Torna alla Home</a>
                    </div>
                </div>
            </section>
        </body>
        </html>
        <?php
    }
}
?>
