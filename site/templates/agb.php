<?php snippet(name: 'header') ?>

<div class="section-wrapper">
    <section class="above-fold">

        <div class="section-content grid-full">
            <h1 class="headline headline-x color-font-blue">
                Allgemeine Geschäftsbedingungen
            </h1>
            <p class="text-regular color-font-darkblue">
                <?= $page->all_text()->toHtml() ?>
            </p>
        </div>
    </section>
</div>

<?php snippet(name: 'footer') ?>