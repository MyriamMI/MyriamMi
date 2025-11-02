<?php 
header('Content-Type: text/html; charset=utf-8');
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : formulaires"; //Mettre le nom du titre de la page que vous voulez
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Adresse client</title>
  <style>

    fieldset{
        border:1px solid #ccc;
        border-radius:6px;
        padding:16px 18px;
    }
    legend{
        font-weight:700;
        padding:0 8px;
    }
    label{
        display:block;
        margin:10px 0 6px
    }
    input[type=text]{
        width:100%;
        padding:10px;
        border:1px solid #cfd8dc;
        border-radius:4px;
    }
    .btn{
        margin-top:12px;
        padding:10px 16px;
        border:0;
        border-radius:0.42rem;
        background:#1677ff;
        color:#fff;
        cursor:pointer;
    }
  </style>
</head>
<body>
  <h2>Exercice 4</h2>

  <form method="POST" action="traitement.php">
    <fieldset>
      <legend>Adresse client</legend>

      <label for="nom">Nom</label>
      <input type="text" id="nom" name="nom" placeholder="Nom" required>

      <label for="prenom">Prénom</label>
      <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>

      <label for="adresse">Adresse</label>
      <input type="text" id="adresse" name="adresse" placeholder="Adresse" required>

      <label for="ville">Ville</label>
      <input type="text" id="ville" name="ville" placeholder="Ville" required>

      <label for="cp">Code postal</label>
      <input type="text" id="cp" name="cp" placeholder="CP" required>

      <button class="btn" type="submit">Envoyer</button>
    </fieldset>
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
