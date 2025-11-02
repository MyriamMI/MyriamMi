<?php 
ob_start(); 
$titre = "Exo 19 : Fonctions"; 
echo "<h3>$titre</h3><br>";

function okSansErreurs(): bool {
    $e = DateTime::getLastErrors();            // array|false
    if ($e === false) return true;             // aucun message => OK
    return ($e['error_count'] === 0 && $e['warning_count'] === 0);
}

function verifierDate($dateSaisie) {
    $formats = ['d/m/Y','d-m-Y','Y-m-d'];
    $dateSaisie = trim($dateSaisie);
    foreach ($formats as $f) {
        $dt = DateTime::createFromFormat($f, $dateSaisie);
        if ($dt && okSansErreurs()) return $dt;
    }
    return null;
}

function verifierHeure($heureSaisie) {
    // H:i (09:30), G:i (9:30), H\hi (23h05)
    $formats = ['H:i','G:i','H\hi'];
    $heureSaisie = trim($heureSaisie);
    foreach ($formats as $f) {
        $dt = DateTime::createFromFormat($f, $heureSaisie);
        if ($dt && okSansErreurs()) {
            // bornes 00–23:59:59
            $h=(int)$dt->format('H'); $m=(int)$dt->format('i'); $s=(int)$dt->format('s');
            if ($h>=0 && $h<=23 && $m>=0 && $m<=59 && $s>=0 && $s<=59) return $dt;
        }
    }
    return null;
}

function resultatAffiche($dateSaisie, $heureSaisie) {
    $d = verifierDate($dateSaisie);
    $h = verifierHeure($heureSaisie);

    echo "<strong>Entrée :</strong> date='$dateSaisie' | heure='$heureSaisie'<br>";
    if ($d && $h) {
        echo " Date ISO : ".$d->format('Y-m-d')." | Heure : ".$h->format('H:i')."<br><br>";
    } else {
        if (!$d) echo " Date invalide (ex : 31/12/2025, 31-12-2025, 2025-12-31)<br>";
        if (!$h) echo " Heure invalide (ex : 09:30, 9:30, 23h05)<br>";
        echo "<br>";
    }
}

// Tests
resultatAffiche('31/12/2025','09:30');   // OK
resultatAffiche('2025-02-29','23h05');   // date KO (2025 non bissextile)
resultatAffiche('29/02/2024','7:05');    // OK
resultatAffiche('01-01-2026','24:00');   // heure KO (24:00 refusé, utiliser 00:00)
?>
<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
