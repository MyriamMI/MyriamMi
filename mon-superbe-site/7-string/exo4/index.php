<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : String"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

function phrase(string $s): string {
    return mb_convert_case(trim($s), MB_CASE_TITLE, 'UTF-8');
}

$ex4 = "  TRANSFORMEZ unE ChaINE DE CaracTERES   ";
echo phrase($ex4);

?>




<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>




