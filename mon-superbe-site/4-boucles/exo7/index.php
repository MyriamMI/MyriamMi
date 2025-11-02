<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Boucles"; //Mettre le nom du titre de la page que vous voulez
?>

<?=$titre;
 echo "<br>";

for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {

        $resultat = $i * $j;

        echo $i . " x " . $j . " = " . $resultat . " <br> ";
    }
    
    echo "<br>";
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
