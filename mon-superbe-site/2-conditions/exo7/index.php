<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 7 : Conditions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
$montant = 85;

if ($montant > 100) {
    $reduction = $montant * 0.10; 
    $montantFinal = $montant - $reduction;
    echo "Une réduction de 10% a été appliquée. Montant final : $montantFinal €";
} elseif ($montant > 50 && $montant <= 100) {
    $reduction = $montant * 0.05; 
    $montantFinal = $montant - $reduction;
    echo "Une réduction de 5% a été appliquée. Montant final : $montantFinal €";
} else {
    echo "Aucune réduction n'est appliquée. Montant à payer : $montant €";
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


