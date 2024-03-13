<!DOCTYPE html>
<html>

<head>
    <html lang="pt-br">
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Fuso horário</title>
</head>

<body>
    <h1>Código para verificação - Par ou Impar</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="numero">Digite um número:</label><br>
        <input type="number" id="numero" name="numero"><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    // Verifica se o formulário foi enviado usando o método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recupera o valor do input "numero" enviado pelo formulário
        $numero = $_POST["numero"];

        // Verifica se o número é par ou ímpar usando o operador módulo %
        if ($numero % 2 == 0) {
            // Exibe a mensagem "O número é par." se o número for par
            echo "<p>O número $numero é par.</p>";
        } else {
            // Exibe a mensagem "O número é ímpar." se o número for ímpar
            echo "<p>O número $numero é ímpar.</p>";
        }
    }
    ?>
</body>

</html>