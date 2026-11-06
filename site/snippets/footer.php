<footer class="footer blue-radient-bg">
    <div>
        <div class="grid-column-gap40 width-full">

            <div class="flex-column-gap40 grid-span2 mobile-flex-row">
                <a class="logo" href="<?= $site->url() ?>">
                    <img src="<?= url('assets/icons/marlett_logo.svg') ?>" width="183px" height="46px"
                        alt="Marlett Firmenlogo" loading="lazy" role="img">
                </a>
                <div class="flex-row-start-gap12 mobile-margin-auto">
                    <img src="<?= url('assets/icons/icon_map_pin.svg') ?>" alt="Icon eines Kartenmarkers" loading="lazy"
                        role="img">
                    <div class="flex-column color-font-white">
                        <p class="label-big">Standort <?= $site->city()->toHtml() ?></p>
                        <p class="font16-500"><?= $site->street()->toHtml() ?>
                            <?= $site->house_number()->toHtml() ?>
                        </p>
                        <p class="font16-500"><?= $site->zip()->toHtml() ?> <?= $site->city()->toHtml() ?></p>
                    </div>
                </div>
            </div>

            <div class="flex-column-gap40 grid-span1">
                <h3 class="headline headline-xs color-font-lightblue-alt">Kontakt</h3>
                <div class="flex-column-gap16">
                    <?php if ($site->whatsapp()->toHtml() != ''): ?>
                        <a class="flex-row-gap12 font16-500 color-font-white" href="tel:<?= $site->whatsapp()->toHtml() ?>">
                            <img src="<?= url('assets/icons/icon_whatsapp.svg') ?>" width="24px" height="24px"
                                alt="Icon von WhatsApp" loading="lazy" role="img">
                            <span><?= $site->whatsapp()->toHtml() ?></span>
                        </a>
                    <?php endif ?>

                    <a class="flex-row-gap12 font16-500 color-font-white"
                        href="tel:<?= $site->phone_line()->toHtml() ?>">
                        <img src="<?= url('assets/icons/phone.svg') ?>" width="24px" height="24px" alt="Telefon Icon"
                            loading="lazy" role="img">
                        <span>
                            <?= $site->phone_line()->toHtml() ?>
                        </span>
                    </a>
                    <a class="flex-row-gap12 font16-500 color-font-white" href="tel:<?= $site->phone()->toHtml() ?>">
                        <img src="<?= url('assets/icons/phone.svg') ?>" width="24px" height="24px" alt="Telefon Icon"
                            loading="lazy" role="img">
                        <span><?= $site->phone()->toHtml() ?></span>
                    </a>

                    <a class="flex-row-gap12 font16-500 color-font-white"
                        href="mailto:<?= $site->email()->toSring() ?>">
                        <img width="24px" height="24px" src="<?= url('assets/icons/icon_mail.svg') ?>" alt="Email Icon"
                            loading="lazy" role="img">
                        <span><?= $site->email()->toHtml() ?></span>
                    </a>
                </div>
            </div>

            <div class="flex-column-gap40 grid-span1">
                <h3 class="headline headline-xs color-font-lightblue-alt">Unternehmen</h3>
                <div class="flex-column-gap16">
                    <a class="flex-row-gap12 font16-500 color-font-white" href="<?= url('ueber-uns') ?>">
                        <?= page('ueber-uns')->title() ?>
                    </a>
                    <a class="flex-row-gap12 font16-500 color-font-white" href="<?= url('referenzen') ?>">
                        <?= page('referenzen')->title() ?>
                    </a>
                </div>
            </div>

            <div class="flex-column-gap40 grid-span1">
                <h3 class="headline headline-xs color-font-lightblue-alt">Leistungen</h3>
                <div class="flex-column-gap16">
                    <?php foreach (page('leistungen')->children()->listed() as $service): ?>
                        <a class="flex-row-gap12 font16-500 color-font-white" href="<?= $service->url() ?>">
                            <?= $service->title()->toHtml() ?>
                        </a>
                    <?php endforeach ?>
                </div>
            </div>

            <div class="flex-column-gap40 grid-span1">
                <h3 class="headline headline-xs color-font-lightblue-alt">Social Media</h3>
                <div class="flex-column-gap16">
                    <?php foreach ($site->social_links()->toStructure() as $social_link): ?>

                        <a class="flex-row-gap12 font16-500 color-font-white" href="<?= $social_link->link()->toHtml() ?>">
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
            <div class="flex-column-gap40 width-full">
                <h4 class="headline headline-xs color-font-white">Einzugsgebiete</h4>
                <?php $areas = $site->service_areas()->split(','); ?>
                <div class="flex-row-gap24">
                    <?php foreach ($areas as $area): ?>
                        <span class="font16-500 color-font-white">
                            <?= html($area) ?>
                        </span>
                    <?php endforeach ?>
                </div>
            </div>
        <?php endif ?>

    </div>
    <div class="footer-bottom">
        <div>
            <p class="font16-500 color-font-blue mobile-width-half">© 2026 Marlett Dienstleistungen OHG</p>

            <div class="flex-row-gap24 mobile-flex-column">
                <a class="font16-500 color-font-blue" href="<?= url('impressum') ?>">Impressum</a>
                <a class="font16-500 color-font-blue" href="<?= url('datenschutzerklaerung') ?>">Datenschutz</a>
                <a class="font16-500 color-font-blue" href="<?= url('agb') ?>">AGB</a>
            </div>
        </div>
    </div>

</footer>
</main>
</div>
<script defer src="<?= url('/assets/js/glide.min.js') ?>"></script>
<script defer src="<?= url('/assets/js/img_comparison_slider.min.js') ?>"></script>

<script defer>

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.gog-rev-slider').forEach(function (slider) {

            new Glide(slider, {
                type: 'carousel',
                perView: 2,
                perMove: 1,
                gap: 20,
                bound: true,
                peek: 8,
                breakpoints: {
                    1024: { perView: 1 }
                }
            }).mount();

        });
        setTimeout(() => {
            document.querySelectorAll('.pic-slider').forEach(function (slider) {

                new Glide(slider, {
                    type: 'carousel',
                    perView: 4,
                    perMove: 1,
                    gap: 20,
                    bound: true,
                    breakpoints: {
                        1400: { perView: 3 },
                        1000: { perView: 2 },
                        750: { perView: 2 },
                        600: { perView: 1 }
                    }
                }).mount();

            });
        }, 500)

    });

</script>
</body>

</html>