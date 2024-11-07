<table>
    <tr>
        <th>Ativo</th>
        <th>Filial</th>
        <th>Setor</th>
        <th>Categoria</th>
        <th>Data_Cadastro</th>
        <th>Data_Aquisição</th>
        <th>Vida_Util</th>
        <th>Condição</th>
        <th>Estado_Ativo</th>
        <th>Valor</th>
    </tr>
    <?php foreach ($ativos as $ativo) : ?>
        <tr>
            <td>
                <a href="ativo.php?id=<?php echo $ativo->getId(); ?>">
                    <?php echo $ativo->getDescricao(); ?>
                </a>
            </td>
            <td>
                <?php echo $ativo->getFilialId(); ?>
            </td>
            <td>
                <?php echo $ativo->getSetorId(); ?>
            </td>
            <td>
                <?php echo $ativo->getCategoriaId(); ?>
            </td>
            <td>
                <?php echo traduz_data_para_exibir($ativo->getDataCadastro()); ?>
            </td>
            <td>
                <?php echo traduz_data_para_exibir($ativo->getDataAquisicao()); ?>
            </td>
            <td>
                <?php echo $ativo->getVidaUtil(); ?>
            </td>
            <td>
                <?php echo $ativo->getCondicao(); ?>
            </td>
            <td>
                <?php echo $ativo->getEstadoAtivo(); ?>
            </td>
            <td>
                <?php echo 'R$ ' . $ativo->getValor(); ?>
            </td>
            <td>
                <a href="?rota=ativo&edit_id=<?php echo $ativo->getId(); ?>">
                    Editar
                </a>
                <a href="?rota=ativo&delete_id=<?php echo $ativo->getId(); ?>">
                    Remover
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>