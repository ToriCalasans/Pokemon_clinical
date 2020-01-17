<!DOCTYPE html>
<!--para fazer automatico, html:5 -->
<!--O atalho para indentar no Visual Studio Code pelo Windows é Shift + Alt + F-->
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/Estilo.css">
    <!--escreve link  e escolhe o link: css-->
</head>

<body>

    <header>
        <div class="container cabecalho">
            <img id="img-logo" src="Img/pokebola.png" alt="Logo">
            <span id="Nome-logo">Centro Pokemon IFS </span>

            <div class="menu">

                <?php if (isset($_SESSION['usuario_fez_login'])) { ?>
                    <a href=""><button id="Nome_botao" class="botao">Cadastrar paciente</button></a>
                    <a href=""><button id="Nome_botao" class="botao">Cadastrar médico</button></a>
                    <a href=""><button id="Nome_botao" class="botao">Cadastrar atendente</button></a>
                    <a href="?pagina=login"><button id="Nome_botao" class="botao">Registrar consulta</button></a>
                    <a href="sair.php"><button id="Nome_botao" class="botao">Sair</button></a>

                <?php } else { ?>
                    <a href="?pagina=login"><button id="Nome_botao" class="botao">Login</button></a>
                <?php }  ?>

            </div>
        </div>

        <!--<span class="texto">Centro pokemon</span>-->
    </header>