<?php $this->layout("_theme", ["head" => $head]); ?>
<section class="container pt-5 pb-5">
    <div class="row">
        <div class="col-12">
            <h2 class="text-orange fw-bold mb-0" title="<?= ($news->title ?? "") ?>"><?= ($news->title ?? "") ?></h2>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= url("/"); ?>" class="text-decoration-none">Página Inicial</a></li>
                    <li class="breadcrumb-item"><a href="<?= url("/noticias"); ?>" class="text-decoration-none">Notícias</a></li>
                    <li class="breadcrumb-item active"><?= ($news->title ?? "") ?> </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-2 mb-2">
            <?= ($news->description ?? "") ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <ul class="list-unstyled">
                <li class="text-orange">Categoria(s):</li>
                <li> <i class="fa-solid fa-list-check me-1 text-orange"></i> <?= ($news->category()->category ?? "") ?></li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="list-unstyled">
                <li class="text-orange">Autor:</li>
                <li> <i class="fa-solid fa-circle-user me-1 text-orange"></i> <?= ("{$news->user()->first_name} {$news->user()->last_name}" ?? "") ?></li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="list-unstyled">
                <li class="text-orange">Publicação:</li>
                <li> <i class="fa-solid fa-calendar-check me-1 text-orange"></i> <?= (date_fmt($news->date, "d/m/Y") ?? "") ?></li>
            </ul>
        </div>
    </div>
</section>