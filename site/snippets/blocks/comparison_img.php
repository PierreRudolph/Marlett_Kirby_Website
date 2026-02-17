<?php
$images = $block->images()->toFiles();
$ratio = $block->ratio()->or('auto');
$crop = $block->crop()->isTrue();
?>

<?php if ($images->count()): ?>
    <figure class="comparison-pics mobile603-d-none" data-ratio="<?= $ratio ?>" data-crop="<?= $crop ?>">

        <?php foreach ($images as $index => $image): ?>

            <div class="comparison-pic-<?= $images->indexOf($image) + 1 ?>">
                <?php $thumb = $image->crop(170, 439); ?>
                <img src="<?= $thumb->url() ?>" alt="<?= $thumb->alt()->esc() ?>" loading="lazy" role="img">
            </div>
        <?php endforeach ?>

    </figure>

    <figure class="comparison-pics desktop603-d-none" data-ratio="<?= $ratio ?>" data-crop="<?= $crop ?>">

        <?php foreach ($images as $index => $image): ?>

            <div class="comparison-pic-<?= $images->indexOf($image) + 1 ?>">
                <?php $thumb = $image->crop(128, 328); ?>
                <img src="<?= $thumb->url() ?>" alt="<?= $thumb->alt()->esc() ?>" loading="lazy" role="img">
            </div>
        <?php endforeach ?>

    </figure>

<?php endif ?>