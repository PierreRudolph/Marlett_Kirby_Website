<div class="section-wrapper blue-radient-bg" id="<?= $block->section_id()->toHtml() ?>">
    <img src="<?= url(path: "assets/layout/layer/brick_layer_left.svg") ?>" class="brick-layer-left">

    <section class="section-gap48">

        <div class="flex-column-gap24">
            <h2 class="headline headline-l color-font-white reasons-headline">
                <?= $block->headline_first_half()->toHtml() ?>
                <br>
                <span class="headline headline-l color-font-lighterblue">
                    <?= $block->headline_second_half()->toHtml() ?>
                </span>
            </h2>

            <a class="link-text flex-row-gap5 color-font-white" href="<?= $block->link_about_us_url()->toUrl() ?>">
                <?= $block->link_about_us_text()->toHtml() ?>
                <img src="<?= url('assets/icons/arrow_forward.svg') ?>">
            </a>
        </div>


        <div class="flex-row-gap20 grid-full flex-wrap">
            <?php foreach ($block->cards()->toStructure() as $card): ?>
                <div class="icon-text-card">

                    <?php if ($image = $card->img()->toFile()): ?>
                        <div class="icon-text-card-img">
                            <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                        </div>
                    <?php endif ?>

                    <div class="overflow-hidden">
                        <h4 class="text-headline color-font-darkblue"><?= $card->headline()->toHtml() ?></h4>
                        <p class="text-regular color-font-darkblue"><?= $card->text()->toHtml() ?></p>
                    </div>

                </div>
            <?php endforeach ?>
        </div>

    </section>
    <img src="<?= url("assets/layout/layer/brick_layer_right.svg") ?>" class="brick-layer-right">

</div>