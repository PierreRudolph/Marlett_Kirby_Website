<?php
$images = $block->images()->toFiles();
$ratio = $block->ratio()->or('auto');
$crop = $block->crop()->isTrue();
?>

<?php if ($images->count()): ?>
    <figure class="comparison-pics glide__slide" data-ratio="<?= $ratio ?>" data-crop="<?= $crop ?>">

        <?php foreach ($images as $index => $image): ?>

            <div class="comparison-pic">
                <?php $thumb = $image ?>
                <img class="comparison-pic-img" src="<?= $thumb->url() ?>" alt="<?= $thumb->alt()->esc() ?>" loading="lazy" role="img">
            </div>
        <?php endforeach ?>

    </figure>

<?php endif ?>