<?php

$num1 = isset($_POST['num1']) ? $_POST['num1'] : NULL;
$num2 = isset($_POST['num2']) ? $_POST['num2'] : NULL;
$operacao = isset($_POST['operacao']) ? $_POST['operacao'] : NULL;
    
    switch ($operacao) {

        case '+': $resultado = $num1 + $num2; break;
        case '-': $resultado = $num1 - $num2; break;
        case '/': $resultado = $num1 / $num2; break;
        case '*': $resultado = $num1 * $num2; break;
        default: $resultado = null; break;
    }

?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css">
    <title>calculadora</title>
</head>
<body>
    <form method="POST" action="index.php">
        <h1>Calculadora</h1>
        <div class="input-group">
            <label for="num1">Digite o primeiro numero</label>
            <input type="number" name="num1" id="num1" required />
        </div>

        <div class="input-group">
            <label for="num2">Digite o segundo numero</label>
            <input type="number" name="num2" id="num2" required />
        </div>

        <div>   
            <label for="soma">Soma
                <input type="radio" name="operacao" value="+">
            </label>

            <label for="sub">Subtração
                <input type="radio" name="operacao" value="-">
            </label>

            <label for="multi">Multiplicação
                <input type="radio" name="operacao" value="*">
            </label>

            <label for="div">Divisão
                <input type="radio" name="operacao" value="/">
            </label>
        </div>

        <div class="input-group">
            <label for="num2">RESULTADO</label>
            <input type="number" id="resultado" readonly value="<?= $resultado ?>" />
        </div>

        <button>Calcular</button>
    </form>
</body>
</html>