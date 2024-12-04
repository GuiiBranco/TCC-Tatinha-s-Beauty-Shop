<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/fonts.css">
    <title>Editar Funcionários</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            height: 100vh;
            display: flex;
            background-color: #202426;
            color: white;
        }

        .infoAntiga{
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .infoAntiga div{
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .infoNova{
            width: 50%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 1rem;
        }

        .editInfo{
            display: flex;
            flex-direction: column;
            width: 20rem;
            gap: 0.3rem;
        }

        .editInfo button{
            background-color: #D95B66;
            color: white;
            border: none;
            padding: 0.5rem;
            border-radius: 0.5rem;
            cursor: pointer;
        }

        .input{
            background-color: #202426;
            color: white;
            border: none;
            border-bottom: solid #F27781;
        }

        .input:focus{
            outline: none;
        }

        img{
            width: 15rem;
        }

        .backArrow{
            position: fixed;
            bottom: 1rem;
            left: 1rem;
        }

        .backArrow img{
            width: 3rem;
            height: 3rem;
        }

        .icone{
            height: 2rem;
            width: 2rem;
        }
    </style>

</head>
<body>
        <div class="infoAntiga">
            <img src="/upload/funcionarios/<?= $funcionario["imagem"] ?>">
            <span>Nome atual: <?= $funcionario["nome"] ?></span>

            <div>
                <img src="/img/logoInstagramBranco.svg" class="icone">
                <?php if(!$funcionario["instagram"]): ?>
                    <span>Não possúi</span>
                <?php else: ?>
                    <span><?= $funcionario["instagram"] ?></span>
                <?php endif; ?>
            </div>
            <div>
                <img src="/img/logoXBranco.svg" class="icone">
                <?php if(!$funcionario["x"]): ?>
                    <span>Não possúi</span>
                <?php else: ?>
                    <span><?= $funcionario["x"] ?></span>
                <?php endif; ?>
            </div>
            <div>
                <img src="/img/logoTiktokBranco.svg" class="icone">
                <?php if(!$funcionario["tiktok"]): ?>
                    <span>Não possúi</span>
                <?php else: ?>
                    <span><?= $funcionario["tiktok"] ?></span>
                <?php endif; ?>
            </div>
        </div>

        <div class="infoNova">
            <form action="/editSecoes/funcionarios/editFuncionario/editNome" method="post" class="editInfo">
                <label for="nome">Novo Nome:</label>
                <input type="text" name="nome" class="input" autocomplete="off">
                <input type="text" name="idFuncionario" hidden value="<?= $funcionario["idFuncionario"] ?>">
                <button>Salvar Nome</button>
            </form>
            <form action="/editSecoes/funcionarios/editFuncionario/editFoto" method="post" class="editInfo" enctype="multipart/form-data">
                <label for="imagem">Nova Imagem:</label>
                <input type="file" name="imagem" class="imagem">
                <input type="text" name="idFuncionario" hidden value="<?= $funcionario["idFuncionario"] ?>">
                <input type="text" name="imagemAnterior" hidden value="<?= $funcionario["imagem"] ?>">
                <button>Salvar Imagem</button>
            </form>
            <form action="/editSecoes/funcionarios/editFuncionario/editInstagram" method="post" class="editInfo">
                <label for="instagram">Novo Instagram:</label>
                <input type="text" name="instagram" class="input" autocomplete="off">
                <input type="text" name="idFuncionario" hidden value="<?= $funcionario["idFuncionario"] ?>">
                <button>Salvar Instagram</button>
            </form>
            <form action="/editSecoes/funcionarios/editFuncionario/editX" method="post" class="editInfo">
                <label for="x">Novo X:</label>
                <input type="text" name="x" class="input" autocomplete="off">
                <input type="text" name="idFuncionario" hidden value="<?= $funcionario["idFuncionario"] ?>">
                <button>Salvar X</button>
            </form>
            <form action="/editSecoes/funcionarios/editFuncionario/editTiktok" method="post" class="editInfo">
                <label for="tiktok">Novo TikTok:</label>
                <input type="text" name="tiktok" class="input" autocomplete="off">
                <input type="text" name="idFuncionario" hidden value="<?= $funcionario["idFuncionario"] ?>">
                <button>Salvar TikTok</button>
            </form>
        </div>

    <a href="/editSecoes/funcionarios" class="backArrow">
        <img src="/img/backArrow.png">
    </a>
</body>
</html>