<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Verificador de números arredondados</title>
</head>

<body>
    <h1>VERIFICADOR DE NÚMEROS ARREDONDADOS</h1>
    <form action="" method="post">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero">
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php
    $numero = null; // Inicializa a variável $numero como nula
    
    // Verifica se o formulário foi enviado
    if (isset($_POST['enviar'])) {
        $numero = $_POST['numero']; // Atribui o valor do campo de entrada à variável $numero
    
        // Verifica se o número é um inteiro e se termina em 0
        if (is_numeric($numero) && $numero % 10 == 0) {
            $arredondado = true; // Define a variável $arredondado como verdadeira se o número for arredondado
        } else {
            $arredondado = false; // Define a variável $arredondado como falsa se o número não for arredondado
        }

        // Exibe uma mensagem com base no resultado da verificação de arredondamento
        if ($arredondado) { // Se o número for arredondado, exibe uma mensagem indicando isso
            echo "Esse número aki <strong>$numero</strong> que vc colocou é arredondado.</p>";
        } else { // Se o número não for arredondado, exibe uma mensagem indicando isso
            echo "Esse número aki <strong>$numero</strong> que vc colocou não é arredondado.</p>";
        }
    }
    ?>
</body>

</html>