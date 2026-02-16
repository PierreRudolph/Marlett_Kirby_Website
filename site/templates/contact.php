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
            <p class="label-alt-headline color-font-white"><?= $page->text_top()->toHtml() ?></p>

            <p class="copy-text-big color-font-white"><?= $page->text_bottom()->toHtml() ?></p>


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

            <?php snippet(name: 'contact_form') ?>

        </div>
    </section>
    <img src="<?= url(path: "assets/layout/layer/brick_layer_right.svg") ?>" class="brick-layer-right">

</div>

<?= $page->blocks()->toBlocks() ?>

<?php snippet(name: 'footer') ?>