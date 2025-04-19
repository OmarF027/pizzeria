<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="21 OVEN - Prenota un tavolo per gustare le nostre pizze artigianali in un ambiente accogliente. Prenota ora e vivi l'esperienza unica di 21 OVEN.">
    <title>21 OVEN - Prenota un tavolo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Stili aggiuntivi per i pulsanti telefonici */
        .phone-button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 15px;
        }
        
        .phone-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 15px;
            font-weight: 500;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            margin: 5px 0;
            width: 100%;
            max-width: 200px;
        }
        
        .phone-button:hover {
            background-color: #333;
            transform: translateY(-2px);
            box-shadow: 0 2px 10px rgba(0,0,0,0.2);
        }
        
        .phone-button .button-content {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        /* Stile mappa identico a index.php */
        .location-section .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .location-title-container {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .location-title {
            font-size: 2rem;
            font-weight: 700;
            color: #333;
            text-transform: uppercase;
        }
        
        .map-container {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }
        
        .map-container iframe {
            width: 100%;
            height: 400px;
            border: none;
        }
        
        /* Stili per gli orari */
        .orari-box {
            background-color: #f0f0f0; /* colore grigio chiaro per il riquadro */
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .orari-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 10px;
        }

        .orari-content p {
            font-size: 1.1rem;
            color: #000;
            margin: 0;
        }
    </style>
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
                    <a href="prenota.php" class="navbar-link active">PRENOTA UN TAVOLO</a>
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
            <h1 class="hero-title">Prenota un tavolo</h1>
        </div>
    </section>

    <!-- Sezione Prenotazione -->
    <section class="home-section">
        <div class="container">
            <div class="row text-center">
                <!-- Numero fisso -->
                <div class="col-md-4 mb-4">
                    <div class="location-box">
                        <div class="location-title">Telefono</div>
                        <div class="phone-button-container">
                            <a href="tel:+390564123456" class="phone-button">
                                <span class="button-content">
                                    <span class="button-text">0564 123456</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Numero cellulare -->
                <div class="col-md-4 mb-4">
                    <div class="location-box">
                        <div class="location-title">Cellulare</div>
                        <div class="phone-button-container">
                            <a href="tel:+393471234567" class="phone-button">
                                <span class="button-content">
                                    <span class="button-text">347 123 4567</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Orari -->
                <div class="col-md-4 mb-4">
                    <div class="orari-box">
                        <div class="orari-title">Orari di apertura</div>
                        <div class="orari-content">
                            <p>Tutti i giorni: 19:00 - 23:30</p>
                        </div>
                    </div>
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
            <div class="map-container">
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
                Sui social: 
                <a href="https://facebook.com" target="_blank">Facebook</a> | 
                <a href="https://instagram.com" target="_blank">Instagram</a>
            </p>
        </div>
    </footer>

</body>
</html>
