<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seneletro</title>
  <link rel="stylesheet" href="../styles-global.css" />
</head>

<body>
  <form method="GET" action="calculoQuilo.php">
    <h1>Calculo conta de luz</h1>
    
    <div class="input-group">
      <label for="nome">Nome completo </label>
      <input type="text" name="nome" required/>
    </div>

    <div class="input-group">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco">
    </div>

    <div class="input-group">
        <label for="numero">Numero</label>
        <input type="number" name="numero" required>
    </div>
    
    <div class="input-group">
      <label for="quilowhatts">Consumo em Quilowatts-hora</label>
      <input type="number" name="quilowhatts" required/>
    </div>

    <button>Enviar</button>
  </form>
</body>

</html>