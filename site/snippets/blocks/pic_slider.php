<div class="section-wrapper" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap48">

        <div class="flex-column-gap24">
            <h2 class="headline headline-l color-font-white reasons-headline">
                <?= $block->headline_first_half()->toHtml() ?><span style="margin-left: 18px;"
                    class="headline headline-l color-font-lighterblue">
                    <?= $block->headline_second_half()->toHtml() ?>
                </span>
            </h2>

            <a class="link-text flex-row-gap5 color-font-white" href="<?= $block->link_about_us_url()->toUrl() ?>">
                <?= $block->link_about_us_text()->toHtml() ?>
                <img src="<?= url('assets/icons/arrow_forward.svg') ?>">
            </a>
        </div>


        <div class="flex-row-gap20 grid-full">
            <?php foreach ($block->comparison_pics()->toStructure() as $comparisonPic): ?>
                <div class="comparison-pic">

                    <?php if ($image = $comparisonPic->comparison_pic_first->img()->toFile()): ?>
                        <div class="comparison-pic-one">
                            <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                        </div>
                    <?php endif ?>

                    <?php if ($image = $comparisonPic->comparison_pic_second->img()->toFile()): ?>
                        <div class="comparison-pic-two">
                            <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                        </div>
                    <?php endif ?>


                </div>
            <?php endforeach ?>
        </div>
        <?= $block->blocks()->toBlocks() ?>

    </section>

</div>