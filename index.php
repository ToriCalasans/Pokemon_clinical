<?php 
session_start();
include_once 'Header.php'; ?>

<div class="body-container">

<?php

    $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 'home';

    switch ($pagina) {
        case 'login':
            include_once 'view/Login.php';
            break;
        case 'home':
            include_once 'view/Home.php';
            break;
        default:
            include_once 'view/Home.php';
    }
    ?>

</div>

<?php include_once 'Footer.php'; ?>