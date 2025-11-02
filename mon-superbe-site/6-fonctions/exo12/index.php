<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 12 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

function factorielle($nombre) {
    $resultat = 1;

    for ($i = 1; $i <= $nombre; $i++) {
        $resultat *= $i;
    }

    return $resultat;
}

$nombre = 3;
echo "Le factorielle de $nombre est : " . factorielle($nombre);
?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
