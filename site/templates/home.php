<?php snippet(name: 'header') ?>

<div class="section-wrapper blue-radient-bg mobile-padding-above-fold">
    <img src="<?= url(path: "assets/layout/layer/brick_layer_left.svg") ?>" class="brick-layer-left mobile603-d-none" aria-label="hidden"
        fetchpriority="high">
    <section class="above-fold above-fold-home-mobile-gap">



        <div class="section-content mobile-grid-reverse mobile-padding-above-fold-content">
            <img src="<?= url(path: "assets/layout/layer/brick_layer_left.svg") ?>"
                class="brick-layer-left-mobile-home desktop603-d-none" fetchpriority="high" aria-label="hidden" aria-label="hidden">
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
            <div class="flex-column-gap5 marg-top20">

                <div class="flex-row-gap15">
                    <img src="<?= url('assets/icons/google_icon.svg') ?>" alt="Google Icon" loading="lazy" role="img">
                    <img src="<?= url('assets/icons/stars_icon.svg') ?>" alt="Stern Icon" loading="lazy" role="img">
                </div>
                <div class="label color-font-white">5,0 Sterne Bewertung -<a target="blank"
                        href="https://www.google.com/search?sa=X&sca_esv=ad335200c38ab265&hl=de&sxsrf=ANbL-n5fAmUI_Q00NO6pWSE7rGKG2EL7JA:1771848614790&q=Marlett+Steinsanierungen+Rezensionen&rflfq=1&num=20&stick=H4sIAAAAAAAAAONgkxI2MjE3MTI3NDMwMjI3MzIxMDY12cDI-IpRxTexKCe1pEQhuCQ1M684MS8ztag0Lz01TyEotSo1rzgzPy81bxErUcoAY1PFcmgAAAA&rldimm=2474271602276240354&tbm=lcl&ved=2ahUKEwj74p66yu-SAxXNVfEDHR2vJCoQ9fQKegQIXhAG&biw=2560&bih=1300&dpr=1#lkt=LocalPoiReviews"
                        class="label-underline marg-left4 color-font-white">20+
                        Bewertungen</a></div>
            </div>
        </div>


        <div class="section-content">

            <?php if ($video = $page->video()->toFile()): ?>
                <div class="video-home-wrapper">
                    <video aspect-ratio="16/9" playsinline webkit-playsinline id="video-home" autoplay loop muted
                        poster="<?= url('assets/layout/img/video_poster2.webp') ?>" class="section-video">
                        <source src="<?= $video->url() ?>" type="<?= $video->mime() ?>" loading="lazy">
                    </video>

                    <div id="video-pause-btn-home" onclick="pauseVideo('video-home','home')" class="video-play-btn">
                        <img src="<?= url('assets/icons/pause.svg') ?>" alt="Video pausieren Button" loading="lazy"
                            role="img">
                    </div>

                    <div id="video-play-btn-home" onclick="playVideo('video-home','home')" class="video-play-btn d-none-important">
                        <img src="<?= url('assets/icons/play.svg') ?>" alt="Video apspielen Button" loading="lazy"
                            role="img">
                    </div>


                </div>

            <?php endif ?>
        </div>


    </section>
    <img src="<?= url(path: "assets/layout/layer/brick_layer_right.svg") ?>" class="brick-layer-right mobile-pos" aria-label="hidden"
        fetchpriority="high">

</div>
<?= $page->blocks()->toBlocks() ?>

<?php snippet(name: 'footer') ?>