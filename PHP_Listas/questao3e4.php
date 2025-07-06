<?php
// Função hello() - Imprime "Hello"
function hello() {
    echo "Hello";
}

// Função randomize() - Imprime um número aleatório
function randomize() {
    echo rand(1, 100); // Gera e imprime um número aleatório entre 1 e 100
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções PHP</title>
</head>
<body>

    <h1>Funções PHP Exemplo</h1>

    <h2>1. Função hello() que imprime "Hello"</h2>
    <?php
        hello(); // Chama a função hello() para exibir "Hello"
    ?>

    <h2>2. Função randomize() que imprime um número aleatório</h2>
    <?php
        randomize(); // Chama a função randomize() para exibir um número aleatório
    ?>

</body>
</html>
