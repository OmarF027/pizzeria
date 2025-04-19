<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="21 OVEN - Prenota un tavolo per gustare le nostre pizze artigianali in un ambiente accogliente. Prenota ora e vivi l'esperienza unica di 21 OVEN.">
    <title>21 OVEN - Prenota un tavolo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="prenota.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="navbar-container">
            <a href="index.php" class="navbar-link">Home</a>
            <a href="menu.php" class="navbar-link">Menù</a>
            <a href="ordina.php" class="navbar-link">Ordina</a>
            <a href="prenota.php" class="navbar-link active">Prenota un tavolo</a>
            <a href="contatti.php" class="navbar-link">Contatti</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-logo">
            <img src="img/logo2.jpg" alt="21 OVEN - Logo pizzeria artigianale" style="max-width: 300px; width: 100%; height: auto;">
        </div>
        <div class="hero-divider"></div>
        <p class="hero-hashtag">Prenota un tavolo</p>
    </section>

    <!-- Prenotazione Opzioni - Stile identico a ordina.php -->
<section class="home-section">
    <div class="container">
        <div class="row g-4 justify-content-center">
            <div class="col-md-5">
                <div class="p-4 rounded shadow-sm" style="background-color: #f8f8f8; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <h3 style="font-weight: 700; font-size: 1.3rem; text-transform: uppercase;">Telefono</h3>
                        <p style="color: #555;">Chiama il nostro numero fisso per prenotare un tavolo.</p>
                    </div>
                    <a href="tel:+390564123456" class="order-button mt-3" style="background-color: var(--nero); color: var(--bianco); text-transform: uppercase;">0564 123456</a>
                </div>
            </div>
            
            <div class="col-md-5">
                <div class="p-4 rounded shadow-sm" style="background-color: #f8f8f8; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <h3 style="font-weight: 700; font-size: 1.3rem; text-transform: uppercase;">Cellulare</h3>
                        <p style="color: #555;">Chiama o invia un messaggio per prenotazioni.</p>
                    </div>
                    <a href="tel:+393471234567" class="order-button mt-3" style="background-color: var(--nero); color: var(--bianco); text-transform: uppercase;">347 123 4567</a>
                </div>
            </div>
        </div>

        <div class="orari-box mt-5 text-center p-4 rounded" style="background-color: var(--grigio-sfondo); max-width: 500px; margin: 40px auto 0 auto;">
            <h4 class="orari-title" style="font-weight: 700; color: var(--nero); text-transform: uppercase;">Orari di apertura</h4>
            <p style="font-size: 1.1rem; color: var(--nero);">Tutti i giorni: 19:00 - 23:30</p>
        </div>
    </div>
</section>

    <!-- Mappa -->
    <section class="location-section">
        <div class="container">
            <div class="location-title-container">
                <h2 class="location-title">DOVE SIAMO</h2>
            </div>
            <div class="map-container ratio ratio-16x9">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3186.6890702053526!2d12.49237331543386!3d41.89021037926441!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132f6047749dffdb%3A0xacc52cb6cf1b85b2!2sColosseo!5e0!3m2!1sit!2sit!4v1589814539871!5m2!1sit!2sit"
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mappa della posizione di 21 OVEN">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div>
            <p>© 2025 21 OVEN – Tutti i diritti riservati</p>
            <p>
                Roma | 
                <a href="tel:+393471234567">+39 347 123 4567</a> | 
                <a href="https://facebook.com" target="_blank">Facebook</a> | 
                <a href="https://instagram.com" target="_blank">Instagram</a>
            </p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
