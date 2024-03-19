<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= $head ?>
    <link rel="icon" type="image/gif" href="<?= theme("assets/image/icon.png") ?>" sizes="32x32" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= theme("assets/styles_minify.css") ?>">
</head>

<body>
    <article class="not_found">
        <div class="container content">
            <header class="not_found_header">
                <p class="error">&bull;<?= $error->code; ?>&bull;</p>
                <h1><?= $error->title; ?></h1>
                <p><?= $error->message; ?></p>
                <?php if ($error->link) : ?>
                    <a class="not_found_btn gradient gradient-green gradient-hover transition radius" title="<?= $error->linkTitle; ?>" href="<?= $error->link; ?>"><?= $error->linkTitle; ?></a>
                <?php endif ?>
            </header>
        </div>
    </article>
</body>

<script src="<?= theme("/assets/scripts_minify.js"); ?>"></script>

</html>