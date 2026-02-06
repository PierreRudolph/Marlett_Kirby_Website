<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">

    <?= css([
        'assets/css/fonts.css',
        'assets/css/index.css',
        'assets/css/snippets/header.css',
        'assets/css/snippets/footer.css',
        'assets/css/snippets/nav_menu.css',
        'assets/css/sections.css',
        'assets/css/snippets/blocks/pic_text_cards.css',
    ]) ?>

    <?= js(['assets/script/snippets/nav_menu.js', 'assets/script/snippets/pic_slider.js']) ?>

</head>

<body>
    <div class="outer-wrapper">
        <header>
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
        </header>
        <main>