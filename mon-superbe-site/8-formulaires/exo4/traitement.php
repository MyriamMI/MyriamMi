<?php
session_start(); // Nécessaire pour accéder/modifier $_SESSION

// Récupération des données du formulaire
$client = [
    'nom' => $_POST['nom'],
    'prenom' => $_POST['prenom'],
    'adresse' => $_POST['adresse'],
    'ville' => $_POST['ville'],
    'cp' => $_POST['cp']
];

// Si la session "clients" n’existe pas encore, on la crée
if (!isset($_SESSION['clients'])) {
    $_SESSION['clients'] = [];
}

// On ajoute ce client dans le tableau de session
$_SESSION['clients'][] = $client;

// On redirige vers la page principale
header("Location: index.php");
exit;
?>
