<?php

function doisVetores (array $vetor1, array $vetor2){

    echo "<h1>Valor dos dois vetores: </h1>";
    print_r($vetor1);
    echo "<br></br>";
    print_r($vetor2);
    echo "<br></br>";
    echo "<h1>Exibir: </h1>";

    foreach($vetor1 as $c) {

        foreach($vetor2 as $b) {

            if ($c == $b){
                $d = "true";
                break;
            } else if ($b != $c){
                $d = "false";
            }
        }
    }
    echo "<h2>$d</h2>";
}

doisVetores ([17, 25, 18, 20], [ 17, 25, 18, 20]);
// feito a atividade mas acho que não está 100% boa.
?>