<?php 

    /* Imprimi o que tem no vetor pode ser qualquer um */
    $nome = ($_GET["nome"]);

    $idade = ($_GET["idade"]);

    $anoNascimento = data("Y") - $idade;

    echo "<h1>Olá, $nome, você nasceu em $anoNascimento</h1>";

    if($idade > 60) {
        echo "<h2>Você é do grupo de risco! Cuidado!</h2>";
    }