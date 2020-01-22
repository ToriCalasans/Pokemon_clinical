<?php
include "conexao_banco.php";
$Login = isset($_POST['login']) ? $_POST['login'] : "";
$Senha = isset($_POST['senha']) ? md5($_POST['senha']) : "";

$sql = "SELECT * FROM `atendente` 
        WHERE Login = '$Login' AND Senha = '$Senha';";

$result = mysqli_query($con, $sql);
//prepara o ambiente:inicia a sessão e formata os dados do usuário
if (mysqli_num_rows($result) == 1) {
    session_start();
    // transfrma $result num array associativo
    $usuario = mysqli_fetch_assoc($result);

    //salva as informações do usuário
    $_SESSION['usuario_fez_login'] = true;
    $_SESSION['nome_usuario'] = $usuario['Nome'];


    //Fecha a conexão com o banco e recirecionar
    mysqli_close($con);
    header('location: http://localhost/Pokemon_clinical/index.php?pagina=Home');
} else {
    header('location: http://localhost/Pokemon_clinical/index.php?pagina=Login&erro=Login ou senha invalidos');
}
