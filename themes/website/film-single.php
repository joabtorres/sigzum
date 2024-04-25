<?php $this->layout("_theme", ["head" => $head]); ?>
<section class="container pt-5 pb-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-orange fw-bold mb-0"><?= $film->name ?></h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= url("/"); ?>" class="text-decoration-none">Página Inicial</a></li>
                    <li class="breadcrumb-item"><a href="<?= url("/filmes"); ?>" class="text-decoration-none">Filmes</a></li>
                    <li class="breadcrumb-item active"><?= $film->name ?> </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 d-flex flex-column mb-2">
            <img src="<?= image($film->image, 340, 453) ?>" class="d-block m-auto img-movies" alt="Titulo do filme - Cinema Sala01">
            <span data-bs-toggle="modal" data-bs-target="#modalTrailer" class="btn btn-danger mt-1 me-3 ms-3"><i class="fa-brands fa-youtube"></i> Trailer</span>
        </div>
        <div class="col-md-9">
            <ul class="list-unstyled">
                <li class="mt-2 mb-2"><span class="fw-bold text-orange">Nome: </span><?= $film->name ?></li>
                <li class="mt-2 mb-2"><span class="fw-bold text-orange">Duração: </span> <?= ($film->time ?? "") ?></li>
                <li class="mt-2 mb-2"><span class="fw-bold text-orange">Categoria: </span> <?= ($film->categories ?? "") ?> </li>
                <li class="mt-2 mb-2"><span class="fw-bold text-orange">Modo de exibição: </span> <?= ($film->mode ?? "") ?></li>
                <li class="mt-2 mb-2"><span class="fw-bold text-orange">Classificação indicativa: </span> <?= ($film->indication ?? "") ?></li>
                <li class="mt-2 mb-2"><span class="fw-bold text-orange">Sinopse: </span>
                    <br>
                    <?= ($film->description ?? "") ?>
                </li>
            </ul>
        </div>
    </div>
    <div class="row align-items-center justify-content-center d-lg-none">
        <div class="col-12 mt-1">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr class="bg-secondary text-white">
                        <td class="text-center align-middle">Dias/Sessões</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle text-center">Quinta-feira - 09/04/2024 <br><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:40h</span> <span class="btn btn-primary m-1 me-2">19:00h</span> <span class="btn btn-primary m-1 me-2">21:40h</span> </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">Sexta-feira - 10/04/2024 <br><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:40h</span> <span class="btn btn-primary m-1 me-2">19:00h</span> <span class="btn btn-primary m-1 me-2">21:40h</span> </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">Sábado - 11/04/2024 <br><span class="btn btn-primary m-1 me-2">16:40h</span> <span class="btn btn-primary m-1 me-2">19:00h</span> <span class="btn btn-primary m-1 me-2">21:40h</span> </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">Domingo - 12/04/2024 <br><span class="btn btn-primary m-1 me-2">16:40h</span> <span class="btn btn-primary m-1 me-2">19:00h</span> <span class="btn btn-primary m-1 me-2">21:40h</span> </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">Segunda-feira - 13/04/2024 <br><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:40h</span> <span class="btn btn-primary m-1 me-2">19:00h</span> <span class="btn btn-primary m-1 me-2">21:40h</span> </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">Terça-feira - 14/04/2024 <br><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:40h</span> <span class="btn btn-primary m-1 me-2">19:00h</span> <span class="btn btn-primary m-1 me-2">21:40h</span> </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">Quarta-feira - 15/04/2024 <br><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:40h</span> <span class="btn btn-primary m-1 me-2">19:00h</span> <span class="btn btn-primary m-1 me-2">21:40h</span> </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="row  d-none d-md-none d-lg-block">
        <div class="col">
            <div class="d-flex align-items-center">
                <div class="flex-grow-1">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr class="bg-secondary text-white">
                                <td width="250px">Dias</td>
                                <td>Sessões</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle">Quinta-feira - 09/04/2024</td>
                                <td class="align-middle"><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:40h</span> <span class="btn btn-primary m-1 me-2">19:00h</span> <span class="btn btn-primary m-1 me-2">21:40h</span> </td>
                            </tr>
                            <tr>
                                <td class="align-middle">Sexta-feira - 10/04/2024</td>
                                <td class="align-middle"><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:40h</span> <span class="btn btn-primary m-1 me-2">19:00h</span> <span class="btn btn-primary m-1 me-2">21:40h</span> </td>
                            </tr>
                            <tr>
                                <td class="align-middle">Sábado - 11/04/2024 </td>
                                <td class="align-middle"><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:40h</span> <span class="btn btn-primary m-1 me-2">19:00h</span> <span class="btn btn-primary m-1 me-2">21:40h</span> </td>
                            </tr>
                            <tr>
                                <td class="align-middle">Domingo - 12/04/2024</td>
                                <td class="align-middle"><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:40h</span> <span class="btn btn-primary m-1 me-2">19:00h</span> <span class="btn btn-primary m-1 me-2">21:40h</span> </td>
                            </tr>
                            <tr>
                                <td class="align-middle">Segunda-feira - 13/04/2024</td>
                                <td class="align-middle"><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:40h</span> <span class="btn btn-primary m-1 me-2">19:00h</span> <span class="btn btn-primary m-1 me-2">21:40h</span> </td>
                            </tr>
                            <tr>
                                <td class="align-middle">Terça-feira - 14/04/2024 </td>
                                <td class="align-middle"><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:40h</span> <span class="btn btn-primary m-1 me-2">19:00h</span> <span class="btn btn-primary m-1 me-2">21:40h</span> </td>
                            </tr>
                            <tr>
                                <td class="align-middle">Quarta-feira - 15/04/2024</td>
                                <td class="align-middle"><span class="btn btn-primary m-1 me-2">14:00h</span> <span class="btn btn-primary m-1 me-2">16:40h</span> <span class="btn btn-primary m-1 me-2">19:00h</span> <span class="btn btn-primary m-1 me-2">21:40h</span> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>


<?php
$this->insert("film-trailer", ["film" => $film]);
?>