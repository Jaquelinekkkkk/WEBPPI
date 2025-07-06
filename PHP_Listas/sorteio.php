<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Sorteio de Número Aleatório</title>
  <style>
    body { font-family: Arial, sans-serif; padding: 30px; }
    input, button { padding: 8px; margin: 6px 0; }
    .resultado { margin-top: 20px; font-weight: bold; color: green; }
  </style>
</head>
<body>

  <h1>Sorteio de Número Aleatório</h1>

  <form method="post">
    <label for="min">Valor mínimo:</label><br>
    <input type="number" name="min" id="min" required><br>

    <label for="max">Valor máximo:</label><br>
    <input type="number" name="max" id="max" required><br>

    <button type="submit">Sortear Número</button>
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $min = intval($_POST["min"]);
      $max = intval($_POST["max"]);

      if ($min > $max) {
        echo "<p class='resultado'>O valor mínimo deve ser menor ou igual ao máximo!</p>";
      } else {
        $sorteado = rand($min, $max);
        echo "<p class='resultado'> Número sorteado: <strong>$sorteado</strong></p>";
      }
    }
  ?>

</body>
</html>