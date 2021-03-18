<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conversão de </title>
  <link rel="stylesheet" href="../styles-global.css" />
</head>

<body>
  <form method="GET" action="conversor.php">
    <h1>Conversão Monetária</h1>
    
    <div class="input-group">
      <label for="valor">Informar o valor em real</label>
      <input type="number" name="valor" id="valor" required/>
    </div>

    <div class="input-group">
      <label for="selecionar">Selecionar Euro ou Dolar: </label>

      <select name="conversor">
        <option value="euro">Euro</option>
        <option value="dolar">Dolar</option>
      </select>  
    </div>

    <button>Enviar</button>
  </form>
</body>
</html>