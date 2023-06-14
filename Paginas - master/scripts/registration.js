// Referência para o serviço de autenticação do Firebase
const auth = firebase.auth();

// Lidar com o envio do formulário de registro
const form = document.getElementById("registration-form");
form.addEventListener("submit", function(event) {
  event.preventDefault();

  // Obter os valores do formulário
  const username = document.getElementById("username").value;
  const password = document.getElementById("password").value;
  const name = document.getElementById("name").value;
  const contact = document.getElementById("contact").value;

  // Criar um novo usuário com e-mail e senha
  auth.createUserWithEmailAndPassword(username, password)
    .then((userCredential) => {
      // Obter o usuário recém-registrado
      const user = userCredential.user;

      // Atualizar o perfil do usuário com o nome e contato
      return user.updateProfile({
        displayName: name,
        contact: contact
      });
    })
    .then(() => {
      // Registro bem-sucedido, redirecionar para a página de login
      window.location.href = "login.php";
    })
    .catch((error) => {
      // Lidar com erros durante o registro
      console.error(error);
      alert("Erro ao registrar o usuário. Verifique os dados e tente novamente.");
    });
});
