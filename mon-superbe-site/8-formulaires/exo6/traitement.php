<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $choix = $_POST['choix'];
    
    if ($choix == "Vendre") {
        header("Location: vendre.php");
    } elseif ($choix == "Acheter") {
        header("Location: acheter.php");
    } elseif ($choix == "Louer") {
        header("Location: louer.php");
    } else {
        echo "Choix invalide.";
    }
    exit;
}
?>
