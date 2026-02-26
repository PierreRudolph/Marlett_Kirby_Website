<div class="section-wrapper lightgrey-bg" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap48">
        <h2 class="headline headline-l color-font-blue services-headline">
            <?= $block->headline_first_half()->toHtml() ?>
            <br>
            <span class="headline headline-l color-font-skyblue">
                <?= $block->headline_second_half()->toHtml() ?>
            </span>
        </h2>


        <div class="flex-row-gap24 grid-full m-flex-column">
            <?php
            $ratio = $block->ratio()->or('auto');
            $crop = $block->crop()->isTrue();
            ?>
            <?php foreach ($block->cards()->toStructure() as $card): ?>


                <div class="flex-column-gap12 t-width-full">

                    <figure data-ratio="<?= $ratio ?>" data-crop="<?= $crop ?>">

                            <?php if ($thumb = $card->img()->toFile()->crop(464, 442)): ?>
                                <img class="t-width-full" src="<?= $thumb->url() ?>" width="464px" height="442px" alt="<?= $thumb->alt()->esc() ?>" loading="lazy" role="img">
                            <?php endif ?>

                    </figure>

                    <div class="flex-column-gap5">
                        <h3 class="headline headline-s color-font-blue">
                            <?= $card->first_name()->toHtml() ?>
                            <span
                                class="color-font-skyblue"><?= $card->name_colored_part()->toHtml() ?></span><span><?= $card->name()->toHtml() ?></span>
                        </h3>
                        <p class="text-regular color-font-blue"><?= $card->text()->toHtml() ?></p>
                    </div>

                </div>

            <?php endforeach ?>
        </div>
    </section>
</div>