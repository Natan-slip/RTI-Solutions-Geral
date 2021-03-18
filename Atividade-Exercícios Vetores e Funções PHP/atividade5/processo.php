<?php

    $nome = $_POST["nome"];
    $cidade = $_POST["cidades"];
    $listaCidade = [
        "Jandira",
        "Itapevi",
        "Barueri",
        "Osasco",
        "Cotia",
        "Santa de Parnaíba",
        "Carapicuíba",
        "São Paulo"
    ];
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Document</title>
</head>
<body>
    <form>
        <div class="input-group">
            <h1>Olá <?= $nome ?>, de <?= $cidade ?>. Seja Bem-Vindo.</h1>
        </div>
    </form>    
</body>