<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Imagens de Eventos</title>
</head>
<body>
    <h1>Cadastrando Imagens de Eventos</h1>
    <form action="/salvarEvento" method="POST" enctype="multipart/form-data">
        <div>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div>
            <label for="imagem">Imagem:</label>
            <input type="file" name="imagem" id="imagem" accept=".jpg,.jpeg" required>
        </div>
        <button type="submit">SALVAR</button>
    </form>
</body>
</html>