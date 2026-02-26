<?php snippet('header') ?>

<div class="section-wrapper white-bg">
    <img src="<?= url(path: "assets/layout/layer/brick_layer_left_blue.svg") ?>" class="brick-layer-left" aria-hidden="true">
    <section class="above-fold">
        <div class="section-content">
            <p class="subheadline-neg">
                <?= $page->subheadline_first_half()->toHtml() ?><span class="subheadline-second-half">
                    <?= $page->subheadline_second_half()->toHtml() ?>
                </span>
            </p>
            <div>
                <h1 class="headline headline-xl color-font-blue"><?= $page->headline_first_half()->toHtml() ?><span
                        class="headline headline-xl color-font-skyblue marg-left9"><?= $page->headline_second_half()->toHtml() ?></span>
                </h1>
            </div>

            <!-- <h1 class="headline headline-xl color-font-lighterblue"><?= $page->headline_second_half()->toHtml() ?></h1> -->
            <p class="copy-text-big color-font-darkblue "><?= $page->text_top()->toHtml() ?></p>
            <p class="copy-text-big color-font-darkblue ">
                <?= $page->text_bottom()->toHtml() ?>
            </p>

            <div class="buttons-wrapper">
                <a class="btn-pos btn-text m-btn-width" href="<?= url('kontakt') ?>">
                    <?= $page->button_contact_text()->toHtml() ?>
                </a>

                <a href="tel:<?= $site->phone()->toHtml() ?>"
                    class="btn-pos-outlined btn-text btn-with-icon m-btn-width">
                    <img src="<?= url('assets/icons/phone_negativ.svg') ?>" width="24px" height="24px alt="Telefon Icon" loading="lazy"
                        role="img">
                    <?= $page->button_phone_text()->toHtml() ?>
                </a>

            </div>
            <div class="flex-column-gap5 marg-top20">

                <div class="flex-row-gap15">
                    <img src="<?= url('assets/icons/google_icon.svg') ?>" width="24px" height="24px" alt="Google Icon" loading="lazy" role="img">
                    <img src="<?= url('assets/icons/stars_icon.svg') ?>" width="120px" height="20px" alt="Stern Icon" loading="lazy" role="img">
                </div>
                   <div class="label color-font-blue">5,0 Sterne Bewertung -<a target="blank"
                        href="https://www.google.com/search?sa=X&sca_esv=ad335200c38ab265&hl=de&sxsrf=ANbL-n5fAmUI_Q00NO6pWSE7rGKG2EL7JA:1771848614790&q=Marlett+Steinsanierungen+Rezensionen&rflfq=1&num=20&stick=H4sIAAAAAAAAAONgkxI2MjE3MTI3NDMwMjI3MzIxMDY12cDI-IpRxTexKCe1pEQhuCQ1M684MS8ztag0Lz01TyEotSo1rzgzPy81bxErUcoAY1PFcmgAAAA&rldimm=2474271602276240354&tbm=lcl&ved=2ahUKEwj74p66yu-SAxXNVfEDHR2vJCoQ9fQKegQIXhAG&biw=2560&bih=1300&dpr=1#lkt=LocalPoiReviews"
                        class="label-underline marg-left4 color-font-blue">20+
                        Bewertungen</a></div>
            </div>
        </div>

        <div class="section-content">
            <?php
            $imageBefore = $page->imageBefore()->toFile();
            $imageAfter = $page->imageAfter()->toFile();
            ?>

            <img-comparison-slider class="img-comparison-slider" data-start="50" data-orientation="horizontal">

                <?php $thumb = $imageBefore ?>
                <img slot="first" src="<?= $thumb->url() ?>" alt="<?= $thumb->alt()->esc() ?>" loading="lazy"
                    role="img">


                <?php $thumb = $imageAfter->crop(680, 569); ?>

                <img slot="second" src="<?= $thumb->url() ?>" alt="<?= $thumb->alt()->esc() ?>" loading="lazy"
                    role="img">

                <div slot="handle" class="draggable-button noselect">
                    <img draggable="false" class="noselect" src="<?= url('assets/icons/icon_polygon_left.svg') ?>"
                        alt="Pfeil nach Links" loading="lazy" role="img">
                    <img draggable="false" class="noselect" src="<?= url('assets/icons/icon_polygon_right.svg') ?>"
                        alt="Pfeil nach Rechts" loading="lazy" role="img">
                </div>

            </img-comparison-slider>

        </div>
    </section>

</div>

<?= $page->blocks()->toBlocks() ?>

<?php snippet(name: 'footer') ?>