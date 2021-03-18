<?php

    if (!isset($_GET["nome"]) 
    || !isset($_GET["endereco"]) 
    || !isset($_GET["numero"]) 
    || !isset($_GET["quilowhatts"])){

        header("location: index.php");
    }

    $nome = $_GET["nome"];
    $endereco = $_GET["endereco"];
    $numero = $_GET["numero"];
    $quilowhatts = $_GET["quilowhatts"];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css">
    <title>Calculo de quilowhatts$quilowhatts de energia</title>
</head>
<body>
    <?php
        echo "<h1>Conta de luz de <em>$nome</em></h1>";
        echo "<h2>$endereco, $numero</h2>";
        if ($quilowhatts > 120) {
            $valorPagar = $quilowhatts * 0.42;
            echo "<h2>Consumo: $quilowhatts kWh</spam></h2>";
            echo "<h2>Valor a pagar: <em>$valorPagar reais</em></h2>";
        } else {
            $valorPagar = $quilowhatts * 0.32;
            echo "<h2>Consumo: $quilowhatts kWh</spam></h2>";
            echo "<h2>Valor a pagar: <em>$valorPagar reais</em></h2>";
            echo "<h2>Obrigado por economizar!!</h2>";
        }
    ?>
</body>
</html>