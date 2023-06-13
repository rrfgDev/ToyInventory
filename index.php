
<!DOCTYPE html>
<html>
<head>
  <title>Inserir Item</title>
  <link rel="stylesheet" type="text/css" href="./Paginas - master/css/style.css">
</head>
<body>
  <h1>Inserir Item</h1>
  <form id="item-form" action="">
    <label for="id">ID:</label>
    <input type="text" id="id" name="id" required><br>

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>

    <label for="marca">Marca:</label>
    <input type="text" id="marca" name="marca" required><br>

    <label for="quantidade">Quantidade:</label>
    <input type="number" id="quantidade" name="quantidade" required><br>

    <label for="estado">Estado:</label>
    <select id="estado" name="estado" required>
      <option value="Bom">Bom</option>
      <option value="Ruim">Ruim</option>
    </select><br>

    <button type="submit">Inserir</button>
  </form>

<!-- Firebase -->
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-database.js"></script>
<script src="./Paginas - master/scripts/firebase-config.js"></script>
</body>
</html>
