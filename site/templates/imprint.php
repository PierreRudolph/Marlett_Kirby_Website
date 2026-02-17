<?php snippet(name: 'header') ?>
<div class="section-wrapper">
    <section class="above-fold">
        <div class="section-content imprint-section">
            <div class="flex-column-gap24">
                <h1 class="headline headline-x color-font-blue">
                    MarlettGbr
                </h1>

                <div class="location-card flex-column-gap24 lightgrey-bg">

                    <h4 class="text-headline color-font-darkblue">Adresse</h4>
                    <div class="overflow-hidden">

                        <p class="text-regular color-font-darkblue">
                            <?= $page->adresse()->toHtml() ?>
                        </p>
                        <p class="text-regular color-font-darkblue">
                            <?php if ($page->mail_haupt()->isNotEmpty()): ?>
                            <p><strong>Mail:</strong>
                                <a href="mailto:<?= $page->mail_haupt()->esc() ?>">
                                    <?= $page->mail_haupt()->html() ?>
                                </a>
                            </p>
                        <?php endif ?>
                        </p>
                    </div>

                    <div class="flex-row-gap15">
                        <img src="assets/icons/phone_negativ.svg" alt="Telefon Icon" loading="lazy" role="img">
                        <p class="text-regular color-font-darkblue">
                        <p><strong>Tel:</strong></p>
                        <?= $page->tel_haupt()->toHtml() ?>
                        </p>

                    </div>

                </div>
                <div class="location-card flex-column-gap24 lightgrey-bg">

                    <h4 class="text-headline color-font-darkblue">Adresse Zweigstelle</h4>
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
                        <img src="assets/icons/phone_negativ.svg" alt="Telefon Icon" loading="lazy" role="img">
                        <p class="text-regular color-font-darkblue">
                        <p><strong>Tel:</strong></p>
                        <?= $page->tel_zweigstelle()->toHtml() ?>
                        </p>

                    </div>
                    <div class="flex-row-gap15">
                        <img src="assets/icons/phone_negativ.svg" alt="Telefon Icon" loading="lazy" role="img">
                        <p class="text-regular color-font-darkblue">
                        <p><strong>Mobil:</strong></p>
                        <?= $page->mobil_zweigstelle()->toHtml() ?>
                        </p>

                    </div>
                </div>

                <div class="location-card flex-column-gap24 lightgrey-bg">

                    <h4 class="text-headline color-font-darkblue">Vertretungsberechtigte Gesellschafter</h4>
                    <div class="overflow-hidden">

                        <?php
                        // Gesellschafter
                        $gesellschafter = $page->gesellschafter()->toStructure();
                        if ($gesellschafter->isNotEmpty()): ?>
                            <?php foreach ($gesellschafter as $g): ?>
                                <p class="text-regular color-font-darkblue">
                                    <?= $g->name()->html() ?>
                                </p>
                            <?php endforeach ?>
                        <?php endif ?>

                    </div>

                    <div class="flex-row-gap15">
                        <p class="text-regular color-font-darkblue">
                        <p><strong>Umsatzsteuer ID:</strong>
                            <?= $page->ustid()->html() ?>
                        </p>

                    </div>
                </div>
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