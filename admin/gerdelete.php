<?php
session_start();

require "../config/db.php";

if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_POST['id'];

    $sql = "DELETE FROM gerechten WHERE id = :id";
    $stmt = $connect->prepare($sql);
    $stmt->execute([':id' => $id ]);
    header("Location: gerechtbewerking.php");
    exit;
}
?>
<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gerecht verwijderen</title>

  <link rel="stylesheet" href="../css/styles.css">

  <style>
    .delete-container {
      max-width: 720px;
      margin: 40px auto;
      padding: 20px;
    }

    .delete-card {
      background: var(--panel);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 26px;
      box-shadow: var(--shadow-soft);
      display: grid;
      gap: 18px;
      text-align: center;
    }

    .delete-icon {
      font-size: 40px;
    }

    .delete-title {
      font-size: 24px;
      font-weight: 800;
      color: var(--text);
    }

    .delete-text {
      color: var(--muted);
      font-size: 14px;
      max-width: 40ch;
      margin: 0 auto;
    }

    .delete-actions {
      display: flex;
      gap: 10px;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 10px;
    }

    .delete-actions .button {
      min-width: 140px;
    }

    .button--danger {
      border-color: rgba(255, 80, 80, 0.5);
      background: linear-gradient(
        135deg,
        rgba(255, 80, 80, 0.25),
        rgba(255, 80, 80, 0.10)
      );
      color: #ffb3b3;
    }

    .button--danger:hover {
      border-color: rgba(255, 80, 80, 0.8);
      transform: translateY(-1px);
    }

    @media (max-width: 600px) {
      .delete-container {
        margin: 20px auto;
        padding: 10px;
      }

      .delete-card {
        padding: 18px;
      }

      .delete-title {
        font-size: 20px;
      }
    }
  </style>
</head>

<body>

<div class="delete-container">
  <form class="delete-card" method="post">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <div class="delete-icon">⚠️</div>

    <div class="delete-title">
      Weet je het zeker?
    </div>

    <p class="delete-text">
      Dit gerecht wordt permanent verwijderd en kan niet meer worden teruggehaald.
    </p>

    <div class="delete-actions">
      <a href="gerechtbewerking.php" class="button button--outline">Annuleren</a>
      <button type="submit" class="button button--danger">Verwijder</button>
    </div>

  </form>
</div>

</body>
</html>