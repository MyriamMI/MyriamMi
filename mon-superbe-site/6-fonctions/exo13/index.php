<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 13 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

function afficher($tableau) {
    foreach ($tableau as $element) {
        echo $element . "<br>";
    }
}

$fruits = ["Pomme", "Banane", "Cerise", "Orange"];

echo "-Liste des fruits :<br>";
afficher($fruits);
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
