<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 15 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

function maximum($nombres) {
    // On vérifie que le tableau n'est pas vide
    if (empty($nombres)) {
        return "Le tableau est vide.";
    }
    $max = $nombres[0];

    foreach ($nombres as $nombre) {
        if ($nombre > $max) {
            $max = $nombre;
        }
    }
    return $max;
}
$notes = [15, 18, 17, 10.5, 14.25, 19, 20, 11, 10, 8];

echo "La meilleure note est : " . maximum($notes);



?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
