<?php
$n1 = $_POST["Numero1"];
$n2 = $_POST["Numero2"];
$operacao = $_POST["Operadores"];



include("./index.php");
if ($operacao == "Multiplicação") {
    $total = $n1 * $n2;
} else if ($operacao == "Subtração") {
    $total = $n1 - $n2;
} else if ($operacao == "Divisão") {
    $total = $n1 / $n2;
} else if ($operacao == "Soma") {
    $total = $n1 + $n2;
}

?>
