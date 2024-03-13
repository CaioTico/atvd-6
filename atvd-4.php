<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Número</title>
</head>
<body>
    <h1>Verificar Número</h1>
    <form action="" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Verificar</button>
    </form>

    <?php
    // Verifica se o método de requisição é POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Atribui o valor de 'numero' da requisição POST à variável $numero
        $numero = $_POST["numero"];

        // Verifica se o número é maior que 0
        if ($numero > 0) {
            // Exibe uma mensagem afirmando que o número é positivo
            echo "<p>Esse número aki <strong>$numero</strong> que vc colocou é positivo.</p>";
        } elseif ($numero < 0) {
            // Exibe uma mensagem afirmando que o número é negativo
            echo "<p>Esse número aki <strong>$numero</strong> que vc colocou é negativo.</p>";
        } else {
            // Exibe uma mensagem afirmando que o número é neutro (zero)
            echo "<p>Esse número aki <strong>$numero</strong> que vc colocou é neutro (zero).</p>";
        }
    }
    ?>
</body>
</html>