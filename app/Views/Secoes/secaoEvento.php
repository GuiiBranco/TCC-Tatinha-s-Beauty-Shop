<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/secoes.css">
    <title>Editar Seção de Evento</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Jacques+Francois&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body>
    <section class="inserirImagens">
        <form action="/editSecoes/cadEvento" method="post" enctype="multipart/form-data" class="contornoInterno">

            <?php if (session()->has("aviso")): ?>
                <p class="aviso"><?= session("aviso") ?></p>
            <?php endif; ?>

            <label for="imagem">Adicionar nova imagem:</label>
            <input type="file" name="imagem" class="imagem">
            <button type="submit">Salvar Imagem</button>

            <a href="/imagensPadrao/1920x500.svg" download>
                <img src="/img/baixarPadrão.png" class="baixarImg">
            </a>
        </form>
    </section>

    <div class="listagemImagens">
        
        <?php foreach($imagens as $imagem): ?>
            <div class="item">
                <img src="/upload/evento/<?= $imagem["imagem"] ?>" class="imagemLista">
                <a href="/editSecoes/deletarEvento/<?= $imagem["idEventos"] ?>">
                    <img src="/img/lixeira.png" class="lixeira">
                </a>
            </div>
        <?php endforeach; ?>

    </div>

    <a href="/editSecoes" class="backArrow">
        <img src="/img/backArrow.png">
    </a>
</body>
</html>