<!DOCTYPE html>
<html>
<head>
  <title>Tela de Login</title>
  <link rel="stylesheet" type="text/css" href="./Paginas - master/css/style.css">
</head>
<body>
  <h1>Tela de Login</h1>
  <form id="login-form">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Senha:</label>
    <input type="password" id="password" name="password" required><br>

    <button type="submit">Entrar</button>
  </form>

<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.0/firebase-auth.js"></script>
<script src="./Paginas - master/scripts/firebase-config.js"></script>
<script src="./Paginas - master/scripts/login.js"></script>

</body>
</html>
