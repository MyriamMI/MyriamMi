<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 3 - Les tableaux associatifs _Exo 3"; //Mettre le nom du titre de la page que vous voulez
?>
<?php
$personnes = array(
    'Jean' => 16,
    'Manuel' => 19,
    'André' => 66
);

echo "Jean a " . $personnes['Jean'] . " ans.<br><br>";
echo "Jean a " . $personnes['Jean'] . " ans.<br>";
echo "Manuel a " . $personnes['Manuel'] . " ans.<br>";
echo "André a " . $personnes['André'] . " ans.";
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
