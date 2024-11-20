<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Seção de Funcionários</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body{
            background-color: #202426;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .inserirImagens{
            width: 100%;
            min-height: 10rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contornoInterno{
            border: solid #D95B66;
            border-radius: 1rem;
            width: 90%;
            height: 90%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .listagemImagens{
            padding-top: 1rem;
            width: 70%;
            min-height: 2rem;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .item{
            border: solid #D95B66;
            border-radius: 0.5rem;
            width: 10rem;
            height: 14rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-evenly;
        }

        .imagemLista{
            background-color: white;
            width: 8rem;
            height: 10rem;
        }

        a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <section class="inserirImagens">
        <form action="/cadFuncionarios" method="post" enctype="multipart/form-data" class="contornoInterno">
            <label for="imagem">Adicionar nova imagem:</label>
            <input type="file" name="imagem" class="imagem">
            <label for="nome">Nome do funcionário:</label>
            <input type="text" name="nome" class="nome">
            <button type="submit">Salvar Imagem</button>
        </form>
    </section>

    <div class="listagemImagens">
        
        <?php foreach($imagens as $imagem): ?>
            <div class="item">
                <img src="upload/funcionarios/<?= $imagem["imagem"] ?>" class="imagemLista">
                <a href="/deletarFuncionario/<?= $imagem["idFuncionario"] ?>">🗑️</a>
            </div>
        <?php endforeach; ?>

    </div>
</body>
</html>