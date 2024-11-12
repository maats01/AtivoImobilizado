<table>
    <tr>
        <th>ID</th>
        <th>Ativo</th>
        <th>Filial origem</th>
        <th>Setor origem</th>
        <th>Filial destino</th>
        <th>Setor destino</th>
        <th>Data transferência</th>
    </tr>
    <?php foreach ($transferencias as $transf) : ?>
        <tr>
            <td>
                <?php echo $transf->getId(); ?>
            </td>
            <td>
                <?php echo $transfService->nome_ativo($transf->getIdAtivo()); ?>
            </td>
            <td>
                <?php echo $transfService->nome_filial($transf->getIdFilialOrigem()); ?>
            </td>
            <td>
                <?php echo $transfService->nome_setor($transf->getIdSetorOrigem()); ?>
            </td>
            <td>
                <?php echo $transfService->nome_filial($transf->getIdFilialDestino()); ?>
            </td>
            <td>
                <?php echo $transfService->nome_setor($transf->getIdSetorDestino()); ?>
            </td>
            <td>
                <?php echo traduz_data_para_exibir($transf->getData()); ?>
            </td>
            <td>
                <a href="?rota=Transferencia&edit_id=<?php echo $transf->getId(); ?>">
                    Editar
                </a>
                <a href="?rota=Transferencia&delete_id=<?php echo $transf->getId(); ?>">
                    Remover
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>