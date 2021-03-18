<?php

$cidades = [
    1 => "Selecione a cidade",
    2 => "Jandira",
    3 => "Itapevi",
    4 => "Barueri",
    5 => "Osasco",
    6 => "Cotia",
    7 => "Santana de Parnaíba",
    8 => "Carapicuíba",
    9 => "São Paulo"
];

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css" />
    <title>Document</title>
</head>

<body>
    <form method="POST" action="processo.php">
        <div class="input-group">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        </div>
        <div class="input-group">
            <label>Selecione sua cidade</label>
            <select name="cidades" id="cidades" required>
                <?php
                foreach ($cidades as $b => $cidade) {
                ?>
                    <option valeu="<?= $b ?>"> <?= $cidade ?> </option>
                <?php
                }
                ?>
            </select>
        </div>
        <button>Enviar</button>
    </form>
</body>

</html>