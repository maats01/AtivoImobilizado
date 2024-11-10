<table>
    <tr>
        <th>ID</th>
        <th>Setor</th>
    </tr>
    <?php foreach ($setores as $setor) : ?>
        <tr>
            <td>
                <?php echo $setor->getId(); ?>
            </td>
            <td>
                <?php echo $setor->getDescricao(); ?>
            </td>
            <td>
                <a href="?rota=Setor&edit_id=<?php echo $setor->getId(); ?>">
                    Editar
                </a>
                <a href="?rota=Setor&delete_id=<?php echo $setor->getId(); ?>">
                    Remover
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>