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
                class="comparison-pics-wrapper <?= $show_as_slider ? "pic-slider" : "flex-wrap" ?>">

                <div class="glide__track" data-glide-el="track">

                    <div class="glide__slides glide__slides-comp-pic">
                        <?= $block->blocks()->toBlocks() ?>

                    </div>

                </div>

                <?php if ($show_as_slider): ?>
                    <div class="flex-row-between">
                        <div class="pic-slider-dots-wrapper glide__bullets" data-glide-el="controls[nav]">

                            <?php foreach ($block->blocks()->toBlocks() as $index => $card): ?>
                                <button class="blue-dot-inactive" data-glide-dir="=<?= $index ?>">
                                </button>
                            <?php endforeach ?>

                        </div>

                        <div class="flex-row-gap20 glide__arrows" data-glide-el="controls">

                            <button class="btn-slide" data-glide-dir="<">
                                <img src="<?= url('assets/icons/arrow_left.svg') ?>" alt="Zurück" loading="lazy">
                            </button>

                            <button class="btn-slide" data-glide-dir=">">
                                <img src="<?= url('assets/icons/arrow_right.svg') ?>" alt="Weiter" loading="lazy">
                            </button>

                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>

        <div class="flex-column grid-full">
            <h4 class="text-headline-manrope color-font-darkblue-alt2">
                <?= $block->comparison_pics_label_headline()->toHtml() ?>
            </h4>
            <p class="text-regular color-font-darkblue-alt2"><?= $block->comparison_pics_label_text()->toHtml() ?></p>
        </div>
    </section>

</div>