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

    <?php

    if (isset($_POST["Enviar"])) {

        include "conexao_banco.php";

        $Nome   =  $_POST["Nome"];
        $Login  =  $_POST["Login"];
        $Senha  =  $_POST["Senha"];


        $sql = "insert into `atendente`(`ID`, `Nome`, `Login`, `Senha`) values 
('$Nome','$Login','$Senha')";

        if ($con->query($sql) === TRUE) {
            echo "<script>alert('Cadastro realizado com sucesso!.');</script>";
        } else {
            echo "<script>alert('Ocorreu algum erro! Seu cadastro não foi concluído com sucesso.');</script>";
            echo "Error deleting record: " . $con->error;
        }

        mysqli_close($con);
    }

    ?>

    <br><br>
    <a href='View/Home.php'><button>voltar</button></a>
</body>

</html>