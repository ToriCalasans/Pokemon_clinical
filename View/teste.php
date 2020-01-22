<?php
if (isset($_SESSION['usuario_fez_login'])) {
?>
    <h1>Bem vindo, <?php echo $_SESSION['nome_usuario'] ?></h1>
<?php } else { ?>
    <h1>Bem vindo à Clínica Umbrella!</h1>
<?php } ?>
<!----------------------------------------------------------------------------------------------------------------------------->
<hr>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <img  src="Img/Carvalho.png" alt="Professor Carvalho">
        <div class="carousel-caption d-none d-md-block">
            <h1>Professor Carvalho</h1>
            <p>Texto sobre ele</p>
        </div>
        <img  src="Img/Professor_Elm.png" alt="Professor Elm">
        <div class="carousel-caption d-none d-md-block">
            <h1>Professor Elm</h1>
            <p>Texto sobre ele</p>
        </div>
        <img  src="Img/Professor_Birch.png" alt="Professor Birch">
        <div class="carousel-caption d-none d-md-block">
            <h1>Professor Birch</h1>
            <p>Texto sobre ele</p>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="carousel-item">
    <img src="..." alt="...">
    <div class="carousel-caption d-none d-md-block">
        <h5>...</h5>
        <p>...</p>
    </div>
</div>
<!---------------------------------------------------------------------------------------------------------------------------->
<script>
    let deg = 0;
    let img_home = document.getElementById("img-home")

    // Faz o javascript esperar por uma certa quantidade de milisegundos
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    (async function girarImagem() {
        img_home.style.transform = `rotate(${deg}deg)`
        deg = deg >= 360 ? 0 : deg + 1
        await sleep(10)
        girarImagem()
    })()
</script>