<?php 
header('Content-Type: text/html; charset=utf-8');
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : formulaires"; //Mettre le nom du titre de la page que vous voulez
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Agence Immobilière</title>
</head>
<body>
  <h2>Bienvenue sur notre agence immobilière</h2>
  <p>Que souhaitez-vous faire ?</p>

  <form method="POST" action="traitement.php">
    <input type="submit" name="choix" value="Vendre">
    <input type="submit" name="choix" value="Acheter">
    <input type="submit" name="choix" value="Louer">
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
