<?php
session_start();
require "config/db.php";
?>
<!doctype html>
<html lang="nl">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>The Project — Modern Fine Dining Nijmegen</title>
    <meta name="description"
        content="The Project is een chique modern fine-dining restaurantconcept in Nijmegen, met een minimalistische premium uitstraling." />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:wght@500;700&display=swap"
        rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <!-- Header / Navigation -->
    <header class="site-header">
        <div class="container header__inner">
            <a class="brand" href="#" aria-label="The Project home">
                <span class="brand__name">The Project</span>
                <span class="brand__tagline">Nijmegen • Modern Fine Dining</span>
            </a>

            <nav class="nav" aria-label="Hoofdnavigatie">
                <a class="nav__link is-active" href="index.php">Home</a>
                <a class="nav__link" href="menu.php">Menu</a>
                <a class="nav__link" href="galerie.php">Galerie</a>
                <a class="nav__link" href="contact.php">Contact</a>
                <a class="nav__link" href="reservering.php">Reserveren</a>
                <a class="nav__link" href="winkelwagen.php">Bestelling</a>
            </nav>
        </div>
    </header>

    <main>
        <!-- Hero -->
        <section class="hero" aria-label="Introductie">
            <div class="container hero__inner">
                <div class="hero__content">
                    <p class="pill">Chef-curated • Seasonal • Refined</p>

                    <h1 class="hero__title">Where elegance meets precision.</h1>

                    <p class="hero__lead">
                        Een minimalistische fine-dining ervaring in Nijmegen. Gelaagde smaken, pure ingrediënten en een
                        menukaart
                        die met het seizoen meebeweegt.
                    </p>

                    <div class="hero__actions">
                        <a class="button button--primary" href="menu.php">Bekijk het menu</a>
                        <a class="button button--outline" href="reservering.php">Reserveer</a>
                    </div>

                    <dl class="hero__stats" aria-label="Korte highlights">
                        <div class="stat">
                            <dt class="stat__label">Keuken</dt>
                            <dd class="stat__value">Modern</dd>
                        </div>
                        <div class="stat">
                            <dt class="stat__label">Service</dt>
                            <dd class="stat__value">Premium</dd>
                        </div>
                        <div class="stat">
                            <dt class="stat__label">Open</dt>
                            <dd class="stat__value">Di–Zo</dd>
                        </div>
                    </dl>
                </div>

                <!-- Visual placeholder (style in css/styles.css) -->
                <div class="hero__visual" role="img" aria-label="Sfeervolle visual placeholder"></div>
            </div>
        </section>

        <!-- Philosophy -->
        <section class="section" aria-label="Our Philosophy">
            <div class="container">
                <header class="section__header">
                    <h2 class="section__title">Our Philosophy</h2>
                    <p class="section__subtitle">Minimalistisch design. Maximale smaakbeleving.</p>
                </header>

                <div class="card-grid" role="list">
                    <article class="card" role="listitem">
                        <h3 class="card__title">Seasonal Ingredients</h3>
                        <p class="card__text">
                            We werken met verse, seizoensgebonden producten en bouwen gerechten rondom kwaliteit en
                            balans.
                        </p>
                    </article>

                    <article class="card" role="listitem">
                        <h3 class="card__title">Signature Courses</h3>
                        <p class="card__text">
                            Een compacte selectie met herkenbare signaturen, verfijnd en consequent in uitvoering.
                        </p>
                    </article>

                    <article class="card" role="listitem">
                        <h3 class="card__title">Refined Experience</h3>
                        <p class="card__text">
                            Rust, aandacht en detail. Elke keuze is bewust: van plating tot pairing.
                        </p>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="site-footer">
        <div class="container footer__inner">
            <p class="footer__text">© <span>2026</span> The Project — Nijmegen</p>
            <p class="footer__text footer__text--muted">Crafted with precision.</p>
            <a class="button button--outline" href="login.php">Beheer</a>
        </div>
    </footer>
</body>

</html>