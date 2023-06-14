document.getElementById("cadastro-form").addEventListener("submit", function(event) {
  event.preventDefault();

  const nome = document.getElementById("nome").value;
  const nomeLogin = document.getElementById("nome-login").value;
  const senha = document.getElementById("senha").value;
  const email = document.getElementById("email").value;
  const contato = document.getElementById("contato").value;

  firebase.auth().createUserWithEmailAndPassword(email, senha)
    .then((userCredential) => {
      const user = userCredential.user;

      const db = firebase.firestore();
      db.collection("usuarios").doc(user.uid).set({
        nome: nome,
        nomeLogin: nomeLogin,
        email: email,
        contato: contato
      })
      .then(() => {
        console.log("Cadastro realizado com sucesso!");
        window.location.href = "outra-pagina.html";
      })
      .catch((error) => {
        console.log("Erro ao salvar informações do usuário:", error.message);
      });
    })
    .catch((error) => {
      console.log("Erro ao cadastrar usuário:", error.message);
    });
});
