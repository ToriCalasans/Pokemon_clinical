<?php
if (isset($_SESSION['usuario_fez_login'])) {
?>
    <h1>Bem vindo, <?php echo $_SESSION['nome_usuario'] ?></h1>
<?php } else { ?>
    <h1>Bem vindo à Clínica Umbrella!</h1>
<?php } ?>
<!----------------------------------------------------------------------------------------------------------------------------->
<hr>
<div class="grade">
    <img id="img-home" src="img/pokeball.png" alt="Umbrella">


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="Img/Carvalho.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Professor Carvalho</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Img/Professor_Elm.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="Img/Professor_Birch.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

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