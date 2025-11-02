<?php 
header('Content-Type: text/html; charset=utf-8');
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : formulaires"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
session_start(); // Démarre la session (obligatoire pour stocker les utilisateurs)
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Adresse client</title>
</head>
<body>

  <h2>Adresse client</h2>

  <form method="post" action="traitement.php">
    <fieldset>
      <legend>Adresse client</legend>

      <label>Nom :</label><br>
      <input type="text" name="nom" required><br><br>

      <label>Prénom :</label><br>
      <input type="text" name="prenom" required><br><br>

      <label>Adresse :</label><br>
      <input type="text" name="adresse" required><br><br>

      <label>Ville :</label><br>
      <input type="text" name="ville" required><br><br>

      <label>Code postal :</label><br>
      <input type="text" name="cp" required><br><br>

      <input type="submit" value="Envoyer">
    </fieldset>
  </form>

  <hr>

  <?php
  // Si des utilisateurs ont été enregistrés dans la session
  if (!empty($_SESSION['clients'])) {
      echo "<h3>Liste des clients enregistrés :</h3>";
      echo "<table border='1' cellpadding='8' cellspacing='0'>
              <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code postal</th>
              </tr>";

      // Parcours du tableau de la session
      foreach ($_SESSION['clients'] as $client) {
          echo "<tr>
                  <td>{$client['nom']}</td>
                  <td>{$client['prenom']}</td>
                  <td>{$client['adresse']}</td>
                  <td>{$client['ville']}</td>
                  <td>{$client['cp']}</td>
                </tr>";
      }

      echo "</table>";
  }
  ?>
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
