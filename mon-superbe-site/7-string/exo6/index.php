<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : String"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

$email = "d.pascal2012@mail.com";

// 1) Récupérer le nom de l’utilisateur 
$utilisateur = strstr($email, "@", true); // false si pas de '@'

// 2) Index du caractère '@'
$index_arobase = strpos($email, "@"); // false si absent

// 3) Récupérer le nom de domaine après @
if ($index_arobase !== false) {
    // Si le caractère '@' existe, on récupère tout ce qu’il y a après
    $domain = substr($email, $index_arobase + 1);
} else {
    // Sinon, on met une chaîne vide
    $domain = "";
}

// 4) Vérifier si c’est une adresse GMAIL
$est_gmail = (strtolower($domain) === "gmail.com");

echo "<pre>";
echo "Utilisateur : " . var_export($utilisateur, true) . "<br>";
echo "Index '@'   : " . var_export($index_arobase, true) . "<br>";
echo "Domaine     : $domain" . "<br>";
echo "Est Gmail ? : " . ($est_gmail ? "OUI" : "NON") . "<br>";
echo "</pre>";

?>




<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>




