<?php

function retorno (array $vetor) {

    echo "<h1>Como estava: </h1>";
    print_r($vetor);
    echo "<br></br>";
    echo "<h1>Retornou: </h1>";
    
    foreach ($vetor as $a => $b) {
        $chaves = $a;
    }
    return $chaves;
}
print_r(retorno([8, 4, 15, 24]));
?>