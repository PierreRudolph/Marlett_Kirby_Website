<?php snippet('header') ?>

<div class="section-wrapper white-bg">
    <img src="<?= url(path: "assets/layout/layer/brick_layer_left_blue.svg") ?>" class="brick-layer-left">
    <section class="above-fold">
        <div class="section-content mobile-grid-reverse">
            <p class="subheadline-neg">
                <?= $page->subheadline_first_half()->toHtml() ?><span style="margin-left: 4px;font-weight:500;">
                    <?= $page->subheadline_second_half()->toHtml() ?>
                </span>
            </p>
            <div>
                <h1 class="headline headline-xl color-font-blue"><?= $page->headline_first_half()->toHtml() ?><span
                        style="margin-left: 18px;"
                        class="headline headline-xl color-font-skyblue"><?= $page->headline_second_half()->toHtml() ?></span>
                </h1>
            </div>

            <!-- <h1 class="headline headline-xl color-font-lighterblue"><?= $page->headline_second_half()->toHtml() ?></h1> -->
            <p class="copy-text-big color-font-darkblue "><?= $page->text()->toHtml() ?></p>
            <div class="buttons-wrapper">
                <a class="btn-pos btn-text" href="<?= url('contact') ?>">
                    <?= $page->button_contact_text()->toHtml() ?>
                </a>

                <a href="tel:<?= $page->button_phone_number()->toHtml() ?>"
                    class="btn-pos-outlined btn-text btn-with-icon">
                    <img src="<?= url('assets/icons/phone.svg') ?>">
                    <?= $page->button_phone_text()->toHtml() ?>
                </a>

            </div>
            <div class="flex-column-gap5">

                <div class="flex-row-gap15">
                    <img src="<?= url('assets/icons/google_icon.svg') ?>">
                    <img src="<?= url('assets/icons/stars_icon.svg') ?>">
                </div>
                <div class="label color-font-blue">5,0 Sterne Bewertung -<span style="margin-left: 4px;"
                        class="label-underline">20+
                        Bewertungen</span></div>
            </div>
        </div>

        <div class="section-content">



            <?php
            $imageBefore = $page->imageBefore()->toFile();
            $imageAfter = $page->imageAfter()->toFile();
            $ratio = $page->ratio()->or('auto');
            $crop = $page->crop()->isTrue();
            ?>

            <figure id="img-compare" class="comparison-slider-figure" data-ratio="<?= $ratio ?>"
                data-crop="<?= $crop ?>">

                <?php $thumb = $imageBefore->crop(680, 569); ?>
                <div id="img-front-wrapper" class="comparison-slider-before" style="width: 50%">
                    <img draggable="false" class="noselect" src="<?= $thumb->url() ?>" alt="<?= $thumb->alt()->esc() ?>"
                        loading="lazy">

                </div>

                <span id="slider" class="spacer-line">
                    <div class="draggable-button">
                        <img draggable="false" class="noselect" src="<?= url('assets/icons/icon_polygon_left.svg') ?>">
                        <img draggable="false" class="noselect" src="<?= url('assets/icons/icon_polygon_right.svg') ?>">
                    </div>
                </span>

                <?php $thumb = $imageAfter->crop(680, 569); ?>

                <img draggable="false" class="noselect" src="<?= $thumb->url() ?>" alt="<?= $thumb->alt()->esc() ?>"
                    loading="lazy">

            </figure>


            <script>
                const box = document.getElementById("img-compare");
                const front = document.getElementById("img-front-wrapper");
                const slider = document.getElementById("slider");

                slider.addEventListener("pointerdown", e => {
                    slider.setPointerCapture(e.pointerId);
                    move(e);
                });

                slider.addEventListener("pointermove", e => {
                    e.preventDefault();   // <-- verhindert Scrollen auf Touch
                    if (!slider.hasPointerCapture(e.pointerId)) return;
                    move(e);
                });

                slider.addEventListener("pointerup", e => {
                    slider.releasePointerCapture(e.pointerId);
                });

                slider.addEventListener("pointercancel", e => {
                    slider.releasePointerCapture(e.pointerId);
                });

                function move(e) {
                    const rect = box.getBoundingClientRect();
                    let x = e.clientX - rect.left;

                    x = Math.max(0, Math.min(x, rect.width));

                    front.style.width = x + "px";
                    slider.style.left = x + "px";
                };
            </script>


        </div>
    </section>

</div>

<?= $page->blocks()->toBlocks() ?>

<?php snippet(name: 'footer') ?>