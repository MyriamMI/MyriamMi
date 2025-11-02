<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

function afficher_3bis ($mois){
    foreach ($mois as $nom => $jours){
        if ($jours <= 29){
            echo "- $nom </br>";
        }
    }

}

$mois = [
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
];

afficher_3bis($mois);

?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
