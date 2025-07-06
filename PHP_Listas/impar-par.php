<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Verificador de Par ou Ímpar</title>
  <style>
    body {
      font-family: Arial;
      height: 100vh;
      margin: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: blue;
    }

    input {
      padding: 8px;
      margin-top: 10px;
    }

    button {
      padding: 8px;
      margin-top: 10px;
    }

    .resultado {
      margin-top: 20px;
    }

    form {
      background-color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
  </style>
</head>
<body>

  <form method="post">
    <h1>Par - Ímpar</h1>
    <label for="numero">Informe um número:</label><br>
    <input type="number" name="numero" id="numero" required><br>
    <button type="submit">Verificar</button>

    <?php
      if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero = intval($_POST["numero"]);
        $resultado = ($numero % 2 === 0) ? "Par" : "Ímpar";

        echo "<p class='resultado'>Você digitou: $numero<br>";
        echo "Resultado: $resultado</p>";
      }
    ?>
  </form>

</body>
</html>