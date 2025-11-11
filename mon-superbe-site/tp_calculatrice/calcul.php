<?php

/** Traite la soumission du formulaire de calculatrice.
 
 * @return array État du formulaire avec les clés :
 *   - 'soumis'  : bool, si le formulaire a été soumis
 *   - 'erreurs' : array, liste des messages d'erreur (vide si ok)
 *   - 'res'     : float|null, résultat du calcul (null si erreurs)
 *   - 'a'       : string, valeur brute du premier nombre
 *   - 'b'       : string, valeur brute du deuxième nombre
 *   - 'op'      : string, opération choisie
 */

function traiter_calc(): array
{
    $etat = [
        'soumis'  => ($_SERVER['REQUEST_METHOD'] === 'POST'),
        'erreurs' => [],
        'res'     => null,
        'a'       => $_POST['a']  ?? '',
        'b'       => $_POST['b']  ?? '',
        'op'      => $_POST['op'] ?? 'add',
    ];

    if (!$etat['soumis']) return $etat;

    // Récupération des valeurs
    $aStr = (string)$etat['a'];
    $bStr = (string)$etat['b'];
    $op   = (string)$etat['op'];

    //  vérifs basiques
    if ($aStr === '')             $etat['erreurs'][] = "Le premier nombre est obligatoire.";
    if ($bStr === '')             $etat['erreurs'][] = "Le deuxième nombre est obligatoire.";
    if ($aStr !== '' && !is_numeric($aStr)) $etat['erreurs'][] = "Le premier nombre doit être numérique.";
    if ($bStr !== '' && !is_numeric($bStr)) $etat['erreurs'][] = "Le deuxième nombre doit être numérique.";

    // Vérif opération connue
    $ops = ['add'=>'+','sub'=>'−','mul'=>'×','div'=>'÷','mod'=>'%'];
    if (!isset($ops[$op])) $etat['erreurs'][] = "Opération inconnue.";

    if ($etat['erreurs']) return $etat;

    // Conversion en float
    $a = (float)$aStr;
    $b = (float)$bStr;

    //  Calcul
    switch ($op) {
        case 'add': $res = $a + $b; break;
        case 'sub': $res = $a - $b; break;
        case 'mul': $res = $a * $b; break;
        case 'div':
            if ($b == 0.0) { 
                $etat['erreurs'][] = "Division par zéro interdite."; 
                return $etat; 
            }
            $res = $a / $b;
            break;
        case 'mod':
            if ($b == 0.0) { 
                $etat['erreurs'][] = "Modulo par zéro interdit."; 
                return $etat; 
            }
            // fmod gère les floats
            $res = fmod($a, $b);
            break;
    }

    $etat['res'] = $res;
    return $etat;
}

/** Retourne le symbole d'une opération.
 *
 * @param string $op Code de l'opération ('add','sub','mul','div','mod')
 * @return string Symbole correspondant ('+','−','×','÷','%') ou $op si inconnu
 */

function symbole_op(string $op): string
{
    $map = ['add'=>'+','sub'=>'−','mul'=>'×','div'=>'÷','mod'=>'%'];
    return $map[$op] ?? $op;
}
