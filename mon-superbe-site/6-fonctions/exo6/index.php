<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

function salutation($prenom)
{
    echo "  bonjour $prenom ";
}
 
salutation("ADAM");
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
