<form method="post">
    <fieldset>
        <legend>Novo setor</legend>
        <label>
            Descrição:
            <input type="text" name="descricao" value="<?php echo htmlentities($setor->getDescricao()); ?>">
        </label>
        <input type="submit" value="Enviar">
    </fieldset>
</form>