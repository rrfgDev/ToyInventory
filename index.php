<!DOCTYPE html>
<html>
<head>
  <title>Registro de Usuário</title>
  <link rel="stylesheet" type="text/css" href="./Paginas - master/css/style.css">
</head>
<body>
  <h1>Registro de Usuário</h1>
  <form id="registration-form" action="">
    <label for="username">Usuário:</label>
    <input type="text" id="username" name="username" required><br>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required><br>

    <label for="name">Nome:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="contact">Contato:</label>
    <input type="text" id="contact" name="contact" required><br>

    <button type="submit">Registrar</button>
  </form>

  <script src="https://www.gstatic.com/firebasejs/9.22.2/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/9.22.2/firebase-auth.js"></script>
  <script src="./Paginas - master/scripts/firebase-config.js"></script>
  <script src="./Paginas - master/scripts/registration.js"></script>
</body>
</html>
