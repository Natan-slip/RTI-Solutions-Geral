<?php

$nome = "Irineu";

$idade = 39;

$anoNascimento = date("Y") - $idade;

/*
    Exibir na página o nome do usuário e o seu ano de nascimento

    Exemplo: olá, fulano de tal, você nasceu em 1988 */

 echo "Olá $nome, você nasceu em $anoNascimento. <br>";   

 echo "Hoje é ". date("d/m/y") ;