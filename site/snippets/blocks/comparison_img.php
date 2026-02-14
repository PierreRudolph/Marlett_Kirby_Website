<?php
$images = $block->images()->toFiles();
$ratio = $block->ratio()->or('auto');
$crop = $block->crop()->isTrue();
?>


<?php if ($images->count()): ?>
    <figure class="comparison-pics" data-ratio="<?= $ratio ?>" data-crop="<?= $crop ?>">

        <?php foreach ($images as $index => $image): ?>

            <div class="comparison-pic-<?= $images->indexOf($image) + 1 ?>">
                <?php $thumb = $image->crop(170, 439); ?>
                <img src="<?= $thumb->url() ?>" alt="<?= $thumb->alt()->esc() ?>" loading="lazy">

            </div>
        <?php endforeach ?>

    </figure>
<?php endif ?>