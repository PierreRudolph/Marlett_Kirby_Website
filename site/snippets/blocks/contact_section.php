<div class="section-wrapper" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap80">


        <div class="section-content-gap32">
            <div class="flex-column-gap24">
                <h2 class="headline headline-l color-font-darkblue-alt3 services-headline">
                    <?= $block->headline_first_half()->toHtml() ?>
                    <br>
                    <span class="headline headline-l color-font-skyblue">
                        <?= $block->headline_second_half()->toHtml() ?>
                    </span>
                </h2>
                <p class="copy-text-big color-font-darkblue-alt2"><?= $block->text()->toHtml() ?></p>
            </div>


            <div class="flex-column-gap12">
                <?php foreach ($block->contact_options()->toStructure() as $contact_option): ?>

                    <?php if ($contact_option->mail()->value() !== ""): ?>
                        <a href="mailto:<?= $contact_option->mail()->toString() ?>"
                            class="contact-option lightgrey-bg flex-row-gap24">

                            <?php if ($image = $contact_option->img()->toFile()): ?>
                                <div class="icon-blue-bg">
                                    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" role="img">
                                </div>
                            <?php endif ?>

                            <span class="color-font-darkblue-alt2 link-text">
                                <?= $contact_option->mail()->toString() ?>
                            </span>
                        </a>
                    <?php endif ?>

                    <?php if ($contact_option->whatsapp_tel()->value() !== ""): ?>
                        <a href="https://wa.me/<?= $contact_option->whatsapp_tel()->toHtml() ?>"
                            class="contact-option lightgrey-bg flex-row-gap24">

                            <?php if ($image = $contact_option->img()->toFile()): ?>
                                <div class="icon-blue-bg">
                                    <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" role="img">
                                </div>
                            <?php endif ?>

                            <span class="color-font-darkblue-alt2 link-text">
                                <?= $contact_option->whatsapp_text() ?> </span>
                        </a>
                    <?php endif ?>

                <?php endforeach ?>
                <?php if ($site->phone_line()->value() !== ""): ?>
                    <a href="tel:<?= $site->phone_line()->toHtml() ?>" class="contact-option lightgrey-bg flex-row-gap24">

                        <?php if ($image = $contact_option->img()->toFile()): ?>
                            <div class="icon-blue-bg">
                                <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" role="img">
                            </div>
                        <?php endif ?>

                        <span class="color-font-darkblue-alt2 link-text">
                            <?= $site->phone_line()->toHtml() ?>
                        </span>
                    </a>
                <?php endif ?>

                <?php if ($site->phone()->value() !== ""): ?>
                    <a href="tel:<?= $site->phone()->toHtml() ?>" class="contact-option lightgrey-bg flex-row-gap24">

                        <?php if ($image = $contact_option->img()->toFile()): ?>
                            <div class="icon-blue-bg">
                                <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" role="img">
                            </div>
                        <?php endif ?>

                        <span class="color-font-darkblue-alt2 link-text">
                            <?= $site->phone()->toHtml() ?>
                        </span>
                    </a>
                <?php endif ?>
            </div>

        </div>

        <div class=" section-content">
            <?php snippet(name: 'contact_form') ?>
        </div>


    </section>

</div>