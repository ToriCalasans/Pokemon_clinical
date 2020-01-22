<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <title>Cadastro de atendentes</title>
</head>


<body>

    <form action="CadastroAtendente.php" method="post">

        <label for="Nome" class="alin">Nome:</label>
        <input type="text" name="Nome" required>

        <br />

        <label for="Login" class="alin">Login:</label>
        <input type="text" name="Login" required>

        <br />

        <label for="Senha" class="alin">Senha:</label>
        <input type="password" name="Senha" id="password" required>

        <br />

        <label for="ConfLogin" class="alin">Confirme sua senha:</label>
        <input type="password" name="ConfLogin" id="confirm_password" required>

    
<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Senhas diferentes!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

        <br />
        <br />
        <input type="submit" name="Enviar" value="Cadastrar atendente" class="ali">

    </form>


    <br><br>
    <a href='View/Home.php'><button>voltar</button></a>
</body>

</html>