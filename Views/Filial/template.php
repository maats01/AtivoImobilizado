<html>
    <head>
        <meta charset="utf-8" />
        <title>Filiais</title>
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <div id="bloco_principal">
            <h1>Filiais</h1>

            <?php include('formulario.php'); ?>

            <?php if ($exibir_tabela) : ?>
                <?php include('tabela.php'); ?>
            <?php endif; ?>
        </div>
    </body>
</html>