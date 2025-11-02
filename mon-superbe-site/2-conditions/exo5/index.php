<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : Conditions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php

$heure = 15; 

if ($heure >= 0 && $heure < 12) {
    echo "C'est le matin.";
} elseif ($heure >= 12 && $heure < 18) {
    echo "C'est l'après-midi.";
} elseif ($heure >= 18 && $heure <= 24) {
    echo "C'est la nuit.";
} else {
    echo "Heure invalide !";
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

