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
                <p class="text-regular color-font-darkblue-alt2"><?= $block->text()->toHtml() ?></p>
            </div>


            <div class="flex-column-gap12">
                <?php foreach ($block->contact_options()->toStructure() as $contact_option): ?>

                    <?php if ($contact_option->mail()->value() !== ""): ?>
                        <div class="contact-option lightgrey-bg flex-row-gap24">

                            <?php if ($image = $contact_option->img()->toFile()): ?>
                                <div class="icon-blue-bg">
                                    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" role="img">
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
                                    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" role="img">
                                </div>
                            <?php endif ?>

                            <a class="color-font-darkblue-alt2 text-headline"
                                href="https://wa.me/<?= $contact_option->whatsapp_tel()->toHtml() ?>" loading="lazy" role="img">
                                <?= $contact_option->whatsapp_text() ?> </a>
                        </div>
                    <?php endif ?>

                <?php endforeach ?>
                <?php if ($site->phone_line()->value() !== ""): ?>
                    <div class="contact-option lightgrey-bg flex-row-gap24">

                        <?php if ($image = $contact_option->img()->toFile()): ?>
                            <div class="icon-blue-bg">
                                <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" role="img">
                            </div>
                        <?php endif ?>

                        <a class="color-font-darkblue-alt2 text-headline" href="tel:<?= $site->phone_line()->toHtml() ?>">
                            <?= $site->phone_line()->toHtml() ?>
                        </a>
                    </div>
                <?php endif ?>

                <?php if ($site->phone()->value() !== ""): ?>
                    <div class="contact-option lightgrey-bg flex-row-gap24">

                        <?php if ($image = $contact_option->img()->toFile()): ?>
                            <div class="icon-blue-bg">
                                <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" role="img">
                            </div>
                        <?php endif ?>

                        <a class="color-font-darkblue-alt2 text-headline" href="tel:<?= $site->phone()->toHtml() ?>">
                            <?= $site->phone()->toHtml() ?>
                        </a>
                    </div>
                <?php endif ?>
            </div>

        </div>

        <div class=" section-content">
            <?php snippet(name: 'contact_form') ?>
        </div>


    </section>

</div>