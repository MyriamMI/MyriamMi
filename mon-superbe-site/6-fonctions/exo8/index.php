<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";


$mon_resultat = produit (10, 5);
echo $mon_resultat;
function produit($c1, $c2){
    $resultat =$c1*$c2;
    return $resultat;
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
