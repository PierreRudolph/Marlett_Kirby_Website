<div class="section-wrapper lightgrey-bg" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap48 overflow-visible">

        <div class="flex-column-gap24 grid-middle">
            <h2 class="headline headline-l color-font-blue reasons-headline">
                <?= $block->headline_first_half()->toHtml() ?><br>
                <span class="headline headline-l color-font-skyblue">
                    <?= $block->headline_second_half()->toHtml() ?>
                </span>
            </h2>
        </div>

        <div class="grid-full flex-column-gap20">
            <div style="transform: translateX(0);" id="gog-rev-wrapper"
                class="comparison-pics-wrapper flex-row-start-gap20 ">

                <?php foreach ($block->cards()->toStructure() as $card): ?>
                    <div class="google-review-card flex-column-gap32">

                        <div class="flex-row-gap15">
                            <img src="<?= url('assets/icons/google_icon.svg') ?>">
                            <img src="<?= url('assets/icons/stars_icon.svg') ?>">
                        </div>


                        <div class="overflow-hidden">
                            <p class="copy-text-big color-font-darkblue"><?= $card->text()->toHtml() ?></p>
                        </div>

                        <p class="label-big color-font-darkblue"><?= $card->username()->toHtml() ?></p>

                    </div>
                <?php endforeach ?>

            </div>

            <div class="flex-row-between">
                <div class="flex-row-gap10">
                    <span id="blue-dot-rev-1" class="blue-dot-inactive blue-dot-active"></span>
                    <span id="blue-dot-rev-2" class="blue-dot-inactive"></span>
                    <span id="blue-dot-rev-3" class="blue-dot-inactive"></span>
                    <span id="blue-dot-rev-4" class="blue-dot-inactive"></span>
                    <span id="blue-dot-rev-5" class="blue-dot-inactive"></span>
                    <span id="blue-dot-rev-6" class="blue-dot-inactive"></span>
                    <span id="blue-dot-rev-7" class="blue-dot-inactive"></span>
                </div>


                <div class="flex-row-gap20">
                    <button class="btn-slide" onclick="slideReviewsBackward()"><img
                            src="<?= url('assets/icons/arrow_left.svg') ?>"></button>
                    <button class="btn-slide" onclick="slideReviewsForward()"><img
                            src="<?= url('assets/icons/arrow_right.svg') ?>"></button>
                </div>
            </div>
        </div>

        <div class="flex-column grid-full">
            <h4 class="label-alt-headline color-font-darkblue-alt2">
                <?= $block->comparison_pics_label_headline()->toHtml() ?>
            </h4>
            <p class="label-alt-text color-font-darkblue-alt2"><?= $block->comparison_pics_label_text()->toHtml() ?></p>
        </div>

    </section>
    <img src="<?= url(path: "assets/layout/layer/brick_layer_right_blue.svg") ?>" class="brick-layer-right-reviews">

</div>