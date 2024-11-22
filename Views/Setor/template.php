<html>

<head>
    <meta charset="utf-8" />
    <title>Setores</title>
    <link rel="stylesheet" href="assets/style.css">
    <script>
        function confirmarRemocao() {
            var confirmar = confirm("Você tem certeza que deseja remover este item?");
            return confirmar;
        }
    </script>
</head>

<body>
    <div id="bloco_principal">
        <?php include('formulario.php'); ?>

        <?php if ($exibir_tabela) : ?>
            <?php include('tabela.php'); ?>
        <?php endif; ?>
    </div>
</body>

</html>