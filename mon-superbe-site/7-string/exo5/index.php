<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : String"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";
$citation = "  Les dunes changent sous l'action du vent, mais le désert reste toujours le même.  ";

// 1) 
$pos_desert = mb_strpos($citation, "désert", 0, "UTF-8");

// 2) 
$citation_ltrim = ltrim($citation);

// 3) 
$citation_trim  = rtrim($citation_ltrim);

// 4) 
$pos_desert_apres_trim = mb_strpos($citation_trim, "désert", 0, "UTF-8");

// 5) 
// On cherche la position de la virgule dans la phrase
$pos_virgule = mb_strpos($citation_trim, ",", 0, "UTF-8");

// Si on trouve une virgule, on prend tout ce qui est avant
if ($pos_virgule !== false) {
    $sous_chaine1 = mb_substr($citation_trim, 0, $pos_virgule, "UTF-8");
} else {
    // Sinon, on prend toute la citation
    $sous_chaine1 = $citation_trim;
}


// 6)
$taille_sous_chaine1 = mb_strlen($sous_chaine1, "UTF-8");

// 7) 
$nb_o_sous_chaine1 = mb_substr_count($sous_chaine1, "o", "UTF-8");

// 8) 
if ($pos_virgule !== false) {
    // On récupère tout ce qui vient après la virgule
    $apres_virgule = mb_substr($citation_trim, $pos_virgule + 1, null, "UTF-8");

    // On supprime les espaces inutiles au début et à la fin
    $apres_virgule = trim($apres_virgule);
} else {
    // Si aucune virgule n’a été trouvée
    $apres_virgule = "";
}

// On retire le mot "mais" au début de la sous-chaîne s’il est présent
$sans_mais = preg_replace('/^mais\s+/u', '', $apres_virgule);

// On supprime le point final à la fin
$sous_chaine2 = rtrim($sans_mais, ".");


// 9) 
$taille_sous_chaine2 = mb_strlen($sous_chaine2, "UTF-8");
// 10) 
$nb_e_sous_chaine2 = mb_substr_count($sous_chaine2, "e", "UTF-8");

// 11)
$citation_full_trim = trim($citation);
$nb_on_citation = mb_substr_count($citation_full_trim, "on", "UTF-8");

// 12) 
$taille_citation = mb_strlen($citation_full_trim, "UTF-8");

// --- Affichage ---
echo "<pre>";
echo "1)" . var_export($pos_desert, true) . "<br>";
echo "2) '$citation_ltrim'<br>";
echo "3)'$citation_trim'<br>";
echo "4) " . var_export($pos_desert_apres_trim, true) . "<br>";
echo "5) $sous_chaine1<br>";
echo "6) $taille_sous_chaine1<br>";
echo "7) $nb_o_sous_chaine1<br>";
echo "8) $sous_chaine2<br>";
echo "9) $taille_sous_chaine2<br>";
echo "10) $nb_e_sous_chaine2<br>";
echo "11 $nb_on_citation<br>";
echo "12)  $taille_citation<br>";
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




