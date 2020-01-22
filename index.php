<?php
session_start();
include_once 'Header.php'; ?>

<div class="body-container">

    <?php

    $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'Home';

    switch ($pagina) {
        case 'Login':
            include_once 'View/Login.php';
            break;
        case 'Home':
            include_once 'View/Home.php';
            /* include_once 'view/teste.php';*/
            break;
        case 'Pacientes':
            include_once 'View/Paciente.php';
            break;
        case 'CadastroAtendente':
            include_once 'View/Atendente.php';
            break;
        case 'SalvarPaciente':
            include_once 'View/SalvarPaciente.php';
            break;
        default:
            include_once 'View/Home.php';
            /* include_once 'view/teste.php';*/
    }
    ?>

</div>

<?php include_once 'Footer.php'; ?>