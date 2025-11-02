<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : String"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

$str1 = "Etoiles de mer";
$str2 = "chat et la souris";

$str1 = strtolower($str1); // Met en minuscules
$str2 = strtolower($str2);

// on compare par odre alphabétique 
if ($str1 < $str2) {
    echo "$str1<br>$str2";
} elseif ($str1 > $str2) {
    echo "$str2<br>$str1";
} else {
    echo "Les deux chaînes sont identiques : $str1";
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




