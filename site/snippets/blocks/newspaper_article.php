<div class="section-wrapper" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap100">


        <div class="section-content-gap32">
            <div class="flex-column-gap24">
                <h2 class="headline headline-l color-font-darkblue-alt3 services-headline">
                    <?= $block->headline_first_half()->toHtml() ?>
                    <br>
                    <span class="headline headline-l color-font-skyblue">
                        <?= $block->headline_second_half()->toHtml() ?>
                    </span>
                </h2>
            </div>



        </div>

        <div class="section-content">
            <div class="pic-text-card flex-column" style="max-width: 345px;">

                <?php if ($image = $block->img()->toFile()): ?>
                    <div class="newspaper-img">
                        <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" role="img">
                    </div>
                <?php endif ?>

                <div class="pic-text-card-body">
                    <div>
                        <h3 class="headline headline-s color-font-blue">
                            <?= $block->headline()->toHtml() ?>
                        </h3>
                    </div>


                    <a href="<?= $block->link()->toUrl() ?>" target="blank"
                        class="flex-row-gap5 link-text color-font-skyblue">Artikel
                        Lesen <img src="<?= url('assets/icons/arrow_forward.svg') ?>" alt="Icon Pfeil nach Rechts"
                            loading="lazy" role="img">
                    </a>
                    <img src="<?= url(path: "assets/layout/layer/brick_layer_right.svg") ?>"
                        class="brick-layer-right card-brick-layer">
                </div>

            </div>
        </div>


    </section>
    <img src="<?= url(path: "assets/layout/layer/brick_layer_right_blue.svg") ?>" class="brick-layer-right">

</div>