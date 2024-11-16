
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/login.css">
    <title>Login</title>
</head>
<body>
    <form action="/login/logar" method="post">
        <label for="email">E-mail</label>
        <input type="text" name="email" class="email">
        <label for="senha">Senha</label>
        <input type="password" name="senha" class="senha" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>