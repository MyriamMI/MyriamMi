<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : String"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

$texte = "PHP 8 \n est meilleur \n que ASP \n et JSP \n réunis";

$texte_bis = str_replace("\n", "<br>", $texte);

echo $texte_bis;
?>




<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>




