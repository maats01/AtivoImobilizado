<form method="post">
    <fieldset>
        <legend>Nova categoria</legend>
        <label>
            Descrição:
            <input type="text" name="descricao" value="<?php echo htmlentities($categoria->getDescricao()); ?>" required>
        </label>
        <input type="submit" value="Enviar">
    </fieldset>
</form>