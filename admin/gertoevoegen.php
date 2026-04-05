<?php
session_start();
require "../config/db.php";

if (!isset($_SESSION['user_id'])) {
  header('Location: ../login.php');
  exit;
}
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $naam = $_POST['naam'];
    $prijs = $_POST['prijs'];
    $categorie = $_POST['categorie_id'];
    $sql = "INSERT INTO gerechten (naam, prijs, categorie_id) VALUES (?, ?, ?)";
    $stmt = $connect->prepare($sql);
    $stmt->execute([$naam, $prijs, $categorie]);
    header("Location: gerechtbewerking.php");
    exit;
  }
?>
<!doctype html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gerecht toevoegen</title>

  <link rel="stylesheet" href="../css/styles.css">

  <style>
    .add-container {
      max-width: 820px;
      margin: 40px auto;
      padding: 20px;
    }

    .add-card {
      background: var(--panel);
      border: 1px solid var(--border);
      border-radius: var(--radius);
      padding: 24px;
      box-shadow: var(--shadow-soft);
      display: grid;
      gap: 16px;
    }

    .add-head {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
    }

    .add-title {
      font-size: 24px;
      font-weight: 800;
      color: var(--text);
    }

    .add-subtitle {
      font-size: 13px;
      color: var(--muted);
    }

    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
    }

    .form-group {
      display: grid;
      gap: 6px;
    }

    .form-group--full {
      grid-column: 1 / -1;
    }

    .form-group label {
      font-size: 13px;
      color: var(--muted);
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      padding: 12px 14px;
      border-radius: 14px;
      border: 1px solid rgba(167, 175, 188, 0.14);
      background: rgba(255, 255, 255, 0.03);
      color: var(--text);
      outline: none;
      transition: border-color .18s ease, background .18s ease;
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
      border-color: rgba(199, 164, 107, 0.50);
      background: rgba(255, 255, 255, 0.05);
    }

    .form-group textarea {
      resize: vertical;
      min-height: 120px;
    }

    .form-actions {
      display: flex;
      justify-content: space-between;
      gap: 10px;
      flex-wrap: wrap;
      margin-top: 6px;
    }

    .form-actions .button {
      min-width: 140px;
    }

    .hint {
      font-size: 12px;
      color: rgba(167, 175, 188, 0.80);
    }

    @media (max-width: 720px) {
      .add-container {
        margin: 20px auto;
        padding: 12px;
      }

      .add-card {
        padding: 18px;
      }

      .add-title {
        font-size: 20px;
      }

      .form-grid {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>

<body>

  <div class="add-container">
    <form class="add-card" method="post">

      <div class="add-head">
        <div>
          <div class="add-title">Gerecht toevoegen</div>
          <div class="add-subtitle">Voeg een nieuw gerecht toe aan de menukaart</div>
        </div>
      </div>

      <div class="form-grid">
        <div class="form-group">
          <label>Naam</label>
          <input type="text" name="naam" placeholder="Bijv. Pasta Carbonara">
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

      </div>

      <div class="form-actions">
        <a href="gerechtbewerking.php" class="button button--outline">Annuleren</a>
        <button type="submit" class="button button--primary">Toevoegen</button>
      </div>

    </form>
  </div>

</body>

</html>