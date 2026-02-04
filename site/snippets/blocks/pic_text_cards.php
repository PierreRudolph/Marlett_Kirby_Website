<div class="section-wrapper" id="<?= $block->section_id()->toHtml() ?>">
    <section class="section-gap48">

        <h1 class="headline headline-l color-font-blue services-headline">
            <?= $block->headline_first_half()->toHtml() ?><span style="margin-left: 18px;"
                class="headline headline-l color-font-lighterblue">
                <?= $block->headline_second_half()->toHtml() ?>
            </span>
        </h1>
        <div class="flex-row-gap20 grid-full">
            <?php foreach ($block->cards()->toStructure() as $card): ?>
                <div>
                    <?php if ($image = $card->img()->toFile()): ?>
                        <img class="services-img" src="<?= $image->url() ?>">
                    <?php endif ?>
                </div>
            <?php endforeach ?>
        </div>
        <div class="grid-full flex-middle">
            <a class="btn-pos btn-text" href="<?= url('contact') ?>">
                <?= $block->button_contact_text()->toHtml() ?>
            </a>
        </div>

</div>
</section>
</div>