<div class="section-wrapper lightgrey-bg" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap80">
        <div class="section-content-gap56">
            <div class="flex-column-gap40">
                <h2 class="headline headline-l color-font-blue services-headline">
                    <?= $block->headline_first_half()->toHtml() ?>
                    <br>
                    <span class="headline headline-l color-font-skyblue">
                        <?= $block->headline_second_half()->toHtml() ?>
                    </span>
                </h2>
                <p class="text-regular color-font-darkblue"><?= $block->text()->toHtml() ?></p>
            </div>
            <div class="flex-row-gap106">
                <?php foreach ($block->images()->toStructure() as $image): ?>

                    <?php if ($imageFile = $image->img()->toFile()): ?>

                        <img src="<?= $imageFile->url() ?>" alt="<?= $imageFile->alt() ?>">

                    <?php endif ?>

                <?php endforeach ?>
            </div>
        </div>

        <div class="section-content">
            <?php if ($solsos = $block->img()->toFile()): ?>
                <div>
                    <img src="<?= $solsos->url() ?>" alt="<?= $solsos->alt() ?>">
                </div>
            <?php endif ?>
        </div>

    </section>
</div>