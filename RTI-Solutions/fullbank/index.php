<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fulbank</title>
  <link rel="stylesheet" href="../styles-global.css" />
</head>

<body>
  <form method="GET" action="acrescimo.php">
    <h1>Fulbank</h1>
    
    <div class="input-group">
      <label for="nome">Nome</label>
      <input type="text" name="nome" id="nome" required/>
    </div>

    <div class="input-group">
      <label for="salario">Informar Salário Atual</label>
      <input type="number" name="salario" id="salario" required/>
    </div>

    <button>Enviar</button>
  </form>
</body>
</html>