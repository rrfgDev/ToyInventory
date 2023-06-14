<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de Usuário</title>
  <link rel="stylesheet" type="text/css" href="./Paginas - master/css/style.css">
</head>
<body>
  <h1>Cadastro de Usuário</h1>
  <form id="cadastro-form">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required><br>

    <label for="nome-login">Nome de Login:</label>
    <input type="text" id="nome-login" name="nome-login" required><br>

    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="contato">Contato:</label>
    <input type="text" id="contato" name="contato" required><br>

    <button type="submit">Cadastrar</button>
  </form>

<script src="https://www.gstatic.com/firebasejs/9.22.2/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.22.2/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.22.2/firebase-firestore.js"></script>
<script src="./Paginas - master/scripts/firebase-config.js"></script>
<script src="./Paginas - master/scripts/cadastro.js"></script>
</body>
</html>
