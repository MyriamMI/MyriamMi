<?php 
header('Content-Type: text/html; charset=utf-8');
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : formulaires"; //Mettre le nom du titre de la page que vous voulez
?>

<form method="POST">
    <input type="text" name="nom" placeholder="Entrez votre nom">
    <input type="submit" value="Envoyer">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Bonjour, " . $_POST['nom'];
}
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
