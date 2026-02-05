<div class="section-wrapper" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap48">

        <h2 class="headline headline-l color-font-blue services-headline">
            <?= $block->headline_first_half()->toHtml() ?><span style="margin-left: 18px;"
                class="headline headline-l color-font-lighterblue">
                <?= $block->headline_second_half()->toHtml() ?>
            </span>
        </h2>

        <div class="flex-row-gap20 grid-full flex-wrap">
            <?php foreach ($block->cards()->toStructure() as $card): ?>
                <div class="flex-column">

                    <?php if ($image = $card->img()->toFile()): ?>
                        <div class="pic-text-card-img">
                            <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                        </div>
                    <?php endif ?>

                    <div class="pic-text-card-body">
                        <div class="flex-column-gap17">
                            <h3 class="headline headline-s color-font-blue"><?= $card->headline()->toHtml() ?></h3>
                            <p class="copy-text-smaller color-font-darkblue"><?= $card->text()->toHtml() ?></p>
                        </div>
                        <a href="<?= $card->link()->toUrl() ?>" class="link-text color-font-skyblue">Mehr erfahren <img
                                src="<?= url('assets/icons/arrow_forward.svg') ?>"></a>
                    </div>

                </div>
            <?php endforeach ?>
        </div>

        <div class="grid-full flex-middle">
            <a style="margin-bottom: 6px;" class="btn-pos btn-text" href="<?= url('contact') ?>">
                <?= $block->button_contact_text()->toHtml() ?>
            </a>
        </div>

    </section>
</div>