<div class="section-wrapper" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap48 width-full">
        <div class="flex-column-gap24 grid-middle">
            <h2 class="headline headline-l color-font-blue reasons-headline">
                <?= $block->headline_first_half()->toHtml() ?>
                <br>
                <span class="headline headline-l color-font-skyblue">
                    <?= $block->headline_second_half()->toHtml() ?>
                </span>
            </h2>
        </div>

        <div class="flex-row-gap20 grid-full flex-wrap">
            <?php foreach ($block->cards()->toStructure() as $card): ?>
                <div class="location-card flex-column-gap24 lightgrey-bg">

                    <div class="icon-text-card-img">
                        <img src="assets/icons/icon_location_pin.svg" alt="Icon Karten Marker" loading="lazy" role="img">
                    </div>

                    <div class="overflow-hidden">
                        <h3 class="headline headline-xs color-font-darkblue">Standort <?= $card->city()->toHtml() ?>
                        </h3>
                        <p class="headline-xs color-font-darkblue"><?= $card->street_and_number()->toHtml() ?></p>
                        <p class="headline-xs color-font-darkblue"><?= $card->zip()->toHtml() ?>
                            <?= $card->city()->toHtml() ?>
                        </p>
                    </div>

                    <a href="tel: <?= $site->phone()->toHtml() ?>" class="flex-row-gap15">
                        <img src="assets/icons/phone_negativ.svg" alt="Telefon Icon" loading="lazy" role="img">
                        <p class="headline-xs label-underline color-font-darkblue">
                            <?= $card->phone()->toHtml() ?>
                        </p>
                    </a>

                </div>
            <?php endforeach ?>
        </div>

    </section>

</div>