<?php require 'Src/Paciente/Pesquisar_ID.php'; ?>
<div class="container">
    <h2>Salvar paciente</h2>


    <form action="Src/Paciente/Salvar.php" method="POST">
        <?php if(isset($_GET['ID'])){?>
        <input type="hidden" name="ID" value= "<?= $_GET['ID'] ?> ">
        <?php } ?>

        <div class="form-group">
            <label for="input_login">Nome</label>
            <input value="<?= $Paciente['Nome'] ?>" type="text" class="form-control"  required type="text" name="Nome" id="Input_Nome">
        </div>

        <div class="form-group">
            <label for="input_login">Data de nascimento</label>
            <input value="<?= $Paciente['Nascimento'] ?>" class="form-control" type="date" required type="text" name="Nascimento" id="Input_Nascimento">
        </div>

        <div class="form-group">
            <label for="input_login">CPF</label>
            <input value="<?= $Paciente['CPF'] ?>" type="text" class="form-control"  required type="text" name="CPF" id="Input_CPF">
        </div>

        <?php if (isset($_GET['erro'])) { ?>
            <span class="error"><?php echo $_GET['erro'] ?></span>
        <?php } ?>

        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto" type="submit" value="Salvar">
        </div>
    </form>
</div>