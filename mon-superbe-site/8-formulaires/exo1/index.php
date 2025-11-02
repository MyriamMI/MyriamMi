<?php 
header('Content-Type: text/html; charset=utf-8');
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : formulaires"; //Mettre le nom du titre de la page que vous voulez
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire Club de Tennis</title>
</head>
<body>
    <h2>Inscription d'un nouveau membre</h2>

    <form method="POST">
        <label for="nom">Nom :</label><br>
        <input type="text" id="nom" name="nom" required><br><br>

        <label for="prenom">Prénom :</label><br>
        <input type="text" id="prenom" name="prenom" required><br><br>

        <label for="naissance">Date de naissance :</label><br>
        <input type="date" id="naissance" name="naissance" required><br><br>

        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="adresse">Adresse :</label><br>
        <input type="text" id="adresse" name="adresse" required><br><br>

        <input type="submit" value="Envoyer">
    </form>

    <hr>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $naissance = $_POST['naissance'];
        $email = $_POST['email'];
        $adresse = $_POST['adresse'];

        echo "<h3>Données du nouveau membre :</h3>";
        echo "Nom : " . $nom . "<br>";
        echo "Prénom : " . $prenom . "<br>";
        echo "Date de naissance : " . $naissance . "<br>";
        echo "Email : " . $email . "<br>";
        echo "Adresse : " . $adresse . "<br>";
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
