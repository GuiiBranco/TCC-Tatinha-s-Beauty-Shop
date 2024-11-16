<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/cadastro.css">
    <link rel="stylesheet" href="CSS/fonts.css">
    <title>Cadastrar Imagens do Portfolio</title>
</head>
<body>
    <main>
        <h1>Cadastrando Imagens do Portfolio</h1>
        <form action="/salvarPortfolio" method="POST" enctype="multipart/form-data">
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
    </main>

    <table>
        <tr>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Opções</th>
        </tr>
        <?php foreach($imagens as $item): ?>
            <tr>
                <td><img src="upload/portfolio/<?= $item["imagem"] ?>" class="imagem"></td>
                <td><?= $item["nome"] ?></td>
                <td><a href="#">🗑️</a></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>