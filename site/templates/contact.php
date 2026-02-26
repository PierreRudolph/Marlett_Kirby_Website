<?php snippet('header') ?>

<div class="section-wrapper blue-radient-bg">
    <img src="<?= url(path: "assets/layout/layer/brick_layer_left.svg") ?>" class="brick-layer-left" aria-hidden="true">
    <section class="above-fold">
        <div class="section-content">
            <p class="subheadline"><?= $page->subheadline_first_half()->toHtml() ?>
            <span class="subheadline-second-half"><?= $page->subheadline_second_half()->toHtml() ?></span>
            </p>
            <div>
                <h1 class="headline headline-xl color-font-white"><?= $page->headline_first_half()->toHtml() ?><span
                        class="headline headline-xl color-font-lighterblue marg-left9"><?= $page->headline_second_half()->toHtml() ?></span>
                </h1>
            </div>

            <!-- <h1 class="headline headline-xl color-font-lighterblue"><?= $page->headline_second_half()->toHtml() ?></h1> -->
            <p class="label-alt-headline color-font-white"><?= $page->text_top()->toHtml() ?></p>

            <p class="copy-text-big color-font-white"><?= $page->text_bottom()->toHtml() ?></p>


            <div class="flex-column-gap5 marg-top20">

                <div class="flex-row-gap15">
                    <img src="<?= url('assets/icons/google_icon.svg') ?>" width="24px" height="24px" alt="Icon von Google loading="lazy" role="img">
                    <img src="<?= url('assets/icons/stars_icon.svg') ?>" width="120px" height="20px" alt="Icon Stern" loading="lazy" role="img">
                </div>
                 <div class="label color-font-white">5,0 Sterne Bewertung -<a target="blank"
                        href="https://www.google.com/search?sa=X&sca_esv=ad335200c38ab265&hl=de&sxsrf=ANbL-n5fAmUI_Q00NO6pWSE7rGKG2EL7JA:1771848614790&q=Marlett+Steinsanierungen+Rezensionen&rflfq=1&num=20&stick=H4sIAAAAAAAAAONgkxI2MjE3MTI3NDMwMjI3MzIxMDY12cDI-IpRxTexKCe1pEQhuCQ1M684MS8ztag0Lz01TyEotSo1rzgzPy81bxErUcoAY1PFcmgAAAA&rldimm=2474271602276240354&tbm=lcl&ved=2ahUKEwj74p66yu-SAxXNVfEDHR2vJCoQ9fQKegQIXhAG&biw=2560&bih=1300&dpr=1#lkt=LocalPoiReviews"
                        class="label-underline marg-left4 color-font-white">20+
                        Bewertungen</a></div>
            </div>
        </div>

        <div class="section-content">

            <?php snippet(name: 'contact_form') ?>

        </div>
    </section>
    <img src="<?= url(path: "assets/layout/layer/brick_layer_right.svg") ?>" class="brick-layer-right" aria-hidden="true">

</div>

<?= $page->blocks()->toBlocks() ?>

<?php snippet(name: 'footer') ?>