<?php
session_start();
require "config/db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $connect->prepare("SELECT * FROM adminlogin WHERE username = ? AND pass_hash = ?");
    $stmt->execute([$username, $password]);
    $user = $stmt->fetch();

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        header("Location: admin/dashboard.php");
        exit;
    } else {
        $error = "Verkeerde gebruikersnaam of wachtwoord";
    }
}


?>

<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Beheer Login — The Project</title>
  <meta name="description" content="Beheeromgeving login voor The Project." />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Playfair+Display:wght@500;700&display=swap" rel="stylesheet" />

  <!-- Let op: vanuit /admin/ moet je één niveau omhoog -->
  <link rel="stylesheet" href="../css/styles.css" />
</head>

<body class="admin">
<header class="site-header">
  <div class="container header__inner">
    <a class="brand" href="../index.php" aria-label="The Project home">
      <span class="brand__name">The Project</span>
      <span class="brand__tagline">Admin • Beheer</span>
    </a>

    <nav class="nav" aria-label="Hoofdnavigatie">
      <a class="nav__link" href="../index.php">Website</a>
      <a class="nav__link is-active" href="login.php">Login</a>
    </nav>
  </div>
</header>

<main>
  <section class="section" aria-label="Admin login">
    <div class="container">
      <div class="auth">
        <div class="auth__header">
          <h1 class="section__title">Beheer Login</h1>
          <p class="section__subtitle">Alleen voor beheerders.</p>
        </div>

        <div class="panel">
			
          <form class="form" method="post" aria-label="Login formulier">
            <label class="field">
              <span class="field__label">E-mail</span>
              <input class="field__input" type="text" name="username" autocomplete="username" placeholder="admin@theproject.example" required/>
            </label>

            <label class="field">
              <span class="field__label">Wachtwoord</span>
              <input class="field__input" type="password" name="password" autocomplete="current-password" placeholder="••••••••" required />
            </label>

            <div class="form__actions">
              <button class="button button--primary" type="submit">Inloggen</button>
              <a class="button button--outline" href="../index.php">Terug</a>
            </div>
  
          </form>
        </div>

        <div class="auth__footer">
          <p class="footer__text footer__text--muted">© 2026 The Project</p>
        </div>
      </div>
    </div>
  </section>
</main>
</body>
</html>