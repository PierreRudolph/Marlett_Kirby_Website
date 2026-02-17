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
        'assets/css/snippets/nav_menu.css',
        'assets/css/sections.css',
        'assets/css/snippets/blocks/pic_text_cards.css',
        'assets/css/mobile.css'
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
                    <img src="<?= $site->header_icon()->toFile()->url() ?>">
                </a>

                <nav>

                    <div class="mobile800-d-none">
                        <?php snippet('nav_menu') ?>

                        <?php foreach ($site->children()->listed() as $item): ?>

                            <?php if (
                                $item->title()->esc() != 'Leistungen' &&
                                $item->title()->esc() != 'Kontakt' &&
                                $item->title()->esc() != 'Home'
                            ): ?>

                                <a <?php e($item->isOpen(), 'aria-current="page"') ?> href="<?= $item->url() ?>">
                                    <?= $item->title()->esc() ?>
                                </a>

                            <?php endif ?>
                        <?php endforeach ?>
                    </div>

                    <a class="btn-pos btn-text" href="<?= url('contact') ?>">Kontakt</a>

                    <label class="menu-toggle desktop800-d-none">

                        <input type="checkbox" style="display:none;">
                        <div class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </label>
                </nav>
            </div>

        </header>
        <div class="mobile-nav-menu desktop800-d-none">
            <div>
                <?php snippet('nav_menu') ?>
                <hr>
                <?php foreach ($site->children()->listed() as $item): ?>

                    <?php if (
                        $item->title()->esc() != 'Leistungen' &&
                        $item->title()->esc() != 'Home'
                    ): ?>

                        <a class="mobile-headline-xs" <?php e($item->isOpen(), 'aria-current="page"') ?>
                            href="<?= $item->url() ?>">
                            <?= $item->title()->esc() ?>
                        </a>
                        <hr>
                    <?php endif ?>
                <?php endforeach ?>
            </div>

            <div class="flex-column-gap16">
                <?php if ($site->email()->value() !== ""): ?>
                    <div class="contact-option lightgrey-bg flex-row-gap24">

                        <div class="icon-blue-bg">
                            <img src="<?= url('assets/icons/icon_mail.svg') ?>">
                        </div>

                        <a class="color-font-darkblue-alt2 mobile-subheadline"
                            href="mailto:<?= $site->email()->toString() ?>">
                            <?= $site->email()->toString() ?>
                        </a>
                    </div>
                <?php endif ?>

                <?php if ($site->phone()->value() !== ""): ?>
                    <div class="contact-option lightgrey-bg flex-row-gap24">

                        <div class="icon-blue-bg">
                            <img src="<?= url('assets/icons/phone.svg') ?>">
                        </div>

                        <a class="color-font-darkblue-alt2 mobile-subheadline" href="tel:<?= $site->phone()->toHtml() ?>">
                            <?= $site->phone()->toHtml() ?>
                        </a>
                    </div>
                <?php endif ?>

                <?php if ($site->whatsapp()->value() !== ""): ?>
                    <div class="contact-option lightgrey-bg flex-row-gap24">

                        <div class="icon-blue-bg">
                            <img src="<?= url('assets/icons/icon_whatsapp.svg') ?>">
                        </div>

                        <a class="color-font-darkblue-alt2 mobile-subheadline"
                            href="https://wa.me/<?= $site->whatsapp()->toHtml() ?>">
                            Whatsapp Chat Starten
                        </a>
                    </div>
                <?php endif ?>
            </div>

            <div class="mobile-nav-menu-social">
                <?php foreach ($site->social_links()->toStructure() as $social_link): ?>

                    <a href="<?= $social_link->link()->toHtml() ?>">
                        <?php if ($image = $social_link->icon_mobile()->toFile()): ?>
                            <img src="<?= $image->url() ?>">
                        <?php endif ?>
                    </a>

                <?php endforeach ?>


            </div>

        </div>
        <main>