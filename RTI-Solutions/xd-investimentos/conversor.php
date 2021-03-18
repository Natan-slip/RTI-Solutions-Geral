<?php

if(!isset($_GET["valor"]) 
|| !isset($_GET["conversor"])){

  //redirecionar o usuário para a tela index.php
  header("location: index.php");
}

$valor = $_GET["valor"];
$conversor = $_GET["conversor"];

if($conversor == "euro") {
    $euro = $valor * 6.57;
    echo "<h1> Valor Total em Euro: € $euro";
}
else {
    $dolar = $valor * 5.41;
    echo "<h1> Valor Total em Dolar : $ $dolar";
}