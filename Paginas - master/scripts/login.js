document.getElementById("login-form").addEventListener("submit", function(event) {
    event.preventDefault();
  
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
  
    firebase.auth().signInWithEmailAndPassword(email, password)
      .then((userCredential) => {
        window.location.href = "outra-pagina.html";
      })
      .catch((error) => {
        console.log("Erro de login:", error.message);
        document.getElementById("login-error").innerText = "Usuário não encontrado.";
      });
  });
  