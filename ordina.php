<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="Ordina la tua pizza da 21 Oven - Consegna a domicilio o ritiro in pizzeria">
  <title>Ordina - 21 Oven</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="styles.css"/>
</head>
<body>

  <nav class="navbar">
    <div class="navbar-container">
      <a href="index.php" class="navbar-link">Home</a>
      <a href="menu.php" class="navbar-link">Menù</a>
      <a href="ordina.php" class="navbar-link active">Ordina</a>
      <a href="prenota.php" class="navbar-link">Prenota un tavolo</a>
      <a href="contatti.php" class="navbar-link">Contatti</a>
    </div>
  </nav>

  <section class="hero">
  <div class="hero-logo">
    <img src="img/logo2.jpg" alt="Logo 21 Oven" style="max-width: 300px; width: 100%; height: auto;">
  </div>
  <div class="hero-divider"></div>
  <p class="hero-hashtag">Ordina la tua pizza</p>
</section>

  <section class="home-section">
    <div class="container">
      <div class="row g-4 justify-content-center">
        <div class="col-md-5">
          <div class="p-4 rounded shadow-sm" style="background-color: #f8f8f8; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <h3 style="font-weight: 700; font-size: 1.3rem; text-transform: uppercase;">Consegna a domicilio</h3>
              <p style="color: #555;">Ordina la tua pizza preferita e ricevila a casa in 30-45 minuti.</p>
            </div>
            <a href="https://glovoapp.com" target="_blank" class="order-button mt-3" style="background-color: var(--nero); color: var(--bianco); text-transform: uppercase;">Ordina con Glovo</a>
          </div>
        </div>
        <div class="col-md-5">
          <div class="p-4 rounded shadow-sm" style="background-color: #f8f8f8; height: 100%; display: flex; flex-direction: column; justify-content: space-between;">
            <div>
              <h3 style="font-weight: 700; font-size: 1.3rem; text-transform: uppercase;">Ritiro in pizzeria</h3>
              <p style="color: #555;">Chiama, ordina e ritira quando vuoi senza attese.</p>
            </div>
            <a href="tel:+390564123456" class="order-button mt-3" style="background-color: var(--nero); color: var(--bianco); text-transform: uppercase;">Chiama per ordinare</a>
          </div>
        </div>
      </div>

      <div class="orari-box mt-5 text-center p-4 rounded" style="background-color: var(--grigio-sfondo); max-width: 500px; margin: 40px auto 0 auto;">
        <h4 class="orari-title" style="font-weight: 700; color: var(--nero); text-transform: uppercase;">Orari di apertura</h4>
        <p style="font-size: 1.1rem; color: var(--nero);">Tutti i giorni: 19:00 - 23:30</p>
      </div>
    </div>
  </section>

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
