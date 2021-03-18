<?php

function deletarValor (array $vetor, $valor) {

    print_r($vetor);

    foreach($vetor as $b => $a){

        if ($a == $valor) {

           unset($vetor[$b]);
           
           echo "<b>$a</b>";
           echo "<br></br>";

           print_r($vetor);
        } 
        else {
            echo false;     
        } 
    }
}

deletarValor([1, 2, 3, 4], 1);

?>