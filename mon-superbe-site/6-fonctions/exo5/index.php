<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "<br>";

echo "Qu’affiche ce programme ?<br>";
salutation();
function salutation() {
    echo "Bonjour !";
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
