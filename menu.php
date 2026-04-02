<?php
session_start();
require "config/db.php";

$sql = "SELECT * FROM gerechten";
$stmt = $connect->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

$categoriehc = [
  1 => 'Starters',
  2 => 'Mains',
  3 => 'Chef’s Selection',
  4 => 'Desserts'
];
?>
<!doctype html>
<html lang="nl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>The Project — Menu</title>

  <meta name="description" content="Menukaart van The Project in Nijmegen." />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet" />

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
      <a href="index.php" class="nav__link">Home</a>
      <a href="menu.php" class="nav__link is-active">Menu</a>
      <a href="galerie.php" class="nav__link">Galerie</a>
      <a href="contact.php" class="nav__link">Contact</a>
      <a href="reservering.php" class="nav__link">Reserveren</a>
      <a href="winkelwagen.php" class="nav__link">Bestelling</a>
    </nav>

  </div>
</header>

<main class="section">
  <div class="container">

    <header class="section__header">
      <h1 class="page-title">Menu</h1>
      <p class="section__subtitle">Zoek en filter gerechten.</p>
    </header>

    <!-- SEARCH WRAPPER -->
<div class="menu-tools">
  <form class="searchbar" action="menu.php" method="get">
    <input
      class="searchbar__input"
      type="search"
      name="search"
      placeholder="Zoek gerecht..."
    />
  </form>
</div>

    <!-- MENU GRID -->
	<section class="menu-grid">
        <?php foreach ($result as $gerecht): ?>
          <div class="menu-item">
            <h3 class="menu-item__title">
              <?= ($gerecht['naam']) ?>
            </h3>
            <p class="menu-item__price">
              € <?= number_format($gerecht['prijs'], 2, ',') ?>
            </p>
            <p class="menu-item__category">
              <?= $categoriehc[$gerecht['categorie_id']] ?>
            </p>
          </div>
        <?php endforeach; ?>
      </section>

  </div>
</main>

<footer class="site-footer">
  <div class="gap container footer__inner">
    <p>© 2026 The Project — Nijmegen</p>
    <a class="button" href="login.php">Beheer</a>
  </div>
</footer>

</body>
</html>