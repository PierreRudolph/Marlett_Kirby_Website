<div class="section-wrapper" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap48">

        <div class="section-content-gap20 grid-full">

            <h2 class="headline headline-l color-font-blue services-headline">
                <?= $block->headline_first_half()->toHtml() ?>
                <br>
                <span class="headline headline-l color-font-skyblue">
                    <?= $block->headline_second_half()->toHtml() ?>
                </span>
            </h2>
            <p class="label-alt-text color-font-darkblue"><?= $block->text()->toHtml() ?></p>

        </div>

        <div class="section-content-gap24 grid-full">
            <?php foreach ($block->certificates()->toStructure() as $certificate): ?>
                <div class="certificate-card lightgrey-bg">
                    <div class="flex-middle" >
                        <?php if ($imageFile = $certificate->img()->toFile()): ?>
                            <img width="312px" height="132px" src="<?= $imageFile->url() ?>" alt="<?= $imageFile->alt() ?>" loading="lazy" role="img">
                        <?php endif ?>
                    </div>


                    <div class="flex-column-gap20">
                        <h4 class="headline headline-s color-font-darkblue"><?= $certificate->text_headline()->toHtml() ?></h4>
                        <p class="text-regular color-font-darkblue"><?= $certificate->text()->toHtml() ?></p>
                        <?php if ($bottomText = $certificate->bottomText()->toHtml() != ""): ?>
                            <p class="text-regular color-font-darkblue"><?= $certificate->text_bottom()->toHtml() ?></p>
                        <?php endif ?>
                    </div>

                </div>

            <?php endforeach ?>
        </div>
        <div class="flex-middle grid-full">
            <a class="btn-pos btn-text" href="<?= url('kontakt') ?>">
                <?= $page->button_contact_text()->toHtml() ?>
            </a>
        </div>


    </section>
</div>