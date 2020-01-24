<?php
require 'Src/Consulta/Pesquisar_ID.php';
require 'Src/Paciente/Listar.php';
require 'Src/Medico/Listar.php';
?>

<div class="container">
    <h2>Salvar consulta</h2>


    <form action="Src/Consulta/Salvar.php" method="POST">
        <?php if (isset($_GET['ID'])) { ?>
            <input type="hidden" name="ID" value="<?= $_GET['ID'] ?> ">
        <?php } ?>

        <div class="form-group">
            <label for="input_Data_Consulta">Data de agendamento</label>
            <input value="<?= $Consulta['Data_Consulta'] ?>" type="date" class="form-control" required name="Data_Consulta" id="Input_Data_Consulta">
        </div>

        <div class="form-group">
            <label for="select_Paciente">Pacientes</label>
            <select class="form-control" name="ID_Paciente" id="select_Paciente">

                <?php while ($Paciente = mysqli_fetch_assoc($Tabela_Pacientes)) { ?>
                    <option value="<?= $Paciente['ID'] ?>"><?= $Paciente['Nome'] ?></option>
                <?php } ?>

            </select>
        </div>
        
        <div class="form-group">
            <label for="select_Medico">Medicos</label>
            <select class="form-control" name="ID_Medico" id="select_Medico">

                <?php while ($Medico = mysqli_fetch_assoc($Tabela_Medicos)) { ?>
                    <option value="<?= $Medico['ID'] ?>"><?= $Medico['Nome'] ?></option>
                <?php } ?>

            </select>
        </div>
        

        <?php if (isset($_GET['erro'])) { ?>
            <span class="error"><?php echo $_GET['erro'] ?></span>
        <?php } ?>

        <div class="d-flex justify-content-center">
            <input class="btn btn-success mx-auto" type="submit" value="Salvar">
        </div>
    </form>
</div>