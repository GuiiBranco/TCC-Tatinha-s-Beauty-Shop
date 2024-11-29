
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/fonts.css">
    <title>Login</title>
</head>
<body>
    <form action="/logar" method="post">
        <h1>FAZER LOGIN</h1>

        <div class="input">
            <label for="email">E-mail</label>
            <input type="text" name="email" class="email" autocomplete="off">
        </div>
        <div class="input">
            <label for="senha">Senha</label>
            <input type="password" name="senha" class="senha" required autocomplete="off">
        </div>
        <button type="submit">Login</button>
    </form>
</body>
</html>