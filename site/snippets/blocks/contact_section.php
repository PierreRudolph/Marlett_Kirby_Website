<div class="section-wrapper" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap100">


        <div class="section-content-gap32">

            <h2 class="headline headline-l color-font-darkblue-alt3 services-headline">
                <?= $block->headline_first_half()->toHtml() ?>
                <br>
                <span class="headline headline-l color-font-skyblue">
                    <?= $block->headline_second_half()->toHtml() ?>
                </span>
            </h2>
            <p class="text-regular color-font-darkblue-alt2"><?= $block->text()->toHtml() ?></p>

            <div class="flex-column-gap12">
                <?php foreach ($block->contact_options()->toStructure() as $contact_option): ?>

                    <?php if ($contact_option->mail()->value() !== ""): ?>
                        <div class="contact-option lightgrey-bg flex-row-gap24">

                            <?php if ($image = $contact_option->img()->toFile()): ?>
                                <div class="icon-blue-bg">
                                    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                                </div>
                            <?php endif ?>

                            <a class="color-font-darkblue-alt2 text-headline"
                                href="mailto:<?= $contact_option->mail()->toString() ?>">
                                <?= $contact_option->mail()->toString() ?>
                            </a>
                        </div>
                    <?php endif ?>

                    <?php if ($contact_option->whatsapp_tel()->value() !== ""): ?>
                        <div class="contact-option lightgrey-bg flex-row-gap24">

                            <?php if ($image = $contact_option->img()->toFile()): ?>
                                <div class="icon-blue-bg">
                                    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                                </div>
                            <?php endif ?>

                            <a class="color-font-darkblue-alt2 text-headline"
                                href="https://wa.me/<?= $contact_option->whatsapp_tel()->toHtml() ?>">
                                <?= $contact_option->whatsapp_text() ?> </a>
                        </div>
                    <?php endif ?>

                    <?php if ($contact_option->phone()->value() !== ""): ?>
                        <div class="contact-option lightgrey-bg flex-row-gap24">

                            <?php if ($image = $contact_option->img()->toFile()): ?>
                                <div class="icon-blue-bg">
                                    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>">
                                </div>
                            <?php endif ?>

                            <a class="color-font-darkblue-alt2 text-headline"
                                href="tel:<?= $contact_option->phone()->toHtml() ?>">
                                <?= $contact_option->phone()->toHtml() ?>
                            </a>
                        </div>
                    <?php endif ?>

                <?php endforeach ?>
            </div>

        </div>

        <div class=" section-content">
            <?php snippet(name: 'contact_form') ?>
        </div>


    </section>

</div>