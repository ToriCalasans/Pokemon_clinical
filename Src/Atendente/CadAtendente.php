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