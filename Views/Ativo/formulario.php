<form method="post">
    <fieldset>
        <legend>Novo ativo</legend>
        <label>
            Descrição: 
            <input type="text" name="descricao" value="<?php echo isset($ativo)? htmlentities($ativo->getDescricao()) : ''; ?>">
        </label>

        <label>
            Filial:
            <select name="filial">
                <option value="">Selecione uma filial</option>
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
            <option value="">Selecione um setor</option>
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
                <option value="">Selecione uma categoria</option>
                    <?php foreach($formData['categorias'] as $categoria) : ?>
                        <option value="<?php echo $categoria->getId(); ?>" 
                        <?php echo isset($ativo) && $ativo->getCategoriaId() == $categoria->getId() ? 'selected' : ''; ?>>
                        <?php echo $categoria->getDescricao(); ?>
                        </option>
                    <?php endforeach; ?>
            </select>
        </label>
        <label>
            Data de Aquisição:
            <input type="datetime-local" name="data_aquisicao" value="<?php echo isset($ativo) ? htmlentities(traduz_data_para_exibir($ativo->getDataAquisicao())) : ''; ?>">
        </label>
        <label>
            Vida Útil:
            <input type="text" name="vida_util" value="<?php echo isset($ativo) ? htmlentities($ativo->getVidaUtil()) : ''; ?>">
        </label>
        <label>
            Condição:
            
        </label>
        <label>
            Estado do Ativo:
            <input type="text" name="estado_ativo" value="<?php echo isset($ativo) ? htmlentities($ativo->getEstadoAtivo()) : ''; ?>">
        </label>
        <label>
            Valor:
            <input type="number" name="valor" value="<?php echo isset($ativo) ? htmlentities($ativo->getValor()) : ''; ?>">
        </label>
        <input type="submit" value="Enviar">
    </fieldset>
</form>
