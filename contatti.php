<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contatti - 21 OVEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="index.php" class="navbar-link">HOME</a>
            <a href="menu.php" class="navbar-link">MENÙ</a>
            <a href="ordina.php" class="navbar-link">ORDINA</a>
            <a href="prenota.php" class="navbar-link">PRENOTA UN TAVOLO</a>
            <a href="contatti.php" class="navbar-link">CONTATTI</a>
        </div>
    </nav>

    <!-- Sezione contatti -->
    <section class="home-section">
        <div class="container" style="max-width: 600px;">
            <h2 class="section-title text-center mb-4">Contattaci</h2>
            <form action="scrivi_file.php" method="post">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-Mail</label>
                    <input type="email" class="form-control" name="mail" id="email" required>
                </div>
                <div class="mb-4">
                    <label for="messaggio" class="form-label">Messaggio</label>
                    <textarea class="form-control" name="messaggio" id="messaggio" rows="5" required></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="order-button">Invia</button>
                    <button type="reset" class="order-button" style="background-color: transparent; color: var(--rosso-pizzeria); border: 2px solid var(--rosso-pizzeria);">Cancella</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
