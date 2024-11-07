<html>
    <head>
        <meta charset="utf-8" />
        <title>Ativos</title>
    </head>
    <body>
        <div id="bloco_principal">
            <h1>Ativos</h1>

            <?php include('formulario.php'); ?>

            <?php if ($exibir_tabela) : ?>
                <?php include('tabela.php'); ?>
            <?php endif; ?>
        </div>
    </body>
</html>