<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>The Project — Winkelwagen</title>
  <meta name="description" content="Bekijk en beheer je bestelling bij The Project." />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:wght@500;700&display=swap"
    rel="stylesheet" />

  <!-- Styles -->
  <link rel="stylesheet" href="css/styles.css" />

  <!-- Page-only CSS (layout winkelwagen) -->
  <style>
    .cart { display: grid; gap: 12px; }

    .cart__row{
      display: grid;
      grid-template-columns: 84px 1fr;
      gap: 14px;
      padding: 14px;
      border-radius: 18px;
      border: 1px solid rgba(167, 175, 188, 0.12);
      background: rgba(255,255,255,0.02);
    }

    .cart__thumb{
      width: 84px;
      height: 84px;
      border-radius: 16px;
      border: 1px solid rgba(167, 175, 188, 0.12);
      background: linear-gradient(135deg, rgba(199, 164, 107, 0.16), rgba(255, 255, 255, 0.02));
    }

    .cart__top{
      display:flex;
      align-items:flex-start;
      justify-content: space-between;
      gap: 12px;
    }

    .cart__name{
      font-size: 16px;
      font-weight: 800;
      color: var(--text);
      margin: 0;
    }

    .cart__meta{
      margin-top: 4px;
      font-size: 13px;
      color: var(--muted);
    }

    .cart__price{
      font-weight: 900;
      color: var(--accent);
      white-space: nowrap;
      margin-top: 2px;
    }

    .cart__bottom{
      margin-top: 12px;
      display:flex;
      align-items:center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
    }

    .cart__qty{
      display:inline-flex;
      align-items:center;
      border-radius: 999px;
      border: 1px solid rgba(167, 175, 188, 0.14);
      background: rgba(255,255,255,0.02);
      overflow: hidden;
    }

    .cart__qty-btn{
      border: 0;
      background: transparent;
      color: var(--text);
      width: 40px;
      height: 38px;
      cursor: pointer;
      font-weight: 900;
      transition: background .18s ease;
    }
    .cart__qty-btn:hover{ background: rgba(167,175,188,0.10); }

    .cart__qty-input{
      width: 44px;
      height: 38px;
      border: 0;
      outline: none;
      text-align: center;
      background: transparent;
      color: var(--text);
      font-weight: 800;
    }

    .cart__link{
      border: 0;
      background: transparent;
      color: var(--muted);
      cursor: pointer;
      font-weight: 700;
      padding: 8px 10px;
      border-radius: 999px;
      border: 1px solid rgba(167,175,188,0.14);
      transition: color .18s ease, border-color .18s ease, background .18s ease;
    }
    .cart__link:hover{
      color: var(--text);
      background: rgba(167,175,188,0.10);
      border-color: rgba(199,164,107,0.35);
    }

    .cart__footer{
      display:flex;
      gap: 10px;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
      margin-top: 14px;
    }

    .summary{
      margin-top: 14px;
      border-radius: 18px;
      border: 1px solid rgba(167,175,188,0.12);
      background: rgba(255,255,255,0.02);
      padding: 14px;
      display: grid;
      gap: 10px;
    }
    .summary__row{
      display:flex;
      justify-content: space-between;
      gap: 12px;
      color: var(--muted);
      font-size: 14px;
    }
    .summary__row--total{
      padding-top: 10px;
      border-top: 1px solid rgba(167,175,188,0.12);
      color: var(--text);
      font-weight: 900;
    }
    .summary__value{ color: var(--text); font-weight: 800; }

    @media (max-width: 560px){
      .cart__row{ grid-template-columns: 1fr; }
      .cart__thumb{ width: 100%; height: 160px; }
    }
  </style>
</head>

<body>
  <!-- Header / Navigation -->
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
        <a class="nav__link" href="reservering.php">Reserveren</a>
        <a class="nav__link is-active" href="winkelwagen.php">Bestelling</a>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero" aria-label="Winkelwagen">
      <div class="container hero__inner">

        <!-- Left -->
        <div class="hero__content">
          <p class="pill">Bestelling • Overzicht • Bevestigen</p>
          <h1 class="hero__title">Winkelwagen</h1>
          <p class="hero__lead">
            Controleer je bestelling, pas aantallen aan en ga daarna door naar afrekenen.
          </p>

          <div class="panel panel--soft" style="margin-top:18px;">
            <h2 class="panel__title" style="margin-bottom: 12px;">Items</h2>

            <!-- Leeg-state (toon met PHP als winkelwagen leeg is) -->
            <div class="note">
              <p class="note__title">Je winkelwagen is leeg</p>
              <p class="note__text">Bekijk het menu en voeg gerechten toe aan je bestelling.</p>
              <div class="form__actions">
                <a class="button button--primary" href="menu.php">Naar menu</a>
              </div>
            </div>

            <!-- Items container (vul met PHP loop; laat leeg in HTML) -->
            <div class="cart" aria-label="Winkelwagen items">
              <!-- PHP LOOP START -->
              <!--
              <article class="cart__row">
                <div class="cart__thumb"></div>
                <div class="cart__body">
                  <div class="cart__top">
                    <div>
                      <h3 class="cart__name">...</h3>
                      <p class="cart__meta">...</p>
                    </div>
                    <div class="cart__price">...</div>
                  </div>

                  <div class="cart__bottom">
                    <div class="cart__qty">
                      <button class="cart__qty-btn" type="submit" name="action" value="dec">−</button>
                      <input class="cart__qty-input" type="text" value="1" />
                      <button class="cart__qty-btn" type="submit" name="action" value="inc">+</button>
                    </div>

                    <button class="cart__link" type="submit" name="action" value="remove">Verwijderen</button>
                  </div>
                </div>
              </article>
              -->
              <!-- PHP LOOP END -->
            </div>

            <div class="cart__footer">
              <a class="button button--outline" href="menu.php">Verder bestellen</a>
              <button class="button button--outline" type="button">Winkelwagen leegmaken</button>
            </div>
          </div>
        </div>

        <!-- Right -->
        <aside class="hero__visual" aria-label="Samenvatting" style="display:flex; padding: 22px;">
          <div style="width:100%;">
            <div class="panel" style="height:100%;">
              <h2 class="panel__title">Samenvatting</h2>
              <p class="panel__text">Controleer de totalen voordat je afrekent.</p>

              <div class="summary" aria-label="Totalen">
                <div class="summary__row">
                  <span>Subtotaal</span>
                  <span class="summary__value">€ …</span>
                </div>
                <div class="summary__row">
                  <span>Service</span>
                  <span class="summary__value">€ …</span>
                </div>
                <div class="summary__row summary__row--total">
                  <span>Totaal</span>
                  <span class="summary__value">€ …</span>
                </div>
              </div>

              <div class="note">
                <p class="note__title">Allergenen & voorkeuren</p>
                <p class="note__text">Voeg dit toe bij het afrekenen (optioneel).</p>
              </div>

              <div class="form__actions">
                <a class="button button--primary" href="checkout.php">Afrekenen</a>
                <a class="button button--outline" href="reservering.php">Liever reserveren</a>
              </div>

              <p class="form__hint" style="margin-top: 10px;">
                Door verder te gaan ga je akkoord met de huisregels.
              </p>
            </div>
          </div>
        </aside>

      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="site-footer">
    <div class="container footer__inner">
      <p class="footer__text">© <span>2026</span> The Project — Nijmegen</p>
      <p class="footer__text footer__text--muted">Crafted with precision.</p>
      <a class="button button--outline" href="admin/login.php">Beheer</a>
    </div>
  </footer>
</body>
</html>