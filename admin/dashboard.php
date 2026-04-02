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
  <title>The Project — Gerechten Beheer</title>
  <link rel="stylesheet" href="../css/styles.css" />
  <style>
    /* Kolomverdeling zoals gevraagd */
    .admin-table__row {
      display: grid;
      grid-template-columns: 50px 1fr 100px 150px 200px;
      align-items: center;
      padding: 0.75rem 1rem;
      border-radius: 0.5rem;
      margin-bottom: 0.5rem;
      background-color: #121212;
    }
    .admin-table__row--head {
      font-weight: 700;
      text-transform: uppercase;
      font-size: 0.85rem;
      letter-spacing: 0.05em;
      background-color: #222;
    }
    .admin-table__row > div {
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
    }
    .admin-table__actions {
      display: flex;
      gap: 0.5rem;
    }
    .admin-table__actions .button {
      padding: 0.4rem 0.8rem;
      font-size: 0.9rem;
    }

    @media (max-width: 700px) {
      .admin-table__row {
        grid-template-columns: 1fr;
        gap: 8px;
      }

      .admin-table__row--head {
        display: none;
      }

      .admin-table__actions {
        justify-content: flex-start;
      }
    }
  </style>
</head>

<body class="admin">
<header class="site-header">
  <div class="container header__inner">
    <a class="brand" href="../index.php" aria-label="The Project home">
      <span class="brand__name">The Project</span>
      <span class="brand__tagline">Admin • Gerechten</span>
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
        <h1 class="section__title">Gerechten Beheer</h1>
        <button class="button button--primary" style="margin-bottom: 1rem;">Nieuw gerecht toevoegen</button>
      </header>

      <div class="admin-table">
        <div class="admin-table__row admin-table__row--head">
          <div>#</div>
          <div>Naam</div>
          <div>Prijs</div>
          <div>Categorie</div>
          <div>Acties</div>
        </div>

        <!-- Hier vul je straks met PHP je gerechten uit de database -->

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
