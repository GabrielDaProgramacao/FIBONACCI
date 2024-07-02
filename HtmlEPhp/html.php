<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sequência de Fibonacci</title>
</head>
<body>
  <h1>Sequência de Fibonacci</h1>
  <form method="post" action="">
    <label for="numero">Digite um número:</label>
    <input type="number" id="numero" name="numero" required>
    <button type="submit">Calcular Fibonacci</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = intval($_POST["numero"]);

    function fibonacci($n) {
      if ($n <= 1) {
        return $n;
      }
      return fibonacci($n - 1) + fibonacci($n - 2);
    }

    echo "<h2>Sequência de Fibonacci até o número $numero:</h2>";
    echo "<ul>";
    for ($i = 0; $i < $numero; $i++) {
      echo "<li>" . fibonacci($i) . "</li>";
    }
    echo "</ul>";
  }
  ?>
</body>
</html>