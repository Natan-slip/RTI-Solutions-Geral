<?php

function soma (array $vetorDeInteiros) {

    $soma = 0;
    for ($b=0; $b < count($vetorDeInteiros); $b++) { 
    $soma = $soma + $vetorDeInteiros[$b];
    }
        return $soma;
    }
    $soma = soma([1, 2, 3, 20]);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" /> 
    <title>Atividade 1</title>
</head>
<body>
    <form method="POST" action="">
        <h1>Inteiro</h1>
        <div class="input-group">
            <label for="resultado">Resultado da soma dos inteiros</label>
            <input type="number"  name="resultado" id="resultado" readonly value="<?= $soma ?>"/>
        </div>
    </form>
</body>
</html>