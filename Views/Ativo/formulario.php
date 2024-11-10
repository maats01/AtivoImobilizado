<form method="post">
    <fieldset>
        <legend>Novo ativo</legend>
        <label>
            Descrição:
            <input type="text" name="descricao" value="<?php echo htmlentities($ativo->getDescricao()); ?>">
        </label>

        <label>
            Filial:
            <select name="filial">
                <option value=""></option>
                <?php foreach ($formData['filiais'] as $filial) : ?>
                    <option value="<?php echo $filial->getId(); ?>"
                        <?php echo isset($ativo) && $ativo->getFilialId() == $filial->getId() ? 'selected' : ''; ?>>
                        <?php echo $filial->getNome(); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>

        <label>
            Setor:
            <select name="setor">
                <option value=""></option>
                <?php foreach ($formData['setores'] as $setor) : ?>
                    <option value="<?php echo $setor->getId(); ?>"
                        <?php echo isset($ativo) && $ativo->getSetorId() == $setor->getId() ? 'selected' : ''; ?>>
                        <?php echo $setor->getDescricao(); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>

        <label>
            Categoria:
            <select name="categoria">
                <option value=""></option>
                <?php foreach ($formData['categorias'] as $categoria) : ?>
                    <option value="<?php echo $categoria->getId(); ?>"
                        <?php echo isset($ativo) && $ativo->getCategoriaId() == $categoria->getId() ? 'selected' : ''; ?>>
                        <?php echo $categoria->getDescricao(); ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </label>

        <label>
            Data de Aquisição:
            <input type="date" name="data_aquisicao" value="<?php echo $ativo->getDataAquisicao() !== '' ? $ativo->getDataAquisicao()->format('Y-m-d') : ''; ?>">
        </label>

        <label>
            Vida Útil:
            <input type="text" name="vida_util" value="<?php echo $ativo->getVidaUtil() !== 0 ? htmlentities($ativo->getVidaUtil()) : ''; ?>">
        </label>

        <label>
            Condição:
            <select name="condicao">
                <option value=""></option>
                <option value="1" <?php echo isset($ativo) && $ativo->getCondicao() === 1 ? 'selected' : ''; ?>>Excelente</option>
                <option value="2" <?php echo isset($ativo) && $ativo->getCondicao() === 2 ? 'selected' : ''; ?>>Bom</option>
                <option value="3" <?php echo isset($ativo) && $ativo->getCondicao() === 3 ? 'selected' : ''; ?>>Regular</option>
                <option value="4" <?php echo isset($ativo) && $ativo->getCondicao() === 4 ? 'selected' : ''; ?>>Ruim</option>
                <option value="5" <?php echo isset($ativo) && $ativo->getCondicao() === 5 ? 'selected' : ''; ?>>Péssimo</option>
            </select>
        </label>

        <div>
            <label>Estado do Ativo:</label>
            <label><input type="radio" name="estado_ativo" value="1" <?php echo isset($ativo) && $ativo->getEstadoAtivo() == 1 ? 'checked' : '' ?>> Ativo</label>
            <label><input type="radio" name="estado_ativo" value="0" <?php echo isset($ativo) && $ativo->getEstadoAtivo() == 0 ? 'checked' : '' ?>> Inativo</label>
        </div>

        <label>
            Valor:
            <input type="number" name="valor" value="<?php echo $ativo->getValor() !== 0.0 ? htmlentities($ativo->getValor()) : ''; ?>">
        </label>

        <input type="submit" value="Enviar">
    </fieldset>
</form>