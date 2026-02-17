<footer class="footer blue-radient-bg">
    <div>
        <div class="grid-column-gap40" style="width:100%">

            <div class="flex-column-gap40 grid-span2 mobile-flex-row">
                <a class="logo" href="<?= $site->url() ?>">
                    <img src="<?= url('assets/icons/marlett_logo.svg') ?>" alt="Marlett Firmenlogo" loading="lazy" role="img">
                </a>
                <div class="flex-row-start-gap12 mobile-margin-auto">
                    <img src="<?= url('assets/icons/icon_map_pin.svg') ?>" alt="Icon eines Kartenmarkers" loading="lazy" role="img">
                    <div class="flex-column color-font-white">
                        <p class="label-big">Standort <?= $site->city()->toHtml() ?></p>
                        <p class="copy-text-small"><?= $site->street()->toHtml() ?>
                            <?= $site->house_number()->toHtml() ?>
                        </p>
                        <p class="copy-text-small"><?= $site->zip()->toHtml() ?> <?= $site->city()->toHtml() ?></p>
                    </div>
                </div>
            </div>

            <div class="flex-column-gap40 grid-span1">
                <h5 class="headline headline-xs color-font-lightblue-alt">Kontakt</h5>
                <div class="flex-column-gap12">
                    <?php if ($site->whatsapp()->toHtml() != ''): ?>
                        <a class="flex-row-gap12 copy-text-small color-font-white"
                            href="tel:<?= $site->whatsapp()->toHtml() ?>">
                            <img src="<?= url('assets/icons/icon_whatsapp.svg') ?>" alt="Icon von WhatsApp" loading="lazy" role="img">
                            <span><?= $site->whatsapp()->toHtml() ?></span>
                        </a>
                    <?php endif ?>
                    <a class="flex-row-gap12 copy-text-small color-font-white"
                        href="tel:<?= $site->phone()->toHtml() ?>">
                        <img src="<?= url('assets/icons/phone.svg') ?>" alt="Telefon Icon" loading="lazy" role="img">
                        <span><?= $site->phone()->toHtml() ?></span>
                    </a>
                    <a class="flex-row-gap12 copy-text-small color-font-white"
                        href="mailto:<?= $site->email()->toSring() ?>">
                        <img src="<?= url('assets/icons/icon_mail.svg') ?>" alt="Email Icon" loading="lazy" role="img">
                        <span><?= $site->email()->toHtml() ?></span>
                    </a>
                </div>
            </div>

            <div class="flex-column-gap40 grid-span1">
                <h5 class="headline headline-xs color-font-lightblue-alt">Unternehmen</h5>
                <div class="flex-column-gap12">
                    <a class="flex-row-gap12 copy-text-small color-font-white" href="<?= url('ueber-uns') ?>">
                        <?= page('ueber-uns')->title() ?>
                    </a>
                    <a class="flex-row-gap12 copy-text-small color-font-white" href="<?= url('referenzen') ?>">
                        <?= page('referenzen')->title() ?>
                    </a>
                </div>
            </div>

            <div class="flex-column-gap40 grid-span1">
                <h5 class="headline headline-xs color-font-lightblue-alt">Leistungen</h5>
                <div class="flex-column-gap12">
                    <?php foreach (page('leistungen')->children()->listed() as $service): ?>
                        <a class="flex-row-gap12 copy-text-small color-font-white" href="<?= $service->url() ?>">
                            <?= $service->title()->toHtml() ?>
                        </a>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="flex-column-gap40 grid-span1">
                <h5 class="headline headline-xs color-font-lightblue-alt">Social Media</h5>
                <div class="flex-column-gap12">
                    <?php foreach ($site->social_links()->toStructure() as $social_link): ?>

                        <a class="flex-row-gap12 copy-text-small color-font-white"
                            href="<?= $social_link->link()->toHtml() ?>">
                            <?php if ($image = $social_link->icon()->toFile()): ?>

                                <img src="<?= $image->url() ?>" alt="<?= $image->alt() ?>" loading="lazy" role="img">
                            <?php endif ?>

                            <span><?= $social_link->text()->toHtml() ?></span>
                        </a>

                    <?php endforeach ?>

                </div>
            </div>

        </div>


        <?php if ($site->show_service_areas()->toBool()): ?>
            <hr class="hr-line">
            <div class="flex-column-gap40" style="width:100%">
                <h4 class="headline headline-xs color-font-white">Einzugsgebiete</h4>
                <?php $areas = $site->service_areas()->split(','); ?>
                <div class="flex-row-gap24">
                    <?php foreach ($areas as $area): ?>
                        <span class="copy-text-small color-font-white">
                            <?= html($area) ?>
                        </span>
                    <?php endforeach ?>
                </div>
            </div>
        <?php endif ?>

    </div>
    <div class="footer-bottom">
        <div>
            <p class="copy-text-small color-font-blue">© 2026 Marlett GbR</p>

            <div class="flex-row-gap24">
                <a class="copy-text-small color-font-blue" href="<?= url('impressum') ?>">Impressum</a>
                <a class="copy-text-small color-font-blue" href="<?= url('datenschutzerklaerung') ?>">Datenschutz</a>
                <a class="copy-text-small color-font-blue" href="<?= url('agb') ?>">AGB</a>
            </div>
        </div>
    </div>

</footer>
</main>
</div>
</body>

</html>