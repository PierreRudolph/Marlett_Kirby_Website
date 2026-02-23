<?php $show_as_slider = $block->comparison_pics_as_slider()->isTrue() ?>
<div class="section-wrapper" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap48 overflow-visible">

        <div class="flex-column-gap24 grid-middle">
            <h2 class="headline headline-l color-font-darkblue-alt reasons-headline">
                <?= $block->headline_first_half()->toHtml() ?><br>
                <span class="headline headline-l color-font-skyblue">
                    <?= $block->headline_second_half()->toHtml() ?>
                </span>
            </h2>
            <?php if ($show_as_slider): ?>
                <a class="link-text flex-row-gap5 color-font-blue" href="<?= $block->link_about_us_url()->toUrl() ?>">
                    <?= $block->link_about_us_text()->toHtml() ?>
                    <img src="<?= url('assets/icons/arrow_forward.svg') ?>" alt="Icon Pfeil nach Rechts" loading="lazy"
                        role="img">
                </a>
            <?php endif ?>
        </div>

        <div class="grid-full flex-column-gap20">
            <div id="comp-pic-wrapper"
                class="comparison-pics-wrapper flex-row-gap20 <?= $show_as_slider ? "" : "flex-wrap" ?>">
                <?= $block->blocks()->toBlocks() ?>
            </div>
            <?php if ($show_as_slider): ?>
                <div class="flex-row-between">
                    <div class="pic-slider-dots-wrapper">
                        <span id="blue-dot-1" class="blue-dot-inactive blue-dot-active"></span>
                        <span id="blue-dot-2" class="blue-dot-inactive"></span>
                        <span id="blue-dot-3" class="blue-dot-inactive"></span>
                        <span id="blue-dot-4" class="blue-dot-inactive"></span>
                        <span id="blue-dot-5" class="blue-dot-inactive"></span>
                        <span id="blue-dot-6" class="blue-dot-inactive"></span>
                        <span id="blue-dot-7" class="blue-dot-inactive"></span>
                    </div>

                    <div class="flex-row-gap20">
                        <button class="btn-slide" onclick="slidePicsBackward()"><img alt="Icon Pfeil nach Links"
                                loading="lazy" role="img" src="<?= url('assets/icons/arrow_left.svg') ?>"></button>
                        <button class="btn-slide" onclick="slidePicsForward()"><img alt="Icon Pfeil nach Rechts"
                                loading="lazy" role="img" src="<?= url('assets/icons/arrow_right.svg') ?>"></button>
                    </div>
                </div>
            <?php endif ?>
        </div>


        <div class="flex-column grid-full">
            <h4 class="text-headline-manrope color-font-darkblue-alt2">
                <?= $block->comparison_pics_label_headline()->toHtml() ?>
            </h4>
            <p class="text-regular color-font-darkblue-alt2"><?= $block->comparison_pics_label_text()->toHtml() ?></p>
        </div>
    </section>

</div>