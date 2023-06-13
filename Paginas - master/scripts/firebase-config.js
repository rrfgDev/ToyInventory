 // Your web app's Firebase configuration
 const firebaseConfig = {
  apiKey: "AIzaSyClD3I2uJXPElH4L7GWP2Y4LKo17Z-S6Xg",
  authDomain: "toyinventory1-82627.firebaseapp.com",
  databaseURL: "https://toyinventory1-82627-default-rtdb.firebaseio.com",
  projectId: "toyinventory1-82627",
  storageBucket: "toyinventory1-82627.appspot.com",
  messagingSenderId: "291801727957",
  appId: "1:291801727957:web:48d0b0097b9662b71eb35c"
};
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  // Referência para o banco de dados do Firebase
  const database = firebase.database();

  // Lidar com o envio do formulário de inserção
  const form = document.getElementById("item-form");
  form.addEventListener("submit", function(event) {
    event.preventDefault();

    // Obter os valores do formulário
    const id = document.getElementById("id").value;
    const nome = document.getElementById("nome").value;
    const marca = document.getElementById("marca").value;
    const quantidade = document.getElementById("quantidade").value;
    const estado = document.getElementById("estado").value;

    // Criar um novo objeto de item
    const newItem = {
      id: id,
      nome: nome,
      marca: marca,
      quantidade: quantidade,
      estado: estado
    };

    // Inserir o item no banco de dados
    database.ref("itens").push(newItem)
      .then(() => {
        // Limpar os campos do formulário após a inserção
        form.reset();
      })
      .catch((error) => {
        console.log("Erro ao inserir item:", error);
      });
  });