<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

</body>
    <h1>Acesse sua conta</h1>
    <form method="post">
        <p>
            <label>Usuário</label>
            <input type="text" name="usuario" required>
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha" required>
        </p>
        <?php if ($tem_erro) : ?>
            <p>Usuário ou senha incorretos.</p>
        <?php endif; ?>
        <p>
            <button type="submit">Entrar</button>
            <a href="?rota=Cadastro">Cadastrar</a>
        </p>
    </form>
</html>