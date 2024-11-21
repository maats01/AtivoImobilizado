<table>
    <tr>
        <th>ID</th>
        <th>Ativo</th>
        <th>Filial origem</th>
        <th>Setor origem</th>
        <th>Filial destino</th>
        <th>Setor destino</th>
        <th>Data transferência</th>
        <th>Opções</th>
    </tr>
    <?php foreach ($transferencias as $transf) : ?>
        <tr>
            <td>
                <?php echo $transf->getId(); ?>
            </td>
            <td>
                <?php echo $transfService->nomeAtivo($transf->getIdAtivo()); ?>
            </td>
            <td>
                <?php echo $transfService->nomeFilial($transf->getIdFilialOrigem()); ?>
            </td>
            <td>
                <?php echo $transfService->nomeSetor($transf->getIdSetorOrigem()); ?>
            </td>
            <td>
                <?php echo $transfService->nomeFilial($transf->getIdFilialDestino()); ?>
            </td>
            <td>
                <?php echo $transfService->nomeSetor($transf->getIdSetorDestino()); ?>
            </td>
            <td>
                <?php echo traduzDataParaExibir($transf->getData()); ?>
            </td>
            <td>
                <a href="?rota=Transferencia&edit_id=<?php echo $transf->getId(); ?>">
                    Editar
                </a>
                <a href="?rota=Transferencia&delete_id=<?php echo $transf->getId(); ?>" onclick="return confirmarRemocao()">
                    Remover
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>