<div class="section-wrapper" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap48">

        <div class="grid-full">
            <h2 class="headline headline-l color-font-blue">
                <?= $block->headline_first_half()->toHtml() ?>
                <span class="headline headline-l color-font-skyblue">
                    <?= $block->headline_second_half()->toHtml() ?>
                </span>
            </h2>


        </div>


        <div class="flex-row-gap24 grid-full flex-wrap">
            <?php foreach ($block->cards()->toStructure() as $card): ?>
                <div class="icon-text-card lightgrey-bg">

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
        <div class="grid-full flex-middle">
            <a style="margin-bottom: 6px;" class="btn-pos btn-text" href="<?= $block->button_contact_link()->toUrl() ?>">
                <?= $block->button_contact_text()->toHtml() ?>
            </a>
        </div>
    </section>

</div>