<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menù - 21 OVEN</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <style>
    /* Aggiunta per prevenire overflow orizzontale */
    body {
      overflow-x: hidden;
      width: 100%;
    }
    .container, .navbar-container {
      max-width: 100%;
      padding: 0 20px;
      box-sizing: border-box;
    }
    img {
      max-width: 100%;
      height: auto;
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="navbar-container">
      <a href="index.php" class="navbar-link">HOME</a>
      <a href="menu.php" class="navbar-link active">MENÙ</a>
      <a href="ordina.php" class="navbar-link">ORDINA</a>
      <a href="prenota.php" class="navbar-link">PRENOTA UN TAVOLO</a>
      <a href="contatti.php" class="navbar-link">CONTATTI</a>
    </div>
  </nav>

  <!-- Hero section -->
<section class="hero">
    <div class="hero-content">
        <div class="hero-logo" style="margin-bottom: 10px;">
            <img src="img/logo2.jpg" alt="21 OVEN - Logo pizzeria artigianale" width="300" style="max-width:100%">
        </div>
        <h1 class="hero-title" style="
    margin: 10px 0;
    font-size: clamp(24px, 5vw, 42px);
    font-weight: 700;
    color: #ffffff;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 1px;
    line-height: 1.2;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.3);
">
    Le nostre pizze
</h1>
        <div class="hero-divider"></div>
        <p class="hero-hashtag">Pizze artigianali a lievitazione lenta — gusto e tradizione</p>
    </div>
</section>

  <section class="home-section">
    <div class="container" style="margin:0 auto;">
      <a href="img/menu.jpg" target="_blank">
        <img 
          src="img/menu.jpg" 
          alt="Menu 21 OVEN" 
          style="width:100%; max-width:800px; height:auto; display:block; margin:20px auto;"
        >
      </a>
    </div>
  </section>

  <footer>
    <div>
      <p>© 2025 21 OVEN – Tutti i diritti riservati</p>
      <p>
        Roma | 
        Cell: <a href="tel:+393471234567">+39 347 123 4567</a> | 
        Sui social: 
        <a href="https://facebook.com" target="_blank">Facebook</a> | 
        <a href="https://instagram.com" target="_blank">Instagram</a>
      </p>
    </div>
  </footer>

</body>
</html>