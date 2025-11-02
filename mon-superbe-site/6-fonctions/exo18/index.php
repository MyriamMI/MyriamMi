<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 18 : Fonctions"; //Mettre le nom du titre de la page que vous voulez
?>

<?php
echo $titre;
echo "</br>";

/* ========== NOMBRES PREMIERS ========== */
// Teste si n est premier (n >= 0)
function is_prime(int $n): bool {
    if ($n < 2) return false;
    if ($n % 2 === 0) return $n === 2;
    for ($i = 3, $lim = (int)floor(sqrt($n)); $i <= $lim; $i += 2) {
        if ($n % $i === 0) return false;
    }
    return true;
}
//  Renvoie tous les nombres premiers ≤ $max
function primes_up(int $max): array {
    if ($max < 2) return [];

    $criblage = array_fill(0, $max + 1, true);
    $criblage[0] = $criblage[1] = false;

    for ($p = 2; $p * $p <= $max; $p++) {
        if ($criblage[$p]) {
            for ($m = $p * $p; $m <= $max; $m += $p) {
                $criblage[$m] = false;
            }
        }
    }

    $premiers = [];
    for ($n = 2; $n <= $max; $n++) {
        if ($criblage[$n]) $premiers[] = $n;
    }
    return $premiers;
}


/* CARRE / CUBE / RACINE / LN */
function carre(float|int $x): float { return $x * $x; }
function cube(float|int $x): float { return $x * $x * $x; }
function racineCarre(float $x): float { return sqrt($x); }     // racine carrée
function ln(float $x): float { return log($x); }                 // log népérien

/* CONVERSION ANGLES */
function deg2rad_custom(float $deg): float { return $deg * M_PI / 180.0; }
function rad2deg_custom(float $rad): float { return $rad * 180.0 / M_PI; }

/*  DIVISION EUCLIDIENNE  */

function division_euclidienne(int $a, int $b): array {
    if ($b === 0) throw new InvalidArgumentException("Division par zéro");
    $q = intdiv($a, $b);
    $r = $a - $q * $b;

    if ($r < 0) { $r += abs($b); $q -= ($b > 0) ? 1 : -1; }
    return [$q, $r];
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
