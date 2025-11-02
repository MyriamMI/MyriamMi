<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 1 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

function afficher_mois($mois){
    foreach ($mois as $nom => $jours){
      echo "- Le mois de $nom contient $jours jours.<br>";
      echo "</br>";
    }
}

$mois = [
    "janvier" => 31,
    "février" => 28, 
    "mars" => 31,
    "avril" => 30,
    "mai" => 31,
    "juin" => 30,
    "juillet" => 31,
    "août" => 31,
    "septembre" => 30,
    "octobre" => 31,
    "novembre" => 30,
    "décembre" => 31
];

afficher_mois($mois);
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
