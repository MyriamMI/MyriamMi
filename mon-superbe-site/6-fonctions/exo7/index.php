<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

function somme($c1, $c2){
    echo "La somme est:  $c1+$c2";
}

somme(10,5);
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
