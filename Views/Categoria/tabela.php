<table>
    <tr>
        <th>ID</th>
        <th>Categoria</th>
    </tr>
    <?php foreach ($categorias as $categoria) : ?>
        <tr>
            <td>
                <?php echo $categoria->getId(); ?>
            </td>
            <td>
                <?php echo $categoria->getDescricao(); ?>
            </td>
            <td>
                <a href="?rota=Categoria&edit_id=<?php echo $categoria->getId(); ?>">
                    Editar
                </a>
                <a href="?rota=Categoria&delete_id=<?php echo $categoria->getId(); ?>">
                    Remover
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>