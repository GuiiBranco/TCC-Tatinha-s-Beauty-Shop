<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionários</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            height: 100vh;
            display: flex;
        }

        .foto{
            background-color: blue;
            height: 100%;
            width: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .info{
            background-color: red;
            height: 100%;
            width: 50%;
        }

        .divEditInfo{
            background-color: green;
            width: 100%;
            height: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .editInfo{
            color: white;
            background-color: orange;
            width: 80%;
            height: 2.5rem;
            display: flex;
            align-items: center;
        }

        .editInfo button{
            margin-left: auto;
        }

        .deletarRedes{
            background-color: yellow;
            width: 100%;
            height: 50%;
        }
    </style>

</head>
<body>
    <div class="foto">
        <img src="/upload/funcionarios/<?= $funcionario["imagem"] ?>">
        <span><?= $funcionario["nome"] ?></span>
    </div>
    <div class="info">
        <div class="divEditInfo">
            <form action="/editSecoes/funcionarios/editFuncionario/editNome" method="post" class="editInfo">
                <label for="nome">Alterar Nome:</label>
                <input type="text" name="nome" class="nome">
                <input type="text" name="idFuncionario" hidden value="<?= $funcionario["idFuncionario"] ?>">
                <button>Salvar</button>
            </form>
            <form action="/editSecoes/funcionarios/editFuncionario/editFoto" method="post" class="editInfo" enctype="multipart/form-data">
                <label for="imagem">Alterar Imagem:</label>
                <input type="file" name="imagem" class="imagem">
                <input type="text" name="idFuncionario" hidden value="<?= $funcionario["idFuncionario"] ?>">
                <input type="text" name="imagemAnterior" hidden value="<?= $funcionario["imagem"] ?>">
                <button>Salvar</button>
            </form>
            <form action="#" method="post" class="editInfo">
                <label for="nome">Adicionar Rede Social:</label>
                <select name="nomeRede">
                    <option value="instagram">Instagram</option>
                    <option value="facebook">Facebook</option>
                    <option value="x">X(Twitter)</option>
                    <option value="tiktok">TikTok</option>
                    <option value="threads">Threads</option>
                </select>
                <input type="text" name="linkRede" class="linkRede">
            </form>
        </div>
        <div class="deletarRedes"></div>
    </div>
</body>
</html>