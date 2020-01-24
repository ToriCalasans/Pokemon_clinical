<?php require 'Src/Medico/Pesquisar_ID.php'; ?>
<div class="container">
    <h2>Salvar Médicos</h2>


    <form action="Src/Medico/Salvar.php" method="POST">
        <?php if(isset($_GET['ID'])){?>
        <input type="hidden" name="ID" value= "<?= $_GET['ID'] ?> ">
        <?php } ?>

        <div class="form-group">
            <label for="input_login">Nome</label>
            <input value="<?= $Medico['Nome'] ?>" type="text" class="form-control"  required type="text" name="Nome" id="Input_Nome">
        </div>

        <div class="form-group">
            <label for="input_login">Área de atuação</label>
            <input value="<?= $Medico['Area'] ?>" class="form-control" type="text" required type="text" name="Area" id="Input_Area">
        </div>

        <div class="form-group">
            <label for="input_login">Email</label>
            <input value="<?= $Medico['Email'] ?>" type="text" class="form-control"  required type="text" name="Email" id="Input_Email">
        </div>

        <?php if (isset($_GET['erro'])) { ?>
            <span class="error"><?php echo $_GET['erro'] ?></span>
        <?php } ?>

        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto" type="submit" value="Salvar">
        </div>
    </form>
</div>