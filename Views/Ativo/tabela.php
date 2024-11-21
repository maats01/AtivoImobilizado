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
        <th>Opções</th>
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
                <?php echo $ativoService->nomeFilial($ativo->getFilialId()); ?>
            </td>
            <td>
                <?php echo $ativoService->nomeSetor($ativo->getSetorId()); ?>
            </td>
            <td>
                <?php echo $ativoService->nomeCategoria($ativo->getCategoriaId()); ?>
            </td>
            <td>
                <?php echo traduzDataParaExibir($ativo->getDataCadastro()); ?>
            </td>
            <td>
                <?php echo traduzDataParaExibir($ativo->getDataAquisicao()); ?>
            </td>
            <td>
                <?php echo $ativo->getVidaUtil() . ' ano'; ?>
            </td>
            <td>
                <?php echo traduzCondicaoParaExibir($ativo->getCondicao()); ?>
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