<?php

function inversao ($vetor) {
        $fraseInvertida = [];
    
        for ($b= (count($vetor) - 1); $b >= 0; $b--) { 
            $fraseInvertida[] = $vetor[$b];
        }

        return  implode(" ", $fraseInvertida);  

        inversao(["Olá", 1, 2, "Trinta"]);
    }
?>

 <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" /> 
    <title>Atividade 3</title>
</head>
<body>
    <form method="POST" action="">
        <h1>Inversão</h1>
        <div class="input-group">
            <label for="inversao">Frase invertida</label>
            <?php echo "<input type='text' readonly value='".inversao(["Olá", 1, 2, "Trinta"])."' />" ?>
        </div>
    </form>
</body>
</html> 