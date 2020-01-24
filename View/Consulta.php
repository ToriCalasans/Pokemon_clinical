<?php require 'Src/Consulta/Listar.php'; ?>

</br>
</br>
</br>
<table class="table table-bordered table-hover table-striped " style="width : 100%; " id="Tabela_Consultas">
    <caption>
    <a class="btn btn-success" href="?pagina=Salvar_Consulta">Cadastrar</a>


   </caption>
    <!-- 
    linha  = table roll = tr
    titulo = table head = th
    coluna = Table data = td 
-->
    <thead class="bg-info">
        <tr>
            <th>Data de Agendamento</th>
            <th>Data da consulta</th>
            <th>Paciente</th>
            <th>Médico</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>


        <?php while ($Linha = mysqli_fetch_assoc($Tabela_Consultas)) { ?>

            <!-- -->
            <tr>
                <th><?= $Linha['Data_Agendamento']   ?></th>
                <th><?= $Linha['Data_Consulta'] ?></th>
                <th><?= $Linha['Nome_Paciente']  ?></th>
                <th><?= $Linha['Nome_Medico']  ?></th>
                <td>
                    <a href="?pagina=Salvar_Consulta&ID=<?= $Linha['ID'] ?>">Editar</a>
                    |
                    <a href="Src/Consulta/Excluir.php?ID=<?= $Linha['ID'] ?>">Excluir</a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>