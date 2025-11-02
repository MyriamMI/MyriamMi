<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Variables"; //Mettre le nom du titre de la page que vous voulez
?>
<?php
$age = 17;

$age = 23;

echo "L'âge est maintenant : $age";
?>



<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
