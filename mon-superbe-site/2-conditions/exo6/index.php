<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : Conditions"; //Mettre le nom du titre de la page que vous voulez
?>


<?php

$autorise = true; 

if ($autorise) {
    echo "Vous pouvez rentrer.";
} else {
    echo "Accès refusé.";
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


