<?php $this->layout("_theme", ["head" => $head]); ?>
<section class="container pt-5 pb-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-orange fw-bold mb-0">Filmes</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= url("/"); ?>" class="text-decoration-none">Página Inicial</a></li>
                    <li class="breadcrumb-item active">Filmes </li>
                </ol>
            </nav>
        </div>
    </div>
    <?php if (!empty($films)) :
        foreach ($films as $film) :
    ?>
            <div class="row align-items-center justify-content-center">
                <div class="col-md-3 d-flex flex-column mb-2">
                    <img src="<?= image($film->image, 340, 453) ?>" class="d-block m-auto img-movies" alt="Titulo do filme - Cinema Sala01">
                    <div class="text-center"><span class="p-1 ps-2 pe-2 me-1 mt-1 bg-dark text-white rounded d-inline-block" title="Exibição em: 2D">2D</span> <span class="p-1 ps-2 pe-2 me-1 mt-1 bg-orange text-white rounded d-inline-block" title="Não indicado para menores de 14 anos.">14</span></div>
                    <a href="<?= url("/filmes/{$film->slug}") ?>" class="btn btn-success mt-1 d-block"><i class="fa-solid fa-bullhorn"></i> Informações</a>
                    <span data-bs-toggle="modal" data-bs-target="#modalTrailer" class="btn btn-danger d-block mt-1"><i class="fa-brands fa-youtube"></i> Trailer</span>
                </div>
            </div>
    <?php
        endforeach;
    endif; ?>
</section>


<?php
if (isset($films) && is_array($films)) :
    foreach ($films as $film) :
        $this->insert("film-trailer", ["film" => $film]);
    endforeach;
endif;
?>