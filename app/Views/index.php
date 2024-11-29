<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/fonts.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
    <script defer src="js/bootstrap.bundle.min.js"></script>
    <title>Tatinha´s Beauty Shop</title>
</head>
<body>
    <section id="header">
        <div class="linksHeader">
            <a href="#portfolio">Portfólio</a>
            <a href="#diaDaNoiva">Dia da noiva</a>
            <a href="https://www.instagram.com/tatinhas_beauty_shop/" target="_blank">Instagram</a>
            <a href="#infoSalao">Contatos</a>
            <a href="#secFuncionarios">Nossas estrelas</a>
        </div>
    </section>

    <section id="slideshow">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/imagemSlideUm.jpg" class="d-block w-100 imgSlide">
            </div>
            <div class="carousel-item">
            <img src="img/imagemSlideDois.jpg" class="d-block w-100 imgSlide">
            </div>
            <div class="carousel-item">
            <img src="img/imagemSlideTres.jpg" class="d-block w-100 imgSlide">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </section>

    <section id="portfolio">-
        <div id="contorno">
            <div class="portDiv">
                <div class="polaroid">
                    <img src="upload/portfolio/<?php echo $imagensPortfolio[0]["imagem"] ?>" class="polaroidImg">
                </div>
                <div class="polaroid">
                    <img src="upload/portfolio/<?php echo $imagensPortfolio[1]["imagem"] ?>" class="polaroidImg">
                </div>
                <div class="polaroid">
                    <img src="upload/portfolio/<?php echo $imagensPortfolio[2]["imagem"] ?>" class="polaroidImg">
                </div>
                <div class="polaroid">
                    <img src="upload/portfolio/<?php echo $imagensPortfolio[3]["imagem"] ?>" class="polaroidImg">
                </div>
            </div>
            <div class="portDiv">
                <div class="polaroid">
                    <img src="upload/portfolio/<?php echo $imagensPortfolio[4]["imagem"] ?>" class="polaroidImg">
                </div>
                <div class="polaroid">
                    <img src="upload/portfolio/<?php echo $imagensPortfolio[5]["imagem"] ?>" class="polaroidImg">
                </div>
                <div class="polaroid">
                    <img src="upload/portfolio/<?php echo $imagensPortfolio[6]["imagem"] ?>" class="polaroidImg">
                </div>
                <div class="polaroid">
                    <img src="upload/portfolio/<?php echo $imagensPortfolio[7]["imagem"] ?>" class="polaroidImg">
                </div>
            </div>
            <a href="https://www.instagram.com/tatinhas_beauty_shop/" target="_blank" id="instagramLink">
                <img src="img/logo_instagram.svg" id="instagram-icone">
            </a>
        </div>
    </section>

    <section id="diaDaNoiva">
        <div class="divDiaNoiva">
            <div>
                <img src="img/tituloDiaNoiva.png" class="tituloDiaNoiva">
                <a href="https://www.instagram.com/tatinhas_beauty_shop/" target="_blank">
                    <span class="btnLinkDiaNoiva">confira nossos pacotes</span>
                </a>
            </div>
            <img src="img/bouquet.png" class="imgBouquet">
            <img src="img/imagemNoiva.png" class="imgNoiva">
        </div>
    </section>

    <?php if($imagensEvento[0]["imagem"]): ?>
        <section id="anuncios">
            <img src="upload/evento/<?php echo $imagensEvento[0]["imagem"] ?>">
        </section>
    <?php endif; ?>

    <section id="fotosSalao">
        <div class="divImgSalao">
            <img src="img/imagensSalao.svg" class="imgSalao">
            <img src="img/descSalao.svg" class="legendaSalao">
        </div>
        <img class="pattern" src="img/fotosSalaoPattern.png">
    </section>

    <section id="roupas">
        <img src="img/background-roupas.svg">
        <div class="contorno2">
            <div>
                <h1>GARANTA SEU LOOK</h1>
                <h2>
                    aproveite para checar nossas <br>
                    peças de vestuário!
                </h2>
            </div>
        </div>
    </section>

    <?php if($imagensFuncionarios > 0): ?>
        <section id="secFuncionarios">
            <span id="tituloFuncionarios">
                NOSSAS ESTRELAS
            </span>
            <div id="divFuncionarios">
                <?php foreach ($imagensFuncionarios as $funcionarios): ?>
                    <div class="containerFunc">
                        <div class="funcionario">
                            <div class="foto">
                                <img src="upload/funcionarios/<?= $funcionarios["imagem"] ?>">
                            </div>
                            <div class="nome">
                                <span><?= $funcionarios["nome"] ?></span>
                            </div>
                        </div>
                        <div class="contatos">
                            <?php if($funcionarios["instagram"]): ?>
                                <a href="<?= $funcionarios["instagram"] ?>" target="_blank">
                                    <img src="img/logoInstagram.svg">
                                </a>
                            <?php endif; ?>
                            <?php if($funcionarios["x"]): ?>
                                <a href="<?= $funcionarios["x"] ?>" target="_blank">
                                    <img src="img/logoX.svg">
                                </a>
                            <?php endif; ?>
                            <?php if($funcionarios["tiktok"]): ?>
                                <a href="<?= $funcionarios["tiktok"] ?>" target="_blank">
                                    <img src="img/logoTiktok.svg">
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>

    <section id="infoSalao">
        <div id="info">
            <div>
                <h2>Endereço</h2>
                <span>
                    Rua Benedito Carlos Dias</br>
                    Número 27 central parque
                </span>
            </div>
            <div>
                <h2>Telefone / E-mail</h2>
                <span>
                    E-mail: tatinhaBeauty@gmail.com</br>
                    Cel: 32029021
                </span>
            </div>
            <div>
                <h2>Atendimento</h2>
                <span>
                    Segunda a Sexta: 8:00 às 17:00</br>
                    Sábados: 8:00 às 12:00
                </span>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d914.6370150008815!2d-47.50525593053414!3d-23.512782568922297!2m3!
        1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c58b39165d472f%3A0x6af84a2e961827c7!2sR.%20Benedito%20Carlos%20Dias%2C%2026%20-%20
        Central%20Parque%20Sorocaba%2C%20Sorocaba%20-%20SP%2C%2018051-030!5e0!3m2!1spt-BR!2sbr!4v1728174414208!5m2!1spt-BR!2sbr" width="100%" 
        height="70%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- <section id="contato">
        <div id="faleConoscoDiv">
            <span id="faleConosco">FALE CONOSCO</span>
            <div id="nomeEmail">
                <div class="nomeInput">
                    <span>Nome:</span>
                    <input type="text" maxlength="50">
                </div>
                <div class="email">
                    <span>E-mail:</span>
                    <input type="text" maxlength="50">
                </div>
            </div>
            <div class="assuntoInput">
                <span>Assunto:</span>
                <input type="text" maxlength="50">
            </div>
            <textarea name="#" id="areaTexto" rows="10" placeholder="Mensagem:"></textarea>
        </div>
        <img src="img/Logo.svg" id="logo">
    </section> -->

    <a href="https://wa.me/5515991902414" class="whatsappFlutuante">
        <img src="img/iconeWhatsapp.svg">
    </a>
</body>