<?php snippet(name: 'header') ?>

<div class="section-wrapper">

    <section class="above-fold">

        <div class="flex-column-gap24 grid-middle">
            <h2 class="headline headline-l color-font-darkblue-alt reasons-headline">
                <?= $page->headline_first_half()->toHtml() ?><br>
                <span class="headline headline-l color-font-skyblue">
                    <?= $page->headline_second_half()->toHtml() ?>
                </span>
            </h2>
            <p class="text-regular500 color-font-darkblue"><?= $page->text_top()->toHtml() ?></p>
        </div>

        <div class="grid-full flex-column-gap20">
            <div class="comparison-pics-wrapper flex-row-gap20 flex-wrap">
                <?php
                $images = $page->galleryOwn()->toStructure();
                $ratio = $page->ratio()->or('auto');
                $crop = $page->crop()->isTrue();
                ?>
                <?php if ($images->isArray() || $images->isObject()) ?>

                <?php foreach ($images as $item): ?>


                    <figure class="comparison-pics mobile603-d-none" data-ratio="<?= $ratio ?>" data-crop="<?= $crop ?>">

                        <?php $img1 = $item->img_one()->toFile() ?>

                        <div class="comparison-pic-<?= $images->indexOf($item) + 1 ?>">
                            <?php $thumb = $img1->crop(170, 439); ?>
                            <img src="<?= $thumb->url() ?>" alt="<?= $thumb->alt()->esc() ?>" loading="lazy" role="img">
                        </div>


                        <?php $img2 = $item->img_two()->toFile() ?>

                        <div class="comparison-pic-<?= $images->indexOf($item) + 1 ?>">
                            <?php $thumb = $img2->crop(170, 439); ?>
                            <img src="<?= $thumb->url() ?>" alt="<?= $thumb->alt()->esc() ?>" loading="lazy" role="img">
                        </div>
                    </figure>

                    <figure class="comparison-pics desktop603-d-none" data-ratio="<?= $ratio ?>" data-crop="<?= $crop ?>">

                        <?php $img1 = $item->img_one()->toFile() ?>

                        <div class="comparison-pic-<?= $images->indexOf($item) + 1 ?>">
                            <?php $thumb = $img1->crop(128, 328); ?>
                            <img src="<?= $thumb->url() ?>" alt="<?= $thumb->alt()->esc() ?>" loading="lazy" role="img">
                        </div>


                        <?php $img2 = $item->img_two()->toFile() ?>

                        <div class="comparison-pic-<?= $images->indexOf($item) + 1 ?>">
                            <?php $thumb = $img2->crop(128, 328); ?>
                            <img src="<?= $thumb->url() ?>" alt="<?= $thumb->alt()->esc() ?>" loading="lazy" role="img">
                        </div>
                    </figure>


                <?php endforeach ?>


            </div>

        </div>

        <div class="flex-column grid-full">
            <h4 class="label-alt-headline color-font-darkblue-alt2">
                <?= $page->comparison_pics_label_headline()->toHtml() ?>
            </h4>
            <p class="label-alt-text color-font-darkblue-alt2"><?= $page->comparison_pics_label_text()->toHtml() ?></p>
        </div>
    </section>

</div>

<?= $page->blocks()->toBlocks() ?>
<?php snippet(name: 'footer') ?>