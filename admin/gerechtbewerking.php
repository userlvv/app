<?php
session_start();

require "../config/db.php";

if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
    exit;
}
?>
<!doctype html>
<html lang="nl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>The Project — Admin Dashboard</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:wght@500;700&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="../css/styles.css" />
</head>

<body>

<header class="site-header">
  <div class="container header__inner">
    <a class="brand" href="../index.php">
      <span class="brand__name">The Project</span>
      <span class="brand__tagline">Admin • Overzicht</span>
    </a>

    <nav class="nav" aria-label="Hoofdnavigatie">
      <a class="nav__link" href="dashboard.php">Dashboard</a>
      <a class="nav__link is-active" href="gerechtbewerking.php">Gerechten</a>
      <a class="nav__link" href="../index.php">Website</a>
      <a class="nav__link" href="logout.php">Uitloggen</a>
    </nav>
  </div>
</header>

<main>
  <section class="section admin-overview">
    <div class="container">

      <header class="section__header">
        <p class="pill">Admin • Messages • Orders</p>
        <h1 class="section__title">Overview</h1>
        <p class="section__subtitle">
          Contactberichten en bestellingen.
        </p>
      </header>

      <div class="split">

        <!-- CONTACTBERICHTEN -->
        <section class="panel panel--soft">
          <div class="admin-head">
            <div>
              <h2 class="panel__title">Contactberichten</h2>
              <p class="panel__text">Binnengekomen berichten.</p>
            </div>
          </div>

          <div class="admin-table">

            <div class="admin-table__row admin-table__row--head">
              <div>Datum</div>
              <div>Naam</div>
              <div>Onderwerp</div>
              <div>Status</div>
            </div>

            <!-- HIER KOMT JOUW PHP LOOP -->
            <!--
            <div class="admin-table__row">
              <div></div>
              <div></div>
              <div></div>
              <div><span class="tag"></span></div>
            </div>
            -->

          </div>
        </section>

        <!-- BESTELLINGEN -->
        <section class="panel panel--soft">
          <div class="admin-head">
            <div>
              <h2 class="panel__title">Bestellingen</h2>
              <p class="panel__text">Recente orders.</p>
            </div>
          </div>

          <div class="admin-table">

            <div class="admin-table__row admin-table__row--head">
              <div>#</div>
              <div>Klant</div>
              <div>Totaal</div>
              <div>Status</div>
            </div>

            <!-- HIER KOMT JOUW PHP LOOP -->
            <!--
            <div class="admin-table__row">
              <div></div>
              <div></div>
              <div></div>
              <div><span class="tag"></span></div>
            </div>
            -->

          </div>
        </section>

      </div>

    </div>
  </section>
</main>

<footer class="site-footer">
  <div class="container footer__inner">
    <p class="footer__text">© 2026 The Project — Admin</p>
    <p class="footer__text footer__text--muted">Manage with precision.</p>
    <a class="button button--outline" href="../index.php">Terug naar site</a>
  </div>
</footer>

</body>
</html>
