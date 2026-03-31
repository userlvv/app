<?php
session_start();
require "config/db.php";
?>
<!doctype html>
<html lang="nl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Reservering — The Project</title>
  <meta name="description" content="Reserveer een tafel bij The Project in Nijmegen." />

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
      <a class="brand" href="index.php" aria-label="The Project home">
        <span class="brand__name">The Project</span>
        <span class="brand__tagline">Nijmegen • Modern Fine Dining</span>
      </a>

      <nav class="nav" aria-label="Hoofdnavigatie">
        <a class="nav__link" href="index.php">Home</a>
        <a class="nav__link" href="menu.php">Menu</a>
        <a class="nav__link" href="galerie.php">Galerie</a>
        <a class="nav__link" href="contact.php">Contact</a>
        <a class="nav__link is-active" href="reservering.php">Reserveren</a>
        <a class="nav__link" href="winkelwagen.php">Bestelling</a>
      </nav>
    </div>
  </header>

  <main>
    <section class="section" aria-label="Reserveren">
      <div class="container">
        <header class="section__header">
          <h1 class="section__title">Reservering</h1>
          <p class="section__subtitle">Reserveer in enkele stappen. We bevestigen per e-mail.</p>
        </header>

        <div class="split">
          <div class="panel panel--soft">
            <h2 class="panel__title">Details</h2>
            <p class="panel__text">
              Dinsdag t/m zondag • 17:00–22:30<br />
              Centrum, Nijmegen
            </p>

            <div class="note">
              <p class="note__title">Allergenen</p>
              <p class="note__text">Vermeld allergenen en dieetwensen in het opmerkingenveld.</p>
            </div>

            <div class="note">
              <p class="note__title">Groepen</p>
              <p class="note__text">Voor 7+ personen: vraag een maatwerkvoorstel aan via contact.</p>
            </div>
          </div>

          <div class="panel">
            <form class="form" action="#" method="post" aria-label="Reserveringsformulier">
              <div class="form__row">
                <label class="field">
                  <span class="field__label">Naam</span>
                  <input class="field__input" type="text" name="name" autocomplete="name" placeholder="Jouw naam"
                    required />
                </label>

                <label class="field">
                  <span class="field__label">E-mail</span>
                  <input class="field__input" type="email" name="email" autocomplete="email"
                    placeholder="naam@voorbeeld.nl" required />
                </label>
              </div>

              <div class="form__row">
                <label class="field">
                  <span class="field__label">Datum</span>
                  <input class="field__input" type="date" name="date" required />
                </label>

                <label class="field">
                  <span class="field__label">Tijd</span>
                  <input class="field__input" type="time" name="time" required />
                </label>
              </div>

              <div class="form__row">
                <label class="field">
                  <span class="field__label">Personen</span>
                  <select class="field__input" name="guests" required>
                    <option value="" selected disabled>Kies</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                  </select>
                </label>

                <label class="field">
                  <span class="field__label">Telefoon (optioneel)</span>
                  <input class="field__input" type="tel" name="phone" autocomplete="tel" placeholder="+31 6 ..." />
                </label>
              </div>

              <label class="field">
                <span class="field__label">Opmerkingen (optioneel)</span>
                <textarea class="field__input field__input--textarea" name="notes" rows="4"
                  placeholder="Allergenen, dieetwensen, gelegenheid..."></textarea>
              </label>

              <div class="form__actions">
                <button class="button button--primary" type="submit">Verstuur aanvraag</button>
                <a class="button button--outline" href="menu.php">Bekijk menu</a>
              </div>

              <p class="form__hint">
                Template: je koppelt dit later aan PHP / e-mail / booking API.
              </p>
            </form>
          </div>
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