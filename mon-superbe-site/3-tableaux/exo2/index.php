<?php ob_start(); //NE PAS MODIFIER 
$titre = "Partie 3 - Les tableaux associatifs_Exo 2"; //Mettre le nom du titre de la page que vous voulez
?>
<?php
$pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000
);

echo "Le troisième élément est : " . $pays_population['Suisse'] . "<br><br>";
echo "La population de France est de : " . $pays_population['France'] . "<br><br>";
echo "La population du Mexique est de : " . $pays_population['Mexique'];
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
