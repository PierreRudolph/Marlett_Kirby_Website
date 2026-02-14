<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
<link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
<link rel="manifest" href="assets/favicon/site.webmanifest">
    <?= css([
        'assets/css/fonts.css',
        'assets/css/index.css',
        'assets/css/snippets/header.css',
        'assets/css/snippets/footer.css',
        'assets/css/snippets/nav_menu.css',
        'assets/css/sections.css',
        'assets/css/snippets/blocks/pic_text_cards.css',
    ]) ?>

    <?= js([
        'assets/script/script.js',
    ]) ?>

</head>

<body>
    <div class="outer-wrapper">
        <header>
            <div class="header-content max-width1440">
                <a class="logo" href="<?= $site->url() ?>">
                    <img src="<?= url('assets/icons/marlett_logo.svg') ?>">
                </a>
                <nav>

                    <?php snippet('nav_menu') ?>

                    <?php foreach ($site->children()->listed() as $item): ?>

                        <?php if ($item->title()->esc() != 'Leistungen' && $item->title()->esc() != 'Kontakt'): ?>

                            <a <?php e($item->isOpen(), 'aria-current="page"') ?> href="<?= $item->url() ?>">
                                <?= $item->title()->esc() ?>
                            </a>

                        <?php endif ?>
                    <?php endforeach ?>
                    <a class="btn-pos btn-text" href="<?= url('contact') ?>">Kontakt</a>
                </nav>
            </div>

        </header>
        <main>