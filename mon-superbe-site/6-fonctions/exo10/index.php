<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 10 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

$result=produit (10, 5);
echo $result;//echo (produit(10,5));
function produit($c1, $c2){
    $resultat =$c1*$c2;
    return $resultat;}
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
