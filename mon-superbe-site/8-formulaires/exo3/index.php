<?php 
header('Content-Type: text/html; charset=utf-8');
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : formulaires"; //Mettre le nom du titre de la page que vous voulez
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formulaire d'inscription</title>
</head>
<body>
  <h2>Formulaire d'inscription</h2>

  <form method="POST" action="save.php">
    <label>Nom :</label><br>
    <input type="text" name="nom" required><br><br>

    <label>Prénom :</label><br>
    <input type="text" name="prenom" required><br><br>

    <label>Date de naissance :</label><br>
    <input type="date" name="naissance" required><br><br>

    <label>Adresse :</label><br>
    <input type="text" name="adresse" required><br><br>

    <input type="submit" value="Envoyer">
  </form>
</body>
</html>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
