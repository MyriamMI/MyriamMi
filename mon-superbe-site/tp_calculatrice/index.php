<?php
require_once __DIR__ . '/calcul.php';
$etat = traiter_calc();
?>

<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Calculatrice</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
 <main class="card" role="main" aria-labelledby="titre">
    <h1 id="titre">Calculatrice</h1>

    <form action="index.php" method="post" class="row" novalidate>
      <div>
        <label for="a">Premier nombre</label> 
        <!-- step="any" pour autoriser n’importe quelle valeur numérique y compris négatifs  -->
                <input type="number" id="a" name="a" step="any" placeholder="Ex. 15" 
               required value="<?= htmlspecialchars($etat['a'] ?? '') ?>">
      </div>

      <div>
        <label for="b">Deuxième nombre</label>
        <input type="number" id="b" name="b" step="any" placeholder="Ex. 2.5"
               required value="<?= htmlspecialchars($etat['b'] ?? '') ?>">
      </div>

      <div>
        <label for="op">Opération</label>
        <select id="op" name="op" required>
          <?php
            $ops = [
              'add' => 'Addition (+)',
              'sub' => 'Soustraction (−)',
              'mul' => 'Multiplication (×)',
              'div' => 'Division (÷)',
              'mod' => 'Modulo (%)'
            ];
            $current = $etat['op'] ?? 'add';
            foreach ($ops as $value => $label) {
              $selected = ($current === $value) ? 'selected' : '';
              echo "<option value=\"$value\" $selected > $label </option>";
            }
          ?>
        </select>
      </div>

      <div class="actions">
        <button type="reset" class="btn">Réinitialiser</button>
        <button type="submit" class="btn primary">Calculer</button>
      </div>
    </form>

    <?php if (!empty($etat['soumis'])): ?>
      <?php if (!empty($etat['erreurs'])): ?>
        <div class="alert error" role="alert">
          <strong>Veuillez corriger :</strong>
          <ul>
            <?php foreach ($etat['erreurs'] as $e): ?>
              <li><?= htmlspecialchars($e) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      <?php else: ?>
        <div class="alert ok" role="status" aria-live="polite">
          <?php
            // a (symbole) b = res
            echo htmlspecialchars($etat['a'])
               .' '.htmlspecialchars(symbole_op($etat['op']))
               .' '.htmlspecialchars($etat['b'])
               .' = <strong>'.htmlspecialchars((string)$etat['res']).'</strong>';
          ?>
        </div>
      <?php endif; ?>
    <?php endif; ?>

  </main>
</body>
</html>
