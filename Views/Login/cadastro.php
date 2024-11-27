<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>

<body>

</body>
    <h1>Nova conta</h1>
    <form method="post">
        <p>
            <label>Usuário</label>
            <input type="text" name="usuario" required>
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha" required>
        </p>
        <p>
            <button type="submit">Cadastrar</button>
            <a href="?rota=Login">Login</a>
        </p>
    </form>
</html>