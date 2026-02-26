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
            <div id="gog-rev-wrapper" class="glide gog-rev-slider">

                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides glide__slides-gog-rev">

                        <?php foreach ($block->cards()->toStructure() as $card): ?>
                            <div class="glide__slide google-review-card flex-column-gap32">

                                <div class="flex-row-gap15">
                                    <img src="<?= url('assets/icons/google_icon.svg') ?>" width="24px" height="24px" alt="Icon von Google"
                                        loading="lazy">
                                    <img src="<?= url('assets/icons/stars_icon.svg') ?>" width="120px" height="20px" alt="Stern Icon" loading="lazy">
                                </div>

                                <div class="overflow-hidden">
                                    <p class="copy-text-big color-font-darkblue">
                                        <?= $card->text()->toHtml() ?>
                                    </p>
                                </div>

                                <p class="label-big color-font-darkblue">
                                    <?= $card->username()->toHtml() ?>
                                </p>

                            </div>
                        <?php endforeach ?>

                    </div>
                </div>
                <div class="flex-row-between">
                    <div class="pic-slider-dots-wrapper glide__bullets" data-glide-el="controls[nav]">

                        <?php foreach ($block->cards()->toStructure() as $index => $card): ?>
                            <button class="blue-dot-inactive" data-glide-dir="=<?= $index ?>" aria-label="Button springe zu Item">
                            </button>
                        <?php endforeach ?>

                    </div>

                    <div class="flex-row-gap20 glide__arrows" data-glide-el="controls">

                        <button class="btn-slide" data-glide-dir="<" aria-label="Button Item nach Links">
                            <img src="<?= url('assets/icons/arrow_left.svg') ?>" alt="Zurück" loading="lazy">
                        </button>

                        <button class="btn-slide" data-glide-dir=">" aria-label="Button Item nach Rechts">
                            <img src="<?= url('assets/icons/arrow_right.svg') ?>" alt="Weiter" loading="lazy">
                        </button>

                    </div>
                </div>
            </div>

        </div>



    </section>
    <img src="<?= url(path: "assets/layout/layer/brick_layer_right_blue.svg") ?>" class="brick-layer-right-reviews"
        aria-hidden="true">

</div>