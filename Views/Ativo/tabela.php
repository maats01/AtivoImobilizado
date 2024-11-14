<table>
    <tr>
        <th>ID</th>
        <th>Ativo</th>
        <th>Filial</th>
        <th>Setor</th>
        <th>Categoria</th>
        <th>Data cadastro</th>
        <th>Data aquisição</th>
        <th>Vida útil</th>
        <th>Condição</th>
        <th>Estado ativo</th>
        <th>Valor</th>
    </tr>
    <?php foreach ($ativos as $ativo) : ?>
        <tr>
            <td>
                <?php echo $ativo->getId(); ?>
            </td>
            <td>
                <?php echo $ativo->getDescricao(); ?>
            </td>
            <td>
                <?php echo $ativoService->nome_filial($ativo->getFilialId()); ?>
            </td>
            <td>
                <?php echo $ativoService->nome_setor($ativo->getSetorId()); ?>
            </td>
            <td>
                <?php echo $ativoService->nome_categoria($ativo->getCategoriaId()); ?>
            </td>
            <td>
                <?php echo traduz_data_para_exibir($ativo->getDataCadastro()); ?>
            </td>
            <td>
                <?php echo traduz_data_para_exibir($ativo->getDataAquisicao()); ?>
            </td>
            <td>
                <?php echo $ativo->getVidaUtil() . ' ano'; ?>
            </td>
            <td>
                <?php echo traduz_condicao_para_exibir($ativo->getCondicao()); ?>
            </td>
            <td>
                <?php echo $ativo->getEstadoAtivo() == 1 ? 'Ativo' : 'Baixado'; ?>
            </td>
            <td>
                <?php echo 'R$ ' . $ativo->getValor(); ?>
            </td>
            <td>
                <a href="?rota=ativo&edit_id=<?php echo $ativo->getId(); ?>">
                    Editar
                </a>
                <a href="?rota=ativo&delete_id=<?php echo $ativo->getId(); ?>" onclick="return confirmarRemocao()">
                    Remover
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>