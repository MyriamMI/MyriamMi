<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('Location: index.php');
  exit;
}
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
$cp = $_POST['cp'];

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Adresse client — Résultat</title>
  <style>
    body{
        font-family:Arial,sans-serif;
        max-width:900px;
        margin:40px auto;
    }
    table{
        border-collapse:collapse;
        width:600px;
        margin-top:16px;
    }
    td{
        border:1px solid #333;
        padding:8px;
    }
    td:first-child{
        font-weight:700;
        width:180px;
        background:#f7f7f7;
    }
  </style>
</head>
<body>
  <h2>Récapitulatif : Adresse client</h2>

  <table>
    <tr><td>Nom:</td><td><?= $nom ?></td></tr>
    <tr><td>Prénom:</td><td><?= $prenom ?></td></tr>
    <tr><td>Adresse:</td><td><?= $adresse ?></td></tr>
    <tr><td>Ville:</td><td><?= $ville ?></td></tr>
    <tr><td>Code postal:</td><td><?= $cp ?></td></tr>
  </table>
</body>
</html>
