<?php

    if(!isset($_GET["nome"]) 
        || !isset($_GET["salario"])) {

        header("location: index.php");
    }

    $nome = $_GET["nome"];
    $salario = $_GET["salario"];

    if($salario > 5000) {
        $valor1 = $salario + (($salario * 10) / 100);
        echo "<h1> O $nome passará a receber R$ $valor1";
    }
    else {
        $valor2 = $salario + (($salario * 20) / 100);
        echo "<h1> O $nome passará a receber R$ $valor2";
    }


    ?>
