<?php
session_start();
include_once 'Header.php'; ?>

<div class="body-container">

    <?php

    $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'Home';

    switch ($pagina) {
        case 'Login':
            include_once 'view/Login.php';
            break;
        case 'Home':
           include_once 'view/Home.php';
          /* include_once 'view/teste.php';*/
            break;
        case 'CadastroAtendente':
            include_once 'view/CadastroAtendente.php';
            break;
        default:
           include_once 'view/Home.php';
           /* include_once 'view/teste.php';*/
    }
    ?>

</div>

<?php include_once 'Footer.php'; ?>
