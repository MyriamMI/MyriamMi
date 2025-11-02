<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 3 : Boucles"; //Mettre le nom du titre de la page que vous voulez
?>

<?=$titre;
 echo "<br>";
$nombre = 3;
$fact = 1;

// La boucle part de $nombre et descend jusqu'à 1
for ($i = $nombre; $i >= 1; $i--) {
    $fact *= $i; // équivaut à $fact = $fact * $i
}

echo "La factorielle de $nombre est : $fact";


?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
