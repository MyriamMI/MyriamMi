<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 8 : Boucles"; //Mettre le nom du titre de la page que vous voulez
?>

<?=$titre;
 echo "<br>";

$notes = [15, 18, 17, 10.5, 14.25, 19, 20, 11, 10, 8];

echo "<h3>Liste des notes :</h3>";
foreach ($notes as $note) {
    echo $note . " | ";
}
echo "<br><br>";
// 2. Calculer la moyenne des nombres contenus dans le tableau
$somme = array_sum($notes);        // additionne toutes les valeurs
$nbNotes = count($notes);          // compte le nombre de valeurs
$moyenne = $somme / $nbNotes;

echo "La moyenne des notes est : " . $moyenne . "<br><br>";

// 3. éléments supérieurs ou égaux à 10
$compteur = 0;
foreach ($notes as $note) {
    if ($note >= 10) {
        $compteur++;
    }
}
echo "Nombre de notes supérieures ou égales à 10 : " . $compteur . "<br><br>";

// 4. Tester si la note 20 est présente ou non
if (in_array(20, $notes)) {
    echo " La note 20 est présente dans le tableau.<br><br>";
} else {
    echo " La note 20 n'est pas présente dans le tableau.<br><br>";
}

// 5. meilleure note obtenue
$max = max($notes);
echo "La meilleure note est : " . $max . "<br><br>";

// 6. moins bonne note obtenue
$min = min($notes);
echo "La moins bonne note est : " . $min . "<br><br>";
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
