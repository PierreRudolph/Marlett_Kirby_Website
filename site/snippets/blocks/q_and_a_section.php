<div class="section-wrapper lightgrey-bg" id="<?= $block->section_id()->toHtml() ?>">
    <img src="<?= url(path: "assets/layout/layer/brick_layer_left_blue.svg") ?>" class="brick-layer-left">

    <section class="section-gap48" style="overflow: visible;">

        <div class="section-content-gap20">

            <h2 class="headline headline-l color-font-blue ">
                <?= $block->headline_first_half()->toHtml() ?>
                <br>
                <span class="headline headline-l color-font-skyblue">
                    <?= $block->headline_second_half()->toHtml() ?>
                </span>
            </h2>

            <p class="text-regular500 color-font-darkblue-alt2"><?= $block->text()->toHtml() ?></p>

            <div class="grid-full flex-middle">
                <a style="margin-bottom: 6px;" class="btn-pos btn-text"
                    href="<?= $block->button_contact_link()->toUrl() ?>">
                    <?= $block->button_contact_text()->toHtml() ?>
                </a>
            </div>

        </div>

        <div class="q-and-a-accordion-wrapper section-content-gap20" aria-label="Häufige Fragen">

            <?php $q_and_a_collection = $block->q_and_a_collection()->toStructure() ?>
            <?php foreach ($q_and_a_collection as $q_and_a): ?>
                <?php $index = $q_and_a_collection->indexOf($q_and_a) ?>
                <div onclick="openCloseAccordion(<?= $index ?>)" class="accordion" id="accordion-<?= $index ?>">
                    <button class=" btn-accordion">
                        <h4 class="color-font-darkblue-alt2 text-headline"><?= $q_and_a->question()->toHtml() ?></h4>
                        <img src="<?= url('assets/icons/icon_arrow_down.svg') ?>">
                    </button>
                    <div id="accordion-text" class="text-accordion">
                        <p class="text-regular500 color-font-darkblue-alt2"><?= $q_and_a->answer()->toHtml() ?></p>
                    </div>
                </div>

            <?php endforeach ?>

    </section>

    <img src="<?= url(path: "assets/layout/layer/brick_layer_right_blue.svg") ?>" class="brick-layer-right">
</div>