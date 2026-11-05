<?php snippet(name: 'header') ?>
<div class="section-wrapper">
    <section class="above-fold">
        <div class="section-content imprint-section">
            <div class="flex-column-gap24">
                <div>
                    <h1 class="headline headline-x color-font-blue">
                        Marlett Steinsanierungen
                    </h1>
                    <div class="flex-row-gap4 flex-wrap">
                        <p class="text-regular500 color-font-darkblue"> Eine Marke der
                        <p class="color-font-darkblue text-regular500"><strong>Marlett Dienstleistungen OHG</strong></p>
                        </p>

                    </div>
                </div>


                <div class="location-card flex-column-gap24 lightgrey-bg">
                    <h2 class="headline headline-xs color-font-darkblue">Angaben gemäß § 5 DDG</h2>
                    <div class="flex-column-gap5">
                        <p class="text-regular500 color-font-darkblue"><strong>Unternehmen:</strong></p>
                        <p class="text-regular500 color-font-darkblue">Marlett Dienstleistungen OHG</p>
                    </div>

                    <div class="flex-column-gap5">
                        <p class="text-regular500 color-font-darkblue"><strong>Geschäftsanschrift:</strong></p>
                        <p class="text-regular500 color-font-darkblue">
                            <?= $page->adresse()->toHtml() ?>
                        </p>
                    </div>
                </div>

                <div class="location-card flex-column-gap24 lightgrey-bg">
                    <h2 class="headline headline-xs color-font-darkblue">Vertretungsberechtigte Gesellschafter:</h2>
                    <div>
                        <?php
                        // Gesellschafter
                        $gesellschafter = $page->gesellschafter()->toStructure();
                        if ($gesellschafter->isNotEmpty()): ?>
                            <?php foreach ($gesellschafter as $g): ?>
                                <p class="text-regular500 color-font-darkblue">
                                    <?= $g->name()->html() ?>
                                </p>
                            <?php endforeach ?>
                        <?php endif ?>

                    </div>
                    <p class="text-regular500 color-font-darkblue">Jeweils einzelvertretungsberechtigt.</p>
                    <div class="flex-column-gap16">
                        <p class="label-alt-text  color-font-darkblue"><strong>Kontakt:</strong></p>

                        <div class="flex-row-gap15">
                            <img src="assets/icons/phone_negativ.svg" width="24px" height="24px" alt="Telefon Icon"
                                loading="lazy" role="img">
                            <p class="text-regular500  color-font-darkblue">
                                <strong>Tel:</strong>
                                <?= $site->phone_line()->toHtml() ?>
                            </p>

                        </div>

                        <div class="flex-row-gap15">
                            <img src="assets/icons/phone_negativ.svg" width="24px" height="24px" alt="Telefon Icon"
                                loading="lazy" role="img">
                            <p class="text-regular500  color-font-darkblue">
                                <strong>Mobil:</strong>
                                <?= $site->phone()->toHtml() ?>
                            </p>

                        </div>

                        <div class="overflow-hidden">
                            <p class="text-regular500  color-font-darkblue">
                                <?php if ($page->mail_haupt()->isNotEmpty()): ?>
                                    <strong>Mail:</strong>
                                    <a href="mailto:<?= $page->mail_haupt()->esc() ?>">
                                        <?= $page->mail_haupt()->html() ?>
                                    </a>

                                <?php endif ?>
                            </p>
                        </div>

                        <div>
                            <p class="text-regular500  color-font-darkblue">

                                <strong>Website:</strong>
                                <a href="marlett-steinsanierungen.de">
                                    www.marlett-steinsanierungen.de </a>

                            </p>
                        </div>

                    </div>
                </div>

                <div class="location-card flex-column-gap24 lightgrey-bg">
                    <h2 class="headline headline-xs color-font-darkblue">Handelsregister:</h2>
                    <div>
                        <p class="text-regular500 color-font-darkblue">Registergericht: Amtsgericht Stuttgart</p>
                        <p class="text-regular500 color-font-darkblue">Registernummer: HRA 743778</p>
                    </div>

                    <div class="flex-column-gap5">
                        <p class="text-regular500 color-font-darkblue"><strong>Umsatzsteuer-Identifikationsnummer gemäß
                                § 27a UStG:</strong></p>
                        <p class="text-regular500 color-font-darkblue">DE365963347</p>
                    </div>

                    <div class="flex-column-gap5">
                        <p class="text-regular500 color-font-darkblue"><strong>Verantwortlich für den Inhalt gemäß § 18
                                Abs. 2 MStV:</strong></p>
                        <p class="text-regular500 color-font-darkblue">Florian Martan</p>

                        <p class="text-regular500 color-font-darkblue"> Siedlerstr. 8, 71126 Gäufelden </p>

                    </div>

                </div>
                <!-- Altes Impressum 5.11.26 (obige änderung auf wunsch von Florian)
                <div class="location-card flex-column-gap24 lightgrey-bg">

                    <h2 class="headline headline-xs color-font-darkblue">Adresse</h2>
                    <p class="text-regular500 color-font-darkblue">
                        <?= $page->adresse()->toHtml() ?>
                    </p>
                    <div class="overflow-hidden">
                        <p class="text-regular500  color-font-darkblue">
                            <?php if ($page->mail_haupt()->isNotEmpty()): ?>
                                <strong>Mail:</strong>
                                <a href="mailto:<?= $page->mail_haupt()->esc() ?>">
                                    <?= $page->mail_haupt()->html() ?>
                                </a>

                            <?php endif ?>
                        </p>
                    </div>

                    <div class="flex-row-gap15">
                        <img src="assets/icons/phone_negativ.svg" width="24px" height="24px" alt="Telefon Icon"
                            loading="lazy" role="img">
                        <p class="text-regular500  color-font-darkblue">
                            <strong>Tel:</strong>
                            <?= $site->phone_line()->toHtml() ?>
                        </p>

                    </div>

                    <div class="flex-row-gap15">
                        <img src="assets/icons/phone_negativ.svg" width="24px" height="24px" alt="Telefon Icon"
                            loading="lazy" role="img">
                        <p class="text-regular500  color-font-darkblue">
                            <strong>Mobil:</strong>
                            <?= $site->phone()->toHtml() ?>
                        </p>

                    </div>

                </div>

                <?php

                $show_second_adress = $page->show_second_adress()->isTrue();
                ?>
                <?php if ($show_second_adress): ?>
                    <div class="location-card flex-column-gap24 lightgrey-bg">

                        <h2 class="text-headline color-font-darkblue">Adresse Zweigstelle</h2>
                        <div class="overflow-hidden">

                            <p class="text-regular color-font-darkblue">
                                <?= $page->adresse_zweigstelle()->toHtml() ?>
                            </p>
                            <p class="text-regular color-font-darkblue">
                                <?php if ($page->mail_zweigstelle()->isNotEmpty()): ?>
                                <p><strong>Mail:</strong>
                                    <a href="mailto:<?= $page->mail_zweigstelle()->esc() ?>">
                                        <?= $page->mail_zweigstelle()->html() ?>
                                    </a>
                                </p>
                            <?php endif ?>
                            </p>
                        </div>

                        <div class="flex-row-gap15">
                            <img src="assets/icons/phone_negativ.svg" width="24px" height="24px" alt="Telefon Icon"
                                loading="lazy" role="img">
                            <p class="text-regular color-font-darkblue">
                            <p><strong>Tel:</strong></p>
                            <?= $page->tel_zweigstelle()->toHtml() ?>
                            </p>

                        </div>
                        <div class="flex-row-gap15">
                            <img src="assets/icons/phone_negativ.svg" width="24px" height="24px" alt="Telefon Icon"
                                loading="lazy" role="img">
                            <p class="text-regular color-font-darkblue">
                            <p><strong>Mobil:</strong></p>
                            <?= $page->mobil_zweigstelle()->toHtml() ?>
                            </p>

                        </div>
                    </div>
                <?php endif ?>


                <div class="location-card flex-column-gap24 lightgrey-bg">

                    <h4 class="headline headline-xs color-font-darkblue">Vertretungsberechtigte Gesellschafter</h4>
                    <div class="overflow-hidden">

                        <?php
                        // Gesellschafter
                        $gesellschafter = $page->gesellschafter()->toStructure();
                        if ($gesellschafter->isNotEmpty()): ?>
                            <?php foreach ($gesellschafter as $g): ?>
                                <p class="text-regular500 color-font-darkblue">
                                    <?= $g->name()->html() ?>
                                </p>
                            <?php endforeach ?>
                        <?php endif ?>

                    </div>

                    <div class="flex-row-gap15">
                        <p class="text-regular500  color-font-darkblue">
                            <strong>Umsatzsteuer ID:</strong>
                            <?= $page->ustid()->html() ?>
                        </p>
                    </div>

                    <div class="flex-row-gap15">
                        <p class="text-regular color-font-darkblue">
                            <strong>Betriebshaftplicht:</strong><br>
                            <strong>Versicherung wurde abgeschlossen bei:</strong>
                        </p>

                    </div>
                    <div class="flex-column-gap5">
                        <p class="text-regular500 color-font-darkblue">
                            <strong>Linke & Kalkbrenner GmbH</strong>
                        </p>
                        <p class="text-headline color-font-darkblue">
                            Adresse:
                        </p>
                        <p class="text-regular500 color-font-darkblue">
                            Ulmer Str. 133
                        </p>
                        <p class="text-regular500 color-font-darkblue">
                            86156 Augsburg
                        </p>
                        <p class="text-regular500 color-font-darkblue">
                            <strong>Tel:</strong> +49 821 51007
                        </p>
                    </div>

                </div>

                <div class="location-card flex-column-gap24 lightgrey-bg">

                    <h2 class="headline headline-xs color-font-darkblue">Gewerbeaufsicht</h2>
                    <p class="text-regular500 color-font-darkblue">
                        <strong>Stadtverwaltung Herrenberg</strong>
                    </p>
                    <p class="text-regular500 color-font-darkblue">
                        Marktplatz 1
                    </p>
                    <p class="text-regular500 color-font-darkblue">
                        71083 Herrenberg
                    </p>
                    <div class="flex-row-gap15">
                        <img src="assets/icons/phone_negativ.svg" width="24px" height="24px" alt="Telefon Icon"
                            loading="lazy" role="img">
                        <p class="text-regular500  color-font-darkblue">
                            <strong>Tel:</strong>
                            +49 7032 924-0
                        </p>

                    </div>

                </div> -->
            </div>

        </div>

    </section>
</div>

<?php
// Haftungsausschluss
$haftung = $page->haftungsausschluss()->toStructure();
if ($haftung->isNotEmpty()): ?>
    <div class="section-wrapper">
        <section class="section-gap48">


            <h2>Haftungsausschluss</h2>

            <?php foreach ($haftung as $block): ?>
                <div class="section-content grid-full">
                    <?php if ($block->headline()->isNotEmpty()): ?>
                        <h3><?= $block->headline()->html() ?></h3>
                    <?php endif ?>

                    <?php if ($block->text()->isNotEmpty()): ?>
                        <p><?= nl2br($block->text()->html()) ?></p>
                    <?php endif ?>

                </div>
            <?php endforeach ?>
    </div>
    </section>
<?php endif ?>

<?php snippet(name: 'footer') ?>