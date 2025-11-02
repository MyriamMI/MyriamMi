<?php 
header('Content-Type: text/html; charset=utf-8');
ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : String"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

$str = "Bonjour et bienvenue au cours de programmation.";

// On calcule la longueur totale de la chaîne
$longueur = strlen($str);

// ON affiche lettre par lettre
for ($i = 0; $i < $longueur; $i++) {
    echo $str[$i] . "<br>";
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




