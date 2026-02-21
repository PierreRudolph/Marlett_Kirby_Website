<?php snippet(name: 'header') ?>

<div class="section-wrapper blue-radient-bg mobile-padding-above-fold">
    <img src="<?= url(path: "assets/layout/layer/brick_layer_left.svg") ?>" class="brick-layer-left"
        fetchpriority="high">
    <section class="above-fold">



        <div class="section-content mobile-grid-reverse mobile-padding-above-fold-content">
            <p class="subheadline"><?= $page->subheadline_first_half()->toHtml() ?><span
                    class="subheadline-second-half"><?= $page->subheadline_second_half()->toHtml() ?></span>
            </p>
            <div>
                <h1 class="headline headline-xl color-font-white"><?= $page->headline_first_half()->toHtml() ?>
                    <span class="headline headline-xl color-font-lighterblue">
                        <?= $page->headline_second_half()->toHtml() ?></span>
                </h1>
            </div>

            <!-- <h1 class="headline headline-xl color-font-lighterblue"><?= $page->headline_second_half()->toHtml() ?></h1> -->
            <p class="copy-text-big color-font-white"><?= $page->text()->toHtml() ?></p>
            <div class="buttons-wrapper">
                <a class="btn-neg btn-text m-btn-width" href="<?= url('kontakt') ?>">
                    <?= $page->button_contact_text()->toHtml() ?>
                </a>

                <a href="tel:<?= $site->phone()->toHtml() ?>"
                    class="btn-neg-outlined btn-text btn-with-icon m-btn-width">
                    <img src="<?= url('assets/icons/phone.svg') ?>" alt="Telefon Icon" loading="lazy" role="img">
                    <?= $page->button_phone_text()->toHtml() ?>
                </a>

            </div>
            <div class="flex-column-gap5">

                <div class="flex-row-gap15">
                    <img src="<?= url('assets/icons/google_icon.svg') ?>" alt="Google Icon" loading="lazy" role="img">
                    <img src="<?= url('assets/icons/stars_icon.svg') ?>" alt="Stern Icon" loading="lazy" role="img">
                </div>
                <div class="label color-font-white">5,0 Sterne Bewertung -<span 
                        class="label-underline marg-left4">20+
                        Bewertungen</span></div>
            </div>
        </div>


        <div class="section-content">

            <?php if ($video = $page->video()->toFile()): ?>
                <div class="video-home-wrapper">
                    <video id="video-home" autoplay="true" muted poster="<?= url('assets/layout/img/video_poster2.webp') ?>"
                        class="section-video">
                        <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>" loading="lazy">
                    </video>
                    <div onclick="pauseVideo('video-home')" class="video-play-btn"><img src="<?= url('assets/icons/pause.svg') ?>" alt="Videoapspiel Button" loading="lazy" role="img"></div>

                </div>

            <?php endif ?>
        </div>


    </section>
    <img src="<?= url(path: "assets/layout/layer/brick_layer_right.svg") ?>" class="brick-layer-right"
        fetchpriority="high">

</div>
<?= $page->blocks()->toBlocks() ?>

<?php snippet(name: 'footer') ?>