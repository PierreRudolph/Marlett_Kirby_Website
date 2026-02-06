<?php snippet('header') ?>

<div class="section-wrapper blue-radient-bg">
    <img src="<?= url(path: "assets/layout/layer/brick_layer_left.svg") ?>" class="brick-layer-left">
    <section class="above-fold">
        <div class="section-content">
            <p class="subheadline"><?= $page->subheadline_first_half()->toHtml() ?><span
                    style="margin-left: 4px;font-weight:500;"><?= $page->subheadline_second_half()->toHtml() ?></span>
            </p>
            <div>
                <h1 class="headline headline-xl color-font-white"><?= $page->headline_first_half()->toHtml() ?><span
                        style="margin-left: 18px;"
                        class="headline headline-xl color-font-lighterblue"><?= $page->headline_second_half()->toHtml() ?></span>
                </h1>
            </div>

            <!-- <h1 class="headline headline-xl color-font-lighterblue"><?= $page->headline_second_half()->toHtml() ?></h1> -->
            <p class="copy-text-big color-font-white"><?= $page->text()->toHtml() ?></p>
            <div class="buttons-wrapper">
                <a class="btn-neg btn-text" href="<?= url('contact') ?>">
                    <?= $page->button_contact_text()->toHtml() ?>
                </a>

                <a href="tel:<?= $page->button_phone_number()->toHtml() ?>"
                    class="btn-neg-outlined btn-text btn-with-icon">
                    <img src="<?= url('assets/icons/phone.svg') ?>">
                    <?= $page->button_phone_text()->toHtml() ?>
                </a>

            </div>
            <div class="flex-column-gap5">

                <div class="flex-row-gap15">
                    <img src="<?= url('assets/icons/google_icon.svg') ?>">
                    <img src="<?= url('assets/icons/stars_icon.svg') ?>">
                </div>
                <div class="label color-font-white">5,0 Sterne Bewertung -<span style="margin-left: 4px;"
                        class="label-underline">20+
                        Bewertungen</span></div>
            </div>
        </div>

        <div class="section-content">

            <?php foreach ($page->videos() as $video): ?>
                <video controls poster="<?= url('assets/layout/img/video_poster.png') ?>" class="section-video">
                    <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>">
                </video>
            <?php endforeach ?>
        </div>
    </section>
    <img src="<?= url(path: "assets/layout/layer/brick_layer_right.svg") ?>" class="brick-layer-right">

</div>

<?= $page->blocks()->toBlocks() ?>

<?php snippet('footer') ?>