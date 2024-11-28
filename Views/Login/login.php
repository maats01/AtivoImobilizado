<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body class="body-login">
    <div class="tela-login">
        <h1 class="title-login">ACESSE SUA CONTA</h1>
        <form class="form-login" method="post">
            <br><br>
            <input class="input-login" type="text" name="usuario" placeholder="usuário" required>
            <br><br>
            <input class="input-login" type="password" name="senha" placeholder="senha" required>
            <br><br>
            <button class="input-submit" type="submit">ACESSAR</button>
            <br><br>
            <button class="input-cadastro" onclick="window.location.href='?rota=Cadastro'">CADASTRE-SE</button>
        </form>
    </div> 
</body>
</html>