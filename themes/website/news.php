<?php $this->layout("_theme", ["head" => $head]); ?>
<section class="container pt-5 pb-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-orange fw-bold mb-0">Notícias</h1>
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?= url("/"); ?>" class="text-decoration-none">Página Inicial</a></li>
                    <li class="breadcrumb-item active">Notícias </li>
                </ol>
            </nav>
        </div>
    </div>
    <?php
    if (!empty($news)) :
        foreach ($news as $newsItem) :
    ?>
            <div class="row posts">
                <div class="col-md-4">
                    <img src="<?= image($newsItem->image, 300, 240) ?>" alt="<?= ($newsItem->title ?? "") ?>" class="img-post">
                </div>
                <div class="col-md-8">

                    <h4 class="mt-sm-2"><a href="<?= url("/noticias/{$newsItem->slug}") ?>" class="text-decoration-none text-orange fw-bold" title="<?= ($newsItem->title ?? "") ?>"><?= ($newsItem->title ?? "") ?></a></h4>

                    <p><?= str_limit_chars(($newsItem->subtitle ?? ""), 250) ?> <a href="<?= url("/noticias/{$newsItem->slug}") ?>" class="text-decoration-none text-orange">continue lendo »</a></p>
                    <div class="row">
                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <li class="text-orange">Categoria(s):</li>
                                <li> <i class="fa-solid fa-list-check me-1 text-orange"></i> <?= ($newsItem->category()->category ?? "") ?></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <li class="text-orange">Autor:</li>
                                <li> <i class="fa-solid fa-circle-user me-1 text-orange"></i> <?= ("{$newsItem->user()->first_name} {$newsItem->user()->last_name}" ?? "") ?></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled">
                                <li class="text-orange">Publicação:</li>
                                <li> <i class="fa-solid fa-calendar-check me-1 text-orange"></i> <?= (date_fmt($newsItem->date, "d/m/Y") ?? "") ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        endforeach;
    endif;
    ?>
</section>