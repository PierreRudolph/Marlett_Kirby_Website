<div class="section-wrapper" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap48">
        <div class="section-content">
            <div class="flex-column-gap24">
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
                            <h4 class="text-headline color-font-darkblue">Standort <?= $card->city()->toHtml() ?></h4>
                            <p class="text-regular color-font-darkblue"><?= $card->street_and_number()->toHtml() ?></p>
                            <p class="text-regular color-font-darkblue"><?= $card->zip()->toHtml() ?>
                                <?= $card->city()->toHtml() ?>
                            </p>
                        </div>

                        <div class="flex-row-gap15">
                            <img src="assets/icons/phone_negativ.svg" alt="Telefon Icon" loading="lazy" role="img">
                            <p class="text-regular color-font-darkblue">
                                <?= $card->phone()->toHtml() ?>
                            </p>

                        </div>

                    </div>
                <?php endforeach ?>
            </div>
        </div>

    </section>

</div>