<div class="section-wrapper lightgrey-bg" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap80">
        <div class="section-content-gap54">
            <div class="flex-column-gap40">
                <h2 class="headline headline-l color-font-darkblue-alt3 services-headline">
                    <?= $block->headline_first_half()->toHtml() ?>
                    <br>
                    <span class="headline headline-l color-font-skyblue">
                        <?= $block->headline_second_half()->toHtml() ?>
                    </span>
                </h2>
                <p class="text-regular color-font-darkblue"><?= $block->text()->toHtml() ?></p>
            </div>
            <div class="certified-icons-div">
                <?php foreach ($block->images()->toStructure() as $image): ?>

                    <?php if ($imageFile = $image->img()->toFile()): ?>
                        <a class="width-full height-full" target="blank" href="<?= $image->link()->toHtml() ?>">
                            <img class="width-full height-full" src="<?= $imageFile->url() ?>" alt="<?= $imageFile->alt() ?>" loading="lazy" role="img">
                        </a>

                    <?php endif ?>

                <?php endforeach ?>
            </div>
        </div>

        <div class="section-content">
            <?php if ($solsos = $block->img()->toFile()): ?>
                <figure data-crop="true">

                    <?php $thumb = $solsos->crop(680, 424); ?>
                    <img class="width-full" src="<?= $thumb->url() ?>" alt="<?= $thumb->alt()->esc() ?>" loading="lazy"
                        role="img">

                </figure>
            <?php endif ?>
        </div>

    </section>
</div>