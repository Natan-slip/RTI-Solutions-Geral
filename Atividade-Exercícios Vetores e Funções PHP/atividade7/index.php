<?php

    function retornarMaiorMenor (array $vetor) {
        $maior = 0;
        $menor = $vetor;

        echo "<h1>Como estava: </h1>";
        print_r($vetor);
        echo "<br></br>";
        echo "<h1>Retornou: </h1>";

        foreach($vetor as $a => $b) {

            if($b > $maior) {
                $maior = $b;
            }
            else if($b < $menor) {
                $menor = $b;
            }
        }
        return $exibir = [$maior, $menor];
    }

    print_r(retornarMaiorMenor([17, 2, 25, 2002]));
?>