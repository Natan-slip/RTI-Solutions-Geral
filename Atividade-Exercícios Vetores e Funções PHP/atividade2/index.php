<?php

    function nomes (array $nome, $nomeEspecifico) {

        foreach($nome as $nome) {
            
            if($nome == $nomeEspecifico){
                $b = "true";
            }    
            else if ($nome != $nomeEspecifico) {

                $b = "false";
            }

        }
        echo "<h1>$b</h1>";

    }
    nomes(["João", "Lays", "Brayan"], "Brayan");
?>