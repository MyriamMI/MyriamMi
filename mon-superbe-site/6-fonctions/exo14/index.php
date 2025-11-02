<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 14 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

function moyenne($notes) {
    $somme = 0;
    $nbNotes = count($notes); 
    foreach ($notes as $note) {
        $somme += $note;
    }

    $moyenne = $somme / $nbNotes;

    // Retourne la moyenne arrondie à 1 décimales
    return round($moyenne, 1);
}

$notes = [15, 18, 17, 10.5, 14.25, 19, 20, 11, 10, 8];

echo "La moyenne des notes est : " . moyenne($notes);



?>







<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
