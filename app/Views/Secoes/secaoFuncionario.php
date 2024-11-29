<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/secoes.css">
    <title>Editar Seção de Funcionários</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jacques+Francois&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body>
    <section class="inserirImagens">
        <form action="/editSecoes/cadFuncionarios" method="post" enctype="multipart/form-data" class="contornoInterno formFunc">

            <label for="imagem">Adicionar nova imagem:</label>
            <input type="file" name="imagem" class="imagem">
            <div class="info">
                <label for="nome">Nome do funcionário:</label>
                <input type="text" name="nome" class="nome" autocomplete="off">
            </div>
            <div class="info">
                <label for="instagram">Instagram:</label>
                <input type="text" name="instagram" class="instagram" autocomplete="off">
            </div>
            <div class="info">
                <label for="x">X:</label>
                <input type="text" name="x" class="x" autocomplete="off">
            </div>
            <div class="info">
                <label for="tiktok">TikTok:</label>
                <input type="text" name="tiktok" class="tiktok" autocomplete="off">
            </div>
            <div class="btn">
                <button type="submit">Salvar Funcionário</button>
                <button type="reset">Limpar</button>
            </div>

        </form>
    </section>

    <div class="listagemImagens">
        
        <?php foreach($imagens as $imagem): ?>
            <div class="item">
                <img src="/upload/funcionarios/<?= $imagem["imagem"] ?>" class="imagemLista">
                <div>
                    <a href="/editSecoes/deletarFuncionario/<?= $imagem["idFuncionario"] ?>">🗑️</a>
                    <a href="/editSecoes/funcionarios/editFuncionario/<?= $imagem["idFuncionario"] ?>">✏️</a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <a href="/editSecoes" class="backArrow">
        <img src="/img/backArrow.png">
    </a>
</body>
</html>