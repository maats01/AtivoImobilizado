<form method="post">
    <fieldset>
        <legend>Nova filial</legend>
        <label>
            Nome:
            <input type="text" name="nome" value="<?php echo htmlentities($filial->getNome()); ?>" required>
        </label>
        <label>
            CNPJ:
            <?php if ($tem_erros && isset($erros_validacao['cnpj'])) : ?>
                <span class="erro"><?php echo $erros_validacao['cnpj']; ?></span>
            <?php endif; ?>
            <input type="text" name="cnpj" value="<?php echo htmlentities($filial->getCnpj()); ?>" required>
        </label>
        <label>
            Estado (UF):
            <?php if ($tem_erros && isset($erros_validacao['estado'])) : ?>
                <span class="erro"><?php echo $erros_validacao['estado']; ?></span>
            <?php endif; ?>
            <input type="text" name="estado" value="<?php echo htmlentities($filial->getEstado()); ?>" required>
        </label>
        <label>
            Cidade:
            <input type="text" name="cidade" value="<?php echo htmlentities($filial->getCidade()); ?>" required>
        </label>
        <label>
            Bairro:
            <input type="text" name="bairro" value="<?php echo htmlentities($filial->getBairro()); ?>" required>
        </label>
        <label>
            Rua:
            <input type="text" name="rua" value="<?php echo htmlentities($filial->getRua()); ?>" required>
        </label>
        <label>
            Número:
            <input type="text" name="num" value="<?php echo $filial->getNumero() !== 0 ? htmlentities($filial->getNumero()) : ''; ?>">
        </label>
        <input type="submit" value="Enviar">
    </fieldset>
</form>