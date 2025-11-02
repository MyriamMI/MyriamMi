<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 17 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

function contient($tableau, $nombre) {
    foreach ($tableau as $valeur) {
        if ($valeur == $nombre) {
            return true;
        }
    }
    return false; 
}

$notes = [15, 18, 17, 10.5, 14.25, 19, 20, 11, 10, 8];
$recherche = 20;

if (contient($notes, $recherche)) {
    echo "Le nombre $recherche se trouve dans le tableau.";
} else {
    echo "Le nombre $recherche ne se trouve pas dans le tableau.";
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
