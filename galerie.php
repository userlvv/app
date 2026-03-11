<?php
require "config/db.php";
?>
<!doctype html>
<html lang="nl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Galerie — The Project</title>

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
                <a class="nav__link is-active" href="galerie.php">Galerie</a>
                <a class="nav__link" href="contact.php">Contact</a>
                <a class="nav__link" href="reservering.php">Reserveren</a>
                <a class="nav__link" href="winkelwagen.php">Bestelling</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="section">
            <div class="container">

                <header class="section__header">
                    <h1 class="section__title">Galerie</h1>
                    <p class="section__subtitle">Een impressie van sfeer, detail en precisie.</p>
                </header>

                <div class="gallery">

                    <!-- HERO -->
                    <figure class="gallery__item gallery__item--wide">
                        <img src="img/openkitchen.jpg" alt="">
                    </figure>

                    <!-- 3 DETAILS BIJ ELKAAR -->
                    <figure class="gallery__item">
                        <img src="img/platesfood.jpg" alt="">
                    </figure>

                    <figure class="gallery__item">
                        <img src="img/food.jpg" alt="">
                    </figure>

                    <figure class="gallery__item">
                        <img src="img/glasses.jpg" alt="">
                    </figure>

                    <!-- INTERIEUR -->
                    <figure class="gallery__item gallery__item--wide">
                        <img src="img/seating.jpg" alt="">
                    </figure>

                    <!-- MINIMAL PLATE -->
                    <figure class="gallery__item gallery__item--tall">
                        <img src="img/plates.jpg" alt="">
                    </figure>

                </div>

                <div class="gallery__cta">
                    <a class="button button--primary" href="reservering.php">Reserveer</a>
                    <a class="button button--outline" href="menu.php">Bekijk menu</a>
                </div>

            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer__inner">
            <p class="footer__text">© 2026 The Project — Nijmegen</p>
            <p class="footer__text footer__text--muted">Crafted with precision.</p>
            <a class="button button--outline admin-button" href="admin/login.php">Beheer</a>
        </div>
    </footer>

</body>

</html>