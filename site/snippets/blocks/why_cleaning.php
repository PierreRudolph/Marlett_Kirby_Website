<div class="section-wrapper lightgrey-bg" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap64">

        <div class="flex-column-gap20 grid-middle">
            <h2 class="headline headline-l color-font-blue">
                <?= $block->headline_first_half()->toHtml() ?>
                <br>
                <span class="headline headline-l color-font-skyblue">
                    <?= $block->headline_second_half()->toHtml() ?>
                </span>
            </h2>

            <p class="text-regular500 color-font-darkblue"><?= $block->text()->toHtml() ?></p>

        </div>


        <div class="flex-column-gap40 grid-middle">
            <?php foreach ($block->cards()->toStructure() as $card): ?>
                <div class="flex-row-start-gap24">

                    <?php if ($image = $card->img()->toFile()): ?>
                        <div class="icon-text-card-img">
                            <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" role="img">
                        </div>
                    <?php endif ?>

                    <div class="overflow-hidden">
                        <h4 class="text-headline-manrope color-font-darkblue"><?= $card->headline()->toHtml() ?></h4>
                        <p class="text-regular color-font-darkblue"><?= $card->text()->toHtml() ?></p>
                    </div>

                </div>
            <?php endforeach ?>
        </div>

    </section>

</div>