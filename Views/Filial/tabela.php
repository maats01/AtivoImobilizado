<table>
    <tr>
        <th>Filial</th>
        <th>Cnpj</th>
        <th>Estado</th>
        <th>Cidade</th>
        <th>Bairro</th>
        <th>Rua</th>
        <th>Número</th>
    </tr>
    <?php foreach ($filiais as $filial) : ?>
        <tr>
            <td>
                <a href="filial.php?id=<?php echo $filial->getId(); ?>">
                    <?php echo $filial->getNome(); ?>
                </a>
            </td>
            <td>
                <?php echo $filial->getCnpj(); ?>
            </td>
            <td>
                <?php echo $filial->getEstado(); ?>
            </td>
            <td>
                <?php echo $filial->getCidade(); ?>
            </td>
            <td>
                <?php echo $filial->getBairro(); ?>
            </td>
            <td>
                <?php echo $filial->getRua(); ?>
            </td>
            <td>
                <?php echo $filial->getNumero(); ?>
            </td>
            <td>
                <a href="?rota=Filial&edit_id=<?php echo $filial->getId(); ?>">
                    Editar
                </a>
                <a href="?rota=Filial&delete_id=<?php echo $filial->getId(); ?>">
                    Remover
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>