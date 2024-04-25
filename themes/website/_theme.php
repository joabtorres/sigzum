<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/gif" href="<?= theme("assets/images/icon.png") ?>" sizes="32x32" />
    <?= $head ?>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= theme("assets/styles_minify.css") ?>">
</head>

<body>
    <div class="ajax_load">
        <div class="ajax_load_box">
            <div class="ajax_load_box_circle"></div>
            <p class="ajax_load_box_title">Aguarde, carregando...</p>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="<?= url() ?>"><img src="<?= theme("assets/images/logo-menu.png") ?>" alt="Cinema - Sala 1" class="img-fluid" title="Cinema - Sala 1" width="80%"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= url(); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= url("/filmes"); ?>">Filmes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= url("/noticias"); ?>">Notícias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= url("/sobre"); ?>">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= url("contato"); ?>">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- fim do header -->
    <main>
        <?= $this->section("content"); ?>
    </main>


    <div id="container-img"></div>
    <footer class="bg-dark text-white" id="rodape">
        <div class="container pt-5 pb-1">
            <div class="row">
                <div class="col-md-4">
                    <h5 class="fw-bold">Menu</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?= url(); ?>" class="pt-2 pb-2 text-decoration-none"><i class="fa-solid fa-caret-right text-orange me-1"></i>Home</a></li>
                        <li><a href="<?= url("/filmes"); ?>" class="pt-2 pb-2 text-decoration-none"><i class="fa-solid fa-caret-right text-orange me-1"></i>Filmes</a></li>
                        <li><a href="<?= url("/noticias"); ?>" class="pt-2 pb-2 text-decoration-none"><i class="fa-solid fa-caret-right text-orange me-1"></i>Nóticias</a></li>
                        <li><a href="<?= url("/sobre"); ?>" class="pt-2 pb-2 text-decoration-none"><i class="fa-solid fa-caret-right text-orange me-1"></i>Sobre</a></li>
                        <li><a href="<?= url("/contato"); ?>" class="pt-2 pb-2 text-decoration-none"><i class="fa-solid fa-caret-right text-orange me-1"></i>Contato</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold">Mídias sociais</h5>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/cinemasala1/" title="Instagram do Cinema Sala1" target="_blank" class="fs-1 me-1"><i class="fa-brands fa-square-instagram"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/cinemasala1/" title="Facebook do Cinema Sala1" target="_blank" class="fs-1"><i class="fa-brands fa-square-facebook"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="fw-bold">Empresa</h5>
                    <ul class="list-unstyled">
                        <li>CINEMA SALA 1</li>
                        <li>CPNJ: 0.101.556/0001-42</li>
                        <li>Endereço: Avenida Doutor Hugo de Mendonca, 515, Comercio, Itaituba - Pará - CEP 68180-005</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <hr>
                    <p class="text-center"> <i class="fa-regular fa-copyright me-1 text-danger"></i> 2024 | Desenvolvido com <i class="fa-regular fa-heart text-danger"></i> por <a href="https://joabtorres.com.br/" target="_blank" class="text-decoration-none text-white text-white-hover">Joab T. Alencar</a>.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?= theme("assets/scripts_minify.js") ?>"></script>
</body>

</html>