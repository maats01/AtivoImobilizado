<form method="post">
    <fieldset class="campos">
        <legend>Nova filial</legend>
        <label>
            Nome:
            <input type="text" name="nome" value="<?php echo htmlentities($filial->getNome());?>">
        </label>
        <label>
            CNPJ:
            <input type="text" name="cnpj" value="<?php echo htmlentities($filial->getCnpj());?>">
        </label>
        <label>
            Estado:
            <input type="text" name="estado" value="<?php echo htmlentities($filial->getEstado());?>">
        </label>
        <label>
            Cidade:
            <input type="text" name="cidade" value="<?php echo htmlentities($filial->getCidade());?>">
        </label>
        <label>
            Bairro:
            <input type="text" name="bairro" value="<?php echo htmlentities($filial->getBairro());?>">
        </label>
        <label>
            Rua:
            <input type="text" name="rua" value="<?php echo htmlentities($filial->getRua());?>">
        </label>
        <label>
            Número:
            <input type="text" name="num" value="<?php echo $filial->getNumero() === 0 ? '' : htmlentities($filial->getNumero());?>">
        </label>
        <input type="submit" value="Enviar">
    </fieldset>
</form>