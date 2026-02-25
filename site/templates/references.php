<?php snippet(name: 'header') ?>

<div class="section-wrapper">
    <img src="<?= url(path: "assets/layout/layer/brick_layer_left_blue.svg") ?>" class="brick-layer-left" aria-label="hidden">

    <section class="section-gap48">

        <div class="flex-column-gap24 grid-middle">
            <h2 class="headline headline-l color-font-darkblue-alt reasons-headline">
                <?= $page->headline_first_half()->toHtml() ?><br>
                <span class="headline headline-l color-font-skyblue">
                    <?= $page->headline_second_half()->toHtml() ?>
                </span>
            </h2>
            <p class="copy-text-big color-font-darkblue"><?= $page->text_top()->toHtml() ?></p>
        </div>

        <div class="grid-full flex-column-gap20">
            <div class="flex-row-gap20 flex-wrap">
                <?php
                $images = $page->galleryOwn()->toStructure();
                $ratio = $page->ratio()->or('auto');
                $crop = $page->crop()->isTrue();
                ?>
                <?php if ($images->isArray() || $images->isObject()) ?>

                <?php foreach ($images as $item): ?>


                    <figure class="flex-row-gap2 mobile603-d-none" data-ratio="<?= $ratio ?>" data-crop="<?= $crop ?>">

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

                    <figure class="flex-row-gap2 desktop603-d-none" data-ratio="<?= $ratio ?>" data-crop="<?= $crop ?>">

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
            <div class="flex-column">
                <h4 class="label-alt-headline color-font-darkblue-alt2">
                    <?= $page->comparison_pics_label_headline()->toHtml() ?>
                </h4>
                <p class="label-alt-text color-font-darkblue-alt2">
                    <?= $page->comparison_pics_label_text()->toHtml() ?>
                </p>
            </div>
        </div>


    </section>

</div>

<?= $page->blocks()->toBlocks() ?>
<?php snippet(name: 'footer') ?>