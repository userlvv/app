<?php
require "config/db.php";
?>
<!doctype html>
<html lang="nl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>The Project — Menu</title>
  <meta name="description"
    content="Menukaart van The Project in Nijmegen. Zoek en voeg gerechten toe aan je winkelwagen." />

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
      <a class="brand" href="index.php" aria-label="The Project home">
        <span class="brand__name">The Project</span>
        <span class="brand__tagline">Nijmegen • Modern Fine Dining</span>
      </a>

      <nav class="nav" aria-label="Hoofdnavigatie">
        <a class="nav__link" href="index.php">Home</a>
        <a class="nav__link is-active" href="menu.php">Menu</a>
        <a class="nav__link" href="galerie.php">Galerie</a>
        <a class="nav__link" href="contact.php">Contact</a>
        <a class="nav__link" href="reservering.php">Reserveren</a>
        <a class="nav__link" href="winkelwagen.php">Bestelling</a>
      </nav>
    </div>
  </header>

  <main class="section">
    <div class="container">
      <header class="section__header">
        <h1 class="page-title">Menu</h1>
        <p class="section__subtitle">
          Zoek op gerechten en voeg ze toe aan je winkelwagen.
        </p>
      </header>

      <!-- Toolbar: search + categories -->
      <div class="toolbar" aria-label="Zoeken en filteren">
        <!-- Search (GET) -->
        <form class="searchbar" action="menu.php" method="get">
          <label class="field" style="width:100%;">
            <span class="field__label">Zoek gerecht</span>
            <input class="field__input searchbar__input" type="search" name="search"
              placeholder="Bijv. truffle, steak, miso…" />
          </label>
        </form>

        <!-- Category pills (UI) -->
        <div class="pills" aria-label="Categorieën">
          <button class="pills__button is-active" type="button" data-filter="all">Alles</button>
          <button class="pills__button" type="button" data-filter="starters">Starters</button>
          <button class="pills__button" type="button" data-filter="mains">Mains</button>
          <button class="pills__button" type="button" data-filter="chefs-selection">Chef’s Selection</button>
          <button class="pills__button" type="button" data-filter="desserts">Desserts</button>
        </div>
      </div>

      <!-- Dynamic-ready menu grid -->
      <section class="menu-grid" aria-label="Menukaart items">
        <!--
          PHP placeholder:
          foreach ($dishes as $dish) { ... }

          Idee voor later:
          form action="cart_add.php" method="post"
          dish_id + quantity via POST opslaan in sessie
        -->

        <article class="menu-item" data-category="starters">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Beef Tartare • Dijon</div>
              <div class="menu-item__price">€ 14,50</div>
            </div>
            <p class="menu-item__desc">Hand-cut rund, pickles, eidooier, brioche crumb.</p>
            <div class="menu-item__meta">
              <span class="tag">Starters</span>
            </div>

            <!-- Add to cart (simple) -->
            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="1" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>

        <article class="menu-item" data-category="mains">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Truffle Tagliolini</div>
              <div class="menu-item__price">€ 21,00</div>
            </div>
            <p class="menu-item__desc">Boter, Parmezaan, zwarte truffel.</p>
            <div class="menu-item__meta">
              <span class="tag">Mains</span>
            </div>

            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="2" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>

        <article class="menu-item" data-category="chefs-selection">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Miso Glazed Salmon</div>
              <div class="menu-item__price">€ 24,50</div>
            </div>
            <p class="menu-item__desc">Sesam, citrus, groene kruiden.</p>
            <div class="menu-item__meta">
              <span class="tag">Chef’s Selection</span>
            </div>

            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="3" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>

        <article class="menu-item" data-category="desserts">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Dark Chocolate • Sea Salt</div>
              <div class="menu-item__price">€ 9,00</div>
            </div>
            <p class="menu-item__desc">Pure chocolade, zout, vanille crème.</p>
            <div class="menu-item__meta">
              <span class="tag">Desserts</span>
            </div>

            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="4" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>

        <article class="menu-item" data-category="starters">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Burrata - Tomato Essence</div>
              <div class="menu-item__price">EUR 13,50</div>
            </div>
            <p class="menu-item__desc">Romige burrata, geconfijte tomaat en basilicumolie.</p>
            <div class="menu-item__meta">
              <span class="tag">Starters</span>
            </div>

            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="5" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>

        <article class="menu-item" data-category="starters">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Scallop Crudo</div>
              <div class="menu-item__price">EUR 16,00</div>
            </div>
            <p class="menu-item__desc">Dunne coquille, limoen, venkel en groene appel.</p>
            <div class="menu-item__meta">
              <span class="tag">Starters</span>
            </div>

            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="6" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>

        <article class="menu-item" data-category="mains">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Dry Aged Ribeye</div>
              <div class="menu-item__price">EUR 32,50</div>
            </div>
            <p class="menu-item__desc">Geroosterde sjalot, pepersaus en aardappel fondant.</p>
            <div class="menu-item__meta">
              <span class="tag">Mains</span>
            </div>

            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="7" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>

        <article class="menu-item" data-category="mains">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Wild Mushroom Risotto</div>
              <div class="menu-item__price">EUR 19,50</div>
            </div>
            <p class="menu-item__desc">Arborio, porcini, oude kaas en kruidensla.</p>
            <div class="menu-item__meta">
              <span class="tag">Mains</span>
            </div>

            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="8" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>

        <article class="menu-item" data-category="mains">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Duck Breast - Cherry Jus</div>
              <div class="menu-item__price">EUR 27,00</div>
            </div>
            <p class="menu-item__desc">Rosé eendenborst met knolselderij en kersenjus.</p>
            <div class="menu-item__meta">
              <span class="tag">Mains</span>
            </div>

            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="9" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>

        <article class="menu-item" data-category="chefs-selection">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Chef Tasting Duo</div>
              <div class="menu-item__price">EUR 29,00</div>
            </div>
            <p class="menu-item__desc">Twee seizoensgerechten met dagelijkse signatuur.</p>
            <div class="menu-item__meta">
              <span class="tag">Chef's Selection</span>
            </div>

            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="10" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>

        <article class="menu-item" data-category="chefs-selection">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Smoked Cod - Leek Velvet</div>
              <div class="menu-item__price">EUR 26,50</div>
            </div>
            <p class="menu-item__desc">Licht gerookte kabeljauw, prei en citrus beurre blanc.</p>
            <div class="menu-item__meta">
              <span class="tag">Chef's Selection</span>
            </div>

            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="11" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>

        <article class="menu-item" data-category="chefs-selection">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Veal Cheek - Celeriac</div>
              <div class="menu-item__price">EUR 30,00</div>
            </div>
            <p class="menu-item__desc">Langzaam gegaarde kalfswang met romige knolselderij.</p>
            <div class="menu-item__meta">
              <span class="tag">Chef's Selection</span>
            </div>

            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="12" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>

        <article class="menu-item" data-category="desserts">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Lemon Tart - Meringue</div>
              <div class="menu-item__price">EUR 8,50</div>
            </div>
            <p class="menu-item__desc">Krokante bodem, citroencrème en gebrande meringue.</p>
            <div class="menu-item__meta">
              <span class="tag">Desserts</span>
            </div>

            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="13" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>

        <article class="menu-item" data-category="desserts">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Vanilla Panna Cotta</div>
              <div class="menu-item__price">EUR 9,50</div>
            </div>
            <p class="menu-item__desc">Vanille panna cotta met rood fruit en amandelcrumble.</p>
            <div class="menu-item__meta">
              <span class="tag">Desserts</span>
            </div>

            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="14" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>

        <article class="menu-item" data-category="starters">
          <div class="menu-item__thumb" aria-hidden="true"></div>
          <div class="menu-item__body">
            <div class="menu-item__top">
              <div class="menu-item__name">Roasted Beet Carpaccio</div>
              <div class="menu-item__price">EUR 12,00</div>
            </div>
            <p class="menu-item__desc">Biet, geitenkaas, hazelnoot en balsamico.</p>
            <div class="menu-item__meta">
              <span class="tag">Starters</span>
            </div>

            <form class="menu-item__actions" action="#" method="post">
              <input type="hidden" name="dish_id" value="15" />
              <button class="button button--primary" type="submit">Toevoegen aan winkelwagen</button>
            </form>
          </div>
        </article>
      </section>
    </div>
  </main>

  <footer class="site-footer">
    <div class="container footer__inner">
      <p class="footer__text">© <span>2026</span> The Project — Nijmegen</p>
      <p class="footer__text footer__text--muted">Crafted with precision.</p>
      <a class="button button--outline" href="admin/login.php">Beheer</a>
    </div>
  </footer>
  <script src="js/filtermenu.js"></script>
  <script src="js/searchbar.js"></script>
</body>

</html>