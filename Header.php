<!DOCTYPE html>
<!--para fazer automatico, html:5 -->
<!--O atalho para indentar no Visual Studio Code pelo Windows é Shift + Alt + F-->
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/Estilo.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
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
                    <a href="?pagina=CadastroAtendente"><button id="Nome_botao" class="botao">Cadastrar atendente</button></a>
                    <a href=""><button id="Nome_botao" class="botao">Registrar consulta</button></a>
                    <a href="sair.php"><button id="Nome_botao" class="botao">Sair</button></a>

                <?php } else { ?>
                    <a href="?pagina=Login"><button id="Nome_botao" class="botao">Login</button></a>
                <?php }  ?>

            </div>
        </div>

        <!--<span class="texto">Centro pokemon</span>-->
    </header>