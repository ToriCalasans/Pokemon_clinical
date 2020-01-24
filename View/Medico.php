<?php require 'Src/Medico/Listar.php'; ?>

</br>
</br>
</br>
<table class="table table-bordered table-hover table-striped " style="width : 100%; " id="Tabela_Medicos">
    <caption>
    <a class="btn btn-success" href="?pagina=Salvar_Medico">Cadastrar</a>


   </caption>
    <!-- 
    linha  = table roll = tr
    titulo = table head = th
    coluna = Table data = td 
-->
    <thead class="bg-info">
        <tr>
            <th>Nome</th>
            <th>Área de atuação</th>
            <th>E-mail</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>


        <?php while ($Linha = mysqli_fetch_assoc($Tabela_Medicos)) { ?>

            <!-- -->
            <tr>
                <th><?= $Linha['Nome']   ?></th>
                <th><?= $Linha['Area'] ?></th>
                <th><?= $Linha['Email']  ?></th>
                <td>
                    <a href="?pagina=Salvar_Medico&ID=<?= $Linha['ID'] ?>">Editar</a>
                    |
                    <a href="Src/Medico/Excluir.php?ID=<?= $Linha['ID'] ?>">Excluir</a>
                </td>
            </tr>

        <?php } ?>
    </tbody>
</table>