<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="21 OVEN - Pizza artigianale consegnata a domicilio. Ordina la tua pizza preferita online.">
    <title>21 OVEN - Pizza artigianale a domicilio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-container">
                    <a href="index.php" class="navbar-link">HOME</a>
                    <a href="menu.php" class="navbar-link">MENÙ</a>
                    <a href="ordina.php" class="navbar-link">ORDINA</a>
                    <a href="prenota.php" class="navbar-link">PRENOTA UN TAVOLO</a>
                    <a href="contatti.php" class="navbar-link">CONTATTI</a>
                </div>
            </div>
        </div>
    </nav>
    
    <!-- Hero section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-logo">
                <img src="img/logo2.jpg" alt="21 OVEN - Logo pizzeria artigianale" width="300" class="img-fluid">
            </div>
            <div class="hero-divider"></div>
            <div class="hero-hashtag">Acqua, lievito, farina e sale: gli ingredienti in cui crediamo. Il nostro impasto, con farina 00, è idratato al 70% e lievitato 48 ore per leggerezza e alta digeribilità.</div>
        </div>
    </section>
    
    <!-- Sezione "Pizza a casa tua" -->
    <section class="home-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <img src="img/box.jpg" alt="Confezione pizza 21 OVEN a domicilio" width="300" class="img-fluid home-image">
                </div>
                <div class="col-md-8 home-text-content">
                    <h1 class="section-title">21 OVEN A CASA TUA!</h1>
                    <p class="section-text">La nostra pizza artigianale direttamente a casa tua!</p>
                    <a href="ordina.php" class="order-button">ORDINA ORA</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sezione Dove siamo -->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>