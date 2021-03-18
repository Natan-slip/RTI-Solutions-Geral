<?php

    function media (array $notas) {

        $mediaDasNotas = 0;

        echo "<h1>Notas: </h1>";
        print_r($notas);
        echo "<br></br>";
        echo "<h1>Média: </h1>";

        foreach($notas as $b) {
            $mediaDasNotas = $mediaDasNotas + $b;
        }

        return $mediaDasNotas/count($notas);
    }
    print_r(media([5, 8, 8, 10]));
?>