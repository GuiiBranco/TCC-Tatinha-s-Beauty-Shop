<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cadastro.css">
    <link rel="stylesheet" href="CSS/fonts.css">
    <title>Cadastrar Imagens de Funcionários</title>
</head>
<body>
    <main>
        <h1>Cadastrando Imagens de Funcionários</h1>
        <form action="/salvarFuncionarios" method="POST" enctype="multipart/form-data">
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div>
                <label for="imagem">Imagem:</label>
                <input type="file" name="imagem" id="imagem" accept=".jpg,.jpeg" required>
            </div>
            <div>
                <label for="instagram">Instagram:</label>
                <input type="text" name="instagram" id="instagram">
            </div>
            <div>
                <label for="facebook">Facebook:</label>
                <input type="test" name="facebook" id="facebook">
            </div>
            <div>
                <label for="twitter">Twitter:</label>
                <input type="test" name="twitter" id="twitter">
            </div>
            <button type="submit">SALVAR</button>
        </form>
    </main>

    <div id="listagemFotos"></div>
</body>
</html>