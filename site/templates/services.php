<?php snippet('header') ?>

<div class="section-wrapper white-bg">
    <img src="<?= url(path: "assets/layout/layer/brick_layer_left_blue.svg") ?>" class="brick-layer-left">
    <section class="above-fold">
        <div class="section-content">

            <div>
                <h1 class="headline headline-xl color-font-blue"><?= $page->headline_first_half()->toHtml() ?><span
                        class="headline headline-xl color-font-skyblue marg-left18"><?= $page->headline_second_half()->toHtml() ?></span>
                </h1>
            </div>

            <!-- <h1 class="headline headline-xl color-font-lighterblue"><?= $page->headline_second_half()->toHtml() ?></h1> -->
            <p class="copy-text-big color-font-darkblue "><?= $page->text()->toHtml() ?></p>
            <div class="buttons-wrapper">
                <a class="btn-pos btn-text m-btn-width" href="<?= url('kontakt') ?>">
                    <?= $page->button_contact_text()->toHtml() ?>
                </a>

                <a href="tel:<?= $site->phone()->toHtml() ?>"
                    class="btn-pos-outlined btn-text btn-with-icon m-btn-width">
                    <img src="<?= url('assets/icons/phone_negativ.svg') ?>" alt="Telefon Icon" loading="lazy" role="img">
                    <?= $page->button_phone_text()->toHtml() ?>
                </a>

            </div>
            <div class="flex-column-gap5">

                <div class="flex-row-gap15">
                    <img src="<?= url('assets/icons/google_icon.svg') ?>" alt="Google Icon" loading="lazy" role="img">
                    <img src="<?= url('assets/icons/stars_icon.svg') ?>" alt="Google Icon" loading="lazy" role="img">
                </div>
                <div class="label color-font-blue">5,0 Sterne Bewertung -<span
                        class="label-underline marg-left4">20+
                        Bewertungen</span></div>
            </div>
        </div>

        <div class="section-content">
            <?php if ($img = $page->img()->toFile()): ?>
                <div class="services-pic">
                    <img src="<?= $img->url() ?>" alt="<?= $img->alt() ?>" loading="lazy" role="img">
                </div>
            <?php endif ?>
        </div>
    </section>

</div>

<?= $page->blocks()->toBlocks() ?>

<?php snippet(name: 'footer') ?>