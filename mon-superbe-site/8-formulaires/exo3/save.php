<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $naissance = $_POST['naissance'];
    $adresse = $_POST['adresse'];
    // Affichage des données
    echo "<p>Le nouveau membre s'appelle $prenom $nom. ";
    echo "Il est né le $naissance. ";
    echo "Il habite à rue $adresse.</p>";
} else {
    echo "Aucune donnée reçue.";
}
?>
