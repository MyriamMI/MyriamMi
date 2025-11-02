<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 3 - Les tableaux associatifs_Exo 6"; //Mettre le nom du titre de la page que vous voulez
?>
<?php
$personnes = array(
    'Adam' => 46,
    'Linda' => 35,
    'Joe' => 26
);
if ($personnes['Adam'] > $personnes['Linda'] && $personnes['Adam'] > $personnes['Joe']) {
    echo "Adam est plus grand que Linda et Joe.";
} elseif ($personnes['Linda'] > $personnes['Adam'] && $personnes['Linda'] > $personnes['Joe']) {
    echo "Linda est plus grande qu'Adam et Joe.";
} else {
    echo "Joe est plus grand qu'Adam et Linda.";
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