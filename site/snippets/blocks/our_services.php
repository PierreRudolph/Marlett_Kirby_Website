<div class="section-wrapper" id="<?= $block->section_id()->toHtml() ?>">

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

        <div class="section-content-gap24 color-font-darkblue">
            <h3 class="headline headline-xs"><?= $block->services_headline()->toHtml() ?></h3>
            <ul>
                <?php foreach ($block->services_list()->toStructure() as $service): ?>
                    <li class="label-alt-headline"><?= $service->text()->toHtml() ?></li>
                <?php endforeach ?>
            </ul>
            <p class="text-regular500"><?= $block->services_text()->toHtml() ?></p>
        </div>


    </section>

</div>