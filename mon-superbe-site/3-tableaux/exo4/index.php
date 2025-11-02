<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 3 - Les tableaux associatifs_Exo 4"; //Mettre le nom du titre de la page que vous voulez
?>
<?php
$personnes = array(
    'Jean' => 16,
    'Manuel' => 19,
    'André' => 66
);

if ($personnes['Jean'] > $personnes['Manuel']) {
    echo ('Jean est plus grand que Manuel');
} else {
    echo ('Manuel est plus grand que Jean');
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