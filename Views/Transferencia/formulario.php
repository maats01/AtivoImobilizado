<script>
    const filialSetores = <?php echo json_encode($setores_filial); ?>;
    document.addEventListener('DOMContentLoaded', function () {
    const filialOrigemSelect = document.querySelector('select[name="filial_origem_id"]');
    const setorOrigemSelect = document.querySelector('select[name="setor_origem_id"]');
    const filialDestinoSelect = document.querySelector('select[name="filial_destino_id"]');
    const setorDestinoSelect = document.querySelector('select[name="setor_destino_id"]');

    function updateSetorOptions(filialSelect, setorSelect) {
        const filialId = filialSelect.value;
        setorSelect.innerHTML = '<option value=""></option>'; // Limpar opções anteriores

        if (filialSetores[filialId]) {
            filialSetores[filialId].forEach(setor => {
                const option = document.createElement('option');
                option.value = setor.id;
                option.textContent = setor.descricao;
                setorSelect.appendChild(option);
            });
        }
    }

    filialOrigemSelect.addEventListener('change', function () {
        updateSetorOptions(filialOrigemSelect, setorOrigemSelect);
    });

    filialDestinoSelect.addEventListener('change', function () {
        updateSetorOptions(filialDestinoSelect, setorDestinoSelect);
    });
});
</script>

<form method="post">
    <fieldset>
        <legend>Nova transferência</legend>
        <label>
            Ativo:
            <select name="ativo_id" required>
                <option value=""></option>
                <?php foreach ($ativos as $ativo): ?>
                    <option value="<?php echo $ativo->getId(); ?>"
                        <?php echo isset($transf) && $transf->getIdAtivo() == $ativo->getId() ? 'selected' : '' ?>>
                        <?php echo $ativo->getDescricao(); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>

        <label>
            Filial de origem:
            <select name="filial_origem_id" required>
                <option value=""></option>
                <?php foreach ($filiais as $filial): ?>
                    <option value="<?php echo $filial->getId(); ?>"
                        <?php echo isset($transf) && $transf->getIdFilialOrigem() == $filial->getId() ? 'selected' : '' ?>>
                        <?php echo $filial->getNome(); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>

        <label>
            Setor de origem:
            <select name="setor_origem_id" required>
                <option value=""></option>
                <?php foreach ($setores as $setor): ?>
                    <option value="<?php echo $setor->getId(); ?>"
                    <?php echo isset($transf) && $transf->getIdSetorOrigem() == $setor->getId() ? 'selected' : '' ?>>
                        <?php echo $setor->getDescricao(); ?>
                    </option>
                <?php endforeach;?>
            </select>
        </label>

        <label>
            Filial de destino:
            <select name="filial_destino_id" required>
                <option value=""></option>
                <?php foreach ($filiais as $filial): ?>
                    <option value="<?php echo $filial->getId(); ?>"
                        <?php echo isset($transf) && $transf->getIdFilialDestino() == $filial->getId() ? 'selected' : '' ?>>
                        <?php echo $filial->getNome(); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>

        <label>
            Setor de destino:
            <select name="setor_destino_id" required>
                <option value=""></option>
                <?php foreach ($setores as $setor): ?>
                    <option value="<?php echo $setor->getId(); ?>"
                    <?php echo isset($transf) && $transf->getIdSetorDestino() == $setor->getId() ? 'selected' : '' ?>>
                        <?php echo $setor->getDescricao(); ?>
                    </option>
                <?php endforeach;?>
            </select>
        </label>

        <label>
            Data da transferência:
            <input type="date" name="data" value="<?php echo $transf->getData() ? $transf->getData()->format('Y-m-d') : ''; ?>" required>
        </label>

        <input type="submit" value="Enviar">
    </fieldset>
</form>