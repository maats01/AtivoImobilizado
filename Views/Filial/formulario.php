<form method="post">
    <fieldset>
        <legend>Nova filial</legend>
        <label>
            Nome:
            <input type="text" name="nome" value="<?php echo isset($filial) ?  htmlentities($filial->getNome()) : ''; ?>">
        </label>
        <label>
            CNPJ:
            <input type="text" name="cnpj" value="<?php echo isset($filial) ?  htmlentities($filial->getCnpj()) : ''; ?>">
        </label>
        <label>
            Estado:
            <input type="text" name="estado" value="<?php echo isset($filial) ?  htmlentities($filial->getEstado()) : ''; ?>">
        </label>
        <label>
            Cidade:
            <input type="text" name="cidade" value="<?php echo isset($filial) ?  htmlentities($filial->getCidade()) : ''; ?>">
        </label>
        <label>
            Bairro:
            <input type="text" name="bairro" value="<?php echo isset($filial) ?  htmlentities($filial->getBairro()) : ''; ?>">
        </label>
        <label>
            Rua:
            <input type="text" name="rua" value="<?php echo isset($filial) ?  htmlentities($filial->getRua()) : ''; ?>">
        </label>
        <label>
            Número:
            <input type="text" name="num" value="<?php echo isset($filial) ? htmlentities($filial->getNumero()) : ''; ?>">
        </label>
        <input type="submit" value="Enviar">
    </fieldset>
</form>