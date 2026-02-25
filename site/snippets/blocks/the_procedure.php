<div class="section-wrapper gap120 lightgrey-bg" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap64">
        <div class="section-content">
            <h2 class="headline headline-l color-font-blue">
                <?= $block->headline_first_half()->toHtml() ?>
                <br>
                <span class="headline headline-l color-font-skyblue">
                    <?= $block->headline_second_half()->toHtml() ?>
                </span>
            </h2>
        </div>

        <div class="section-content-gap40">
            <?php $collection = $block->cards()->toStructure() ?>
            <?php foreach ($collection as $card): ?>
                <?php $index = ($collection->indexOf($card) + 1) ?>
                <div class="flex-row-start-gap20 mobile-flex-wrap">
                    <span class="headline big-number color-font-blue"><?= $index ?></span>


                    <?php if ($image = $card->img()->toFile()): ?>
                        <img aspect-ratio="16/9" width="153px" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" role="img">
                    <?php endif ?>

                    <div class="flex-column-gap20">
                        <h4 class="headline headline-xs color-font-blue"><?= $card->text_headline()->toHtml() ?></h4>
                        <?php if ($card->text_top()->toString() !== ""): ?>

                            <p class="copy-text-big color-font-darkblue"><?= $card->text_top()->toHtml() ?></p>
                            <ul class="pad-left26">
                                <?php foreach ($card->text_list()->toStructure() as $listItem): ?>

                                    <li class="text-headline-manrope color-font-darkblue"><?= $listItem->text()->toHtml() ?></li>
                                <?php endforeach ?>
                            </ul>

                            <p class="copy-text-big color-font-darkblue"><?= $card->text_bottom()->toHtml() ?></p>

                        <?php endif ?>

                        <?php if ($card->text_top()->toString() == ""): ?>
                            <div class="flex-column-gap20">
                                <p class="copy-text-big color-font-darkblue"><?= $card->text()->toHtml() ?></p>
                            </div>
                        <?php endif ?>
                    </div>

                </div>

                <?php if ($index <= 3): ?>
                    <hr class="procedure-spacer">
                <?php endif ?>

            <?php endforeach ?>
        </div>

    </section>

    <?php if ($block->show_extended_bottom()->isTrue()): ?>
        <?php $section_collection = $block->extended_bottom()->toStructure() ?>
        <?php foreach ($section_collection as $section_item): ?>

            <section class="section-gap64 extended-section">
                <div class="section-content extended-section-img-wrapper">
                    <?php if ($image = $section_item->image()->toFile()): ?>
                        <img aspect-ratio="16/9" src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy"
                            role="img">
                    <?php endif ?>
                </div>

                <div class="section-content-gap32">

                    <?php if ($section_item->extended_bottom_list()->toStructure()->count() > 0): ?>
                        <h2 class="headline headline-l color-font-blue">
                            <?= $section_item->subheadline_first_half()->toHtml() ?>
                            <br>
                            <span class="headline headline-l color-font-skyblue">
                                <?= $section_item->subheadline_second_half()->toHtml() ?>
                            </span>
                        </h2>
                        <ul class="pad-left26">
                            <?php foreach ($section_item->extended_bottom_list()->toStructure() as $listItem): ?>

                                <li class="text-headline-manrope color-font-darkblue">
                                    <?= $listItem->text_first_half()->toHtml() ?>
                                    <span class="copy-text-big"><?= $listItem->text_second_half()->toHtml() ?></span>
                                </li>

                            <?php endforeach ?>
                        </ul>
                        <a href="<?= $section_item->button_link()->toUrl() ?>" class="btn-pos btn-text">
                            <?= $section_item->button_text()->toHtml() ?>
                        </a>
                    <?php else: ?>
                        <h2 class="headline headline-l color-font-skyblue">
                            <?= $section_item->subheadline_first_half()->toHtml() ?>
                            <br>
                            <span class="headline headline-l color-font-blue">
                                <?= $section_item->subheadline_second_half()->toHtml() ?>
                            </span>
                        </h2>
                        <p class="copy-text-big color-font-darkblue"><?= $section_item->text()->toHtml() ?></p>
                        <p class="copy-text-big color-font-darkblue">
                            <?= $section_item->text_second_half()->toHtml() ?>
                        </p>
                        <a href="<?= $section_item->button_link()->toUrl() ?>" class="btn-pos-outlined btn-text">
                            <?= $section_item->button_text()->toHtml() ?>
                        </a>
                    <?php endif ?>

                </div>

            </section>

        <?php endforeach ?>

    <?php endif ?>

</div>