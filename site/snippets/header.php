<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $site->title()->esc() ?> | <?= $page->title()->esc() ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= url('assets/favicon/apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= url('assets/favicon/favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= url('assets/favicon/favicon-16x16.png') ?>">
    <link rel="manifest" href="<?= url('assets/favicon/site.webmanifest') ?>">
    <link rel="canonical" href="<?= $site->url() ?>">

    <!-- ------META----- -->
    <meta name="description" content="<?= $site->meta_description() ?>">
    <meta name="robots" content="index, follow">

    <meta property="og:url" content="<?= $site->url() ?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?= $page->title() ?>">
    <meta property="og:description" content="<?= $site->meta_description() ?>">
    <meta property="og:image" content="<?= $site->meta_img() ?>">

    <meta name="twitter:card" content="summary_large_image">
    <meta property="twitter:domain" content="<?= $site->url() ?>">
    <meta property="twitter:url" content="<?= $site->url() ?>">
    <meta name="twitter:title" content="<?= $site->meta_title() ?>">
    <meta name="twitter:description" content="<?= $site->meta_description() ?>">
    <meta name="twitter:image" content="<?= $site->meta_img() ?>">

    <meta name="theme-color" content="#ffffff">
    <meta name="referrer" content="strict-origin-when-cross-origin">

    <!-- ------META END----- -->

    <!-- STRUCTURED DATA -->

    <?php
    // LocalBusiness JSON-LD aus Site-Feldern generieren
    
    $companyName = $site->company_name()->value();
    $street = $site->street()->value();
    $houseNumber = $site->house_number()->value();
    $image = $site->meta_img()->toFile()->url();
    $zip = $site->zip()->value();
    $city = $site->city()->value();
    $url = $site->url(); // Website-URL
    $telephone = $site->phone_line()->value() ?? ''; // optional, falls du ein Feld für Telefon hast
    $mobileTelephone = $site->phone()->value();

    $fullStreet = trim($street . ' ' . $houseNumber);

    $localBusiness = [
        "@context" => "https://schema.org",
        "@type" => "LocalBusiness",
        "name" => $companyName,
        "url" => $url,
        "telephone" => $telephone,
        "mobile" => $mobileTelephone,
        "image" => $image,
        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => $fullStreet,
            "addressLocality" => $city,
            "postalCode" => $zip,
            "addressCountry" => "DE"
        ]
    ];
    ?>

    <?php if (!empty($companyName)): ?>
        <script type="application/ld+json">
                            <?= json_encode($localBusiness, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
                            </script>
    <?php endif ?>


    <!-- STRUCTURED DATA END -->
    <?= css([
        'assets/css/glide_js/glide.core.min.css',
        'assets/css/glide_js/glide.theme.min.css',
        'assets/css/fonts.css',
        'assets/css/index.css',
        'assets/css/snippets/header.css',
        'assets/css/snippets/nav_menu.css',
        'assets/css/sections.css',
        'assets/css/mobile.css'
    ], ) ?>

    <?= js([
        'assets/script/script.js',
    ]) ?>

</head>

<body onload="initiateHomeVideo()">
    <div class="outer-wrapper">
        <header>

            <div class="header-content max-width1440">
                <a class="logo" href="<?= $site->url() ?>">
                    <?php $img = $site->header_icon()->toFile() ?>
                    <img src="<?= $img->url() ?>" alt="<?= $img->alt() ?>" loading="lazy" role="img">
                </a>

                <nav>

                    <div class="mobile800-d-none">
                        <?php snippet('nav_menu') ?>

                        <?php foreach ($site->children()->listed() as $item): ?>

                            <?php if (
                                $item->title()->esc() != 'Datenschutzerklärung' &&
                                $item->title()->esc() != 'Impressum' &&
                                $item->title()->esc() != 'agb' &&
                                $item->title()->esc() != 'Leistungen' &&
                                $item->title()->esc() != 'Kontakt' &&
                                $item->title()->esc() != 'Home'
                            ): ?>

                                <a class="header-link-text" <?php e($item->isOpen(), 'aria-current="page"') ?>
                                    href="<?= $item->url() ?>">
                                    <?= $item->title()->esc() ?>
                                </a>

                            <?php endif ?>
                        <?php endforeach ?>
                    </div>

                    <a class="header-contact-btn" href="<?= url('kontakt') ?>">Kontakt</a>

                    <label class="menu-toggle desktop800-d-none">

                        <input type="checkbox">
                        <div class="hamburger">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </label>
                </nav>
            </div>

            <div class="mobile-nav-menu desktop800-d-none">
                <div>
                    <?php snippet('nav_menu') ?>
                    <hr>
                    <?php foreach ($site->children()->listed() as $item): ?>

                        <?php if (
                            $item->title()->esc() != 'Datenschutzerklärung' &&
                            $item->title()->esc() != 'Impressum' &&
                            $item->title()->esc() != 'agb' &&
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
                                <img src="<?= url('assets/icons/icon_mail.svg') ?>" alt="Email Icon" loading="lazy"
                                    role="img">
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
                                <img src="<?= url('assets/icons/phone.svg') ?>" alt="Telefon Icon" loading="lazy"
                                    role="img">
                            </div>

                            <a class="color-font-darkblue-alt2 mobile-subheadline"
                                href="tel:<?= $site->phone()->toHtml() ?>">
                                <?= $site->phone()->toHtml() ?>
                            </a>
                        </div>
                    <?php endif ?>

                    <?php if ($site->whatsapp()->value() !== ""): ?>
                        <div class="contact-option lightgrey-bg flex-row-gap24">

                            <div class="icon-blue-bg">
                                <img src="<?= url('assets/icons/icon_whatsapp.svg') ?>" alt="Icon von WhatsApp"
                                    loading="lazy" role="img">
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
                                <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" role="img">
                            <?php endif ?>
                        </a>

                    <?php endforeach ?>


                </div>

            </div>
        </header>

        <main>