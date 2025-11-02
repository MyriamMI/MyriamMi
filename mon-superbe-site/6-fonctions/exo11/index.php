<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 11 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

function factorielle($nombre) {
    $resultat = 1; // on part de 1, car multiplier par 0 donnerait toujours 0

    for ($i = 1; $i <= $nombre; $i++) {
        $resultat *= $i; // équivaut à $resultat = $resultat * $i
    }

    return $resultat; // on retourne la valeur finale
}

$nombre = 5;
echo "La factorielle de $nombre est " . factorielle($nombre);

?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
