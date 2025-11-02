<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 16 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

function minimum($nombres) {
    if (empty($nombres)) {
        return "Le tableau est vide.";
    }

    $min = $nombres[0];

    foreach ($nombres as $nombre) {
        if ($nombre < $min) {
            $min = $nombre;
        }
    }
    return $min;
}

$notes = [15, 18, 17, 10.5, 14.25, 19, 20, 11, 10, 8];

echo "La plus petite note est : " . minimum($notes);


?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
