<div class="section-wrapper lightgrey-bg" id="<?= $block->section_id()->toHtml() ?>">
    <img src="<?= url(path: "assets/layout/layer/brick_layer_left_blue.svg") ?>" class="brick-layer-left">

    <section class="section-gap48" style="overflow: visible;">

        <div class="section-content-gap20">

            <h2 class="headline headline-l color-font-blue ">
                <?= $block->headline_first_half()->toHtml() ?>
                <br>
                <span class="headline headline-l color-font-skyblue">
                    <?= $block->headline_second_half()->toHtml() ?>
                </span>
            </h2>

            <p class="text-regular500 color-font-darkblue-alt2"><?= $block->text()->toHtml() ?></p>

            <div class="grid-full flex-middle">
                <a style="margin-bottom: 6px;" class="btn-pos btn-text"
                    href="<?= $block->button_contact_link()->toUrl() ?>">
                    <?= $block->button_contact_text()->toHtml() ?>
                </a>
            </div>

        </div>

        <div id="faq" class="q-and-a-accordion-wrapper section-content-gap20" aria-label="Häufige Fragen">

            <?php $q_and_a_collection = $block->q_and_a_collection()->toStructure() ?>
            <?php foreach ($q_and_a_collection as $q_and_a): ?>
                <?php $index = $q_and_a_collection->indexOf($q_and_a) ?>
                <div onclick="openCloseAccordion(<?= $index ?>)" class="accordion" id="accordion-<?= $index ?>">
                    <button class="btn-accordion">
                        <h4 id="faq-question" class="color-font-darkblue-alt2 text-headline mobile-font-16p">
                            <?= $q_and_a->question()->toHtml() ?>
                        </h4>
                        <img src="<?= url('assets/icons/icon_arrow_down.svg') ?>" alt="Icon Pfeil nach Unten" loading="lazy"
                            role="img">
                    </button>
                    <div id="accordion-text" class="text-accordion">
                        <p id="faq-answer" class="text-regular500 color-font-darkblue-alt2">
                            <?= $q_and_a->answer()->toHtml() ?>
                        </p>
                    </div>
                </div>

            <?php endforeach ?>


    </section>

    <img src="<?= url(path: "assets/layout/layer/brick_layer_right_blue.svg") ?>" class="brick-layer-right">
</div>



<?php
$faqArray = [];
$q_and_a_collection = $block->q_and_a_collection()->toStructure();
if ($q_and_a_collection->isNotEmpty()):
    foreach ($q_and_a_collection as $faq):
        $question = trim(strip_tags($faq->question()->value()));
        $answer = trim(strip_tags($faq->answer()->value()));
        if ($question && $answer):
            $faqArray[] = [
                "@type" => "Question",
                "name" => $question,
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => $answer
                ]
            ];
        endif;
    endforeach;
endif;
?>

<?php if (!empty($faqArray)): ?>
    <script type="application/ld+json">
    <?= json_encode([
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "mainEntity" => $faqArray
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>
<?php endif ?>