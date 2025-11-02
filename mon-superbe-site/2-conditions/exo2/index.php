<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 2 : Conditions"; //Mettre le nom du titre de la page que vous voulez
?>

<p>Exercice 2 dans la série Les conditions</p>

<?php
$budget = 2553.89;
$achat  = 3554.76; 

if ($budget > $achat) {
    echo "Super, t'es large, tu peux continuer les boutiques.";
} elseif ($budget < $achat) {
    echo "STOP ! On arrête tout, tu ne peux plus payer !!";
} else {
    echo "BOOM ! Je suis trop forte, c'est pile poil dans mon budget hehe !";
}
?>

?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
