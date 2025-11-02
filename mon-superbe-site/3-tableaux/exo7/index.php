<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 3 - Les tableaux associatifs_Exo 7"; //Mettre le nom du titre de la page que vous voulez
?>
<?php
$nombre = 10;

while ($nombre < 20) {

    if ($nombre == 15) {
        echo "$nombre<br>";
    } else {
        echo $nombre . "<br>";
    }

    $nombre++;
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