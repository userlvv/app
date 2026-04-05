<?php
session_start();
require "../config/db.php";

if (!isset($_SESSION['user_id'])) {
  header('Location: ../login.php');
  exit;
}

$id = $_GET['id'];
$stmt = $connect->prepare("SELECT * FROM gerechten WHERE id = ?");
$stmt->execute([$id]);
$gerecht = $stmt->fetch(PDO::FETCH_ASSOC);
$stmt = $connect->prepare("SELECT * FROM categories");
$stmt->execute();
$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $naam = $_POST['naam'];
  $prijs = $_POST['prijs'];
  $categorie = $_POST['categorie_id'];
  $stmt = $connect->prepare("UPDATE gerechten SET naam = ?, prijs = ?, categorie_id = ? WHERE id = ?" );
  $stmt->execute([$naam, $prijs, $categorie, $id]);
  header("Location: gerechtbewerking.php");
  exit;
}
?>
<!doctype html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gerecht bewerken</title>

  <link rel="stylesheet" href="../css/styles.css">

  <style>
    .edit-container {
      max-width: 800px;
      margin: 40px auto;
      padding: 20px;
    }

    .edit-card {
      background: var(--panel);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 24px;
      box-shadow: var(--shadow-soft);
      display: grid;
      gap: 16px;
    }

    .edit-title {
      font-size: 24px;
      font-weight: 800;
      color: var(--text);
    }

    .form-group {
      display: grid;
      gap: 6px;
    }

    .form-group label {
      font-size: 13px;
      color: var(--muted);
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      padding: 12px;
      border-radius: 12px;
      border: 1px solid var(--border);
      background: rgba(255, 255, 255, 0.03);
      color: var(--text);
      outline: none;
    }

    .form-group textarea {
      resize: vertical;
      min-height: 100px;
    }

    .form-actions {
      display: flex;
      justify-content: space-between;
      gap: 10px;
      flex-wrap: wrap;
      margin-top: 10px;
    }

    .form-actions .button {
      flex: 1;
      min-width: 120px;
    }

    @media (max-width: 600px) {
      .edit-container {
        margin: 20px auto;
        padding: 10px;
      }

      .edit-card {
        padding: 16px;
      }

      .edit-title {
        font-size: 20px;
      }
    }
  </style>
</head>

<body>

  <div class="edit-container">
    <form class="edit-card" method="post">

      <div class="edit-title">Gerecht bewerken</div>

      <div class="form-group">
        <label>Naam</label>
        <input type="text" name="naam" placeholder="Naam van gerecht">
      </div>

      <div class="form-group">
        <label>Prijs (€)</label>
        <input type="number" step="0.01" name="prijs" placeholder="0.00">
      </div>

      <div class="form-group">
        <label>Categorie</label>
        <select name="categorie_id">
          <option value="">Selecteer categorie</option>
          <option value="1">Starters</option>
          <option value="2">Mains</option>
          <option value="3">Chef's Selection</option>
          <option value="4">Desserts</option>
        </select>
      </div>

      <div class="form-actions">
        <a href="gerechtbewerking.php" class="button button--outline">Terug</a>
        <button type="submit" class="button button--primary">Opslaan</button>
      </div>

    </form>
  </div>

</body>

</html>