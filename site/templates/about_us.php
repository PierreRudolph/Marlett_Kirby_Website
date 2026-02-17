<?php snippet('header') ?>

<div class="section-wrapper white-bg">
    <img src="<?= url(path: "assets/layout/layer/brick_layer_left_blue.svg") ?>" class="brick-layer-left">
    <section class="above-fold-gap120">

        <div class="section-gap64 grid-full" style="align-items: center;">
            <div class="section-content">

                <h1 class="headline headline-xl color-font-skyblue"><?= $page->headline_first_half()->toHtml() ?>
                    <br>
                    <span
                        class="headline headline-xl color-font-blue"><?= $page->headline_second_half()->toHtml() ?></span>
                </h1>

                <p class="text-regular500 color-font-darkblue "><?= $page->text_top()->toHtml() ?></p>
                <p class="text-regular500 color-font-darkblue ">
                    <?= $page->text_bottom()->toHtml() ?>
                </p>

                <a class="btn-pos btn-text" href="<?= url('kontakt') ?>">
                    <?= $page->button_contact_text()->toHtml() ?>
                </a>

            </div>

            <div class="section-content">
                <?php
                $ratio = $page->ratio()->or('auto');
                $crop = $page->crop()->isTrue();
                ?>
                <?php if ($image = $page->img()->toFile()): ?>

                    <figure data-ratio="<?= $ratio ?>" data-crop="<?= $crop ?>">
                        <?php $thumb = $image->crop(680, 567); ?>
                        <img class="mobile-width" src="<?= $thumb->url() ?>" alt="<?= $thumb->alt()->esc() ?>" loading="lazy">
                    </figure>
                <?php endif ?>

            </div>

        </div>

        <div class="section-content-row-gap24">
            <?php $big_numbers = $page->big_numbers()->toStructure() ?>
            <?php foreach ($big_numbers as $big_number): ?>
                <div class="big-number-card flex-column-gap24 blue-radient-bg">
                    <h4 class="headline headline-xxl color-font-white"><?= $big_number->number()->toHtml() ?></h4>
                    <p class="headline headline-s color-font-lighterblue"><?= $big_number->text()->toHtml() ?></p>
                </div>
            <?php endforeach ?>

        </div>

    </section>

</div>

<?= $page->blocks()->toBlocks() ?>

<?php snippet(name: 'footer') ?>