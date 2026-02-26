<div class="section-wrapper" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap48">
        <h2 class="headline headline-l color-font-blue services-headline">
            <?= $block->headline_first_half()->toHtml() ?>
            <br>
            <span class="headline headline-l color-font-skyblue">
                <?= $block->headline_second_half()->toHtml() ?>
            </span>
        </h2>


        <div class="flex-row-gap20 grid-template4 grid-full flex-wrap">
            <?php foreach ($block->cards()->toStructure() as $card): ?>
                <a href="<?= $card->link()->toUrl() ?>" class="pic-text-card flex-column">

                    <?php if ($image = $card->img()->toFile()): ?>
                        <div class="pic-text-card-img">
                            <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" role="img">
                        </div>
                    <?php endif ?>

                    <div class="pic-text-card-body">
                        <div class="flex-column-gap17">
                            <h3 class="headline headline-s color-font-blue"><?= $card->headline()->toHtml() ?></h3>
                            <p class="copy-text-smaller color-font-darkblue"><?= $card->text()->toHtml() ?></p>
                        </div>

                        <span class="flex-row-gap5 link-text color-font-skyblue">Mehr
                            erfahren <img src="<?= url('assets/icons/arrow_forward.svg') ?>" width="24px" height="24px"
                                alt="Icon Pfeil nach Rechts" loading="lazy" role="img">
                        </span>
                        <img src="<?= url(path: "assets/layout/layer/brick_layer_right.svg") ?>"
                            class="brick-layer-right card-brick-layer" aria-hidden="true" aria-hidden="true">
                    </div>

                </a>
            <?php endforeach ?>
        </div>

        <div class="grid-full flex-middle">
            <a class="btn-pos btn-text marg-bot6" href="<?= url('kontakt') ?>">
                <?= $block->button_contact_text()->toHtml() ?>
            </a>
        </div>

    </section>
</div>