<?php
session_start();
require "config/db.php";
?>
<!doctype html>
<html lang="nl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact — The Project</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:wght@500;700&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="css/styles.css" />
</head>


<body>

  <header class="site-header">
    <div class="container header__inner">
      <a class="brand" href="index.php">
        <span class="brand__name">The Project</span>
        <span class="brand__tagline">Nijmegen • Modern Fine Dining</span>
      </a>

      <nav class="nav">
        <a class="nav__link" href="index.php">Home</a>
        <a class="nav__link" href="menu.php">Menu</a>
        <a class="nav__link" href="galerie.php">Galerie</a>
        <a class="nav__link is-active" href="contact.php">Contact</a>
      </nav>
    </div>
  </header>

  <main>

    <section class="section" aria-label="Contact">
      <div class="container contact">

        <div class="contact__info">
          <h1 class="section__title">Contact</h1>
          <p class="section__subtitle">
            Voor reserveringen, allergenen en vragen. We reageren zo snel mogelijk.
          </p>

          <div class="contact__details">
            <p class="detail"><span class="detail__label">Adres</span> Centrum, Nijmegen</p>
            <p class="detail"><span class="detail__label">Openingstijden</span> Dinsdag – Zondag • 17:00 – 22:30</p>
            <p class="detail"><span class="detail__label">Telefoon</span> +31 6 0000 0000</p>
            <p class="detail"><span class="detail__label">E-mail</span> contact@theproject.example</p>
          </div>
        </div>

        <div class="contact__form-wrap">
          <form class="form" action="#" method="post">

            <div class="form__row">
              <label class="field">
                <span class="field__label">Naam</span>
                <input class="field__input" type="text" name="name" required maxlength="100">
              </label>

              <label class="field">
                <span class="field__label">E-mail</span>
                <input class="field__input" type="email" name="email" required maxlength="100">
              </label>
            </div>

            <label class="field">
              <span class="field__label">Bericht</span>
              <textarea class="field__input field__input--textarea" name="message" rows="5" required
                maxlength="1000"></textarea>
            </label>

            <button class="button button--primary" type="submit">Verstuur</button>

          </form>
        </div>

      </div>
    </section>

  </main>

  <footer class="site-footer">
    <div class="container footer__inner">
      <p class="footer__text">© 2026 The Project — Nijmegen</p>
      <p class="footer__text footer__text--muted">Crafted with precision.</p>
      <a class="button button--outline admin-button" href="login.php">Beheer</a>
    </div>
  </footer>

</body>

</html>