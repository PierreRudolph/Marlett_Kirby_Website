<?php snippet(name: 'header') ?>

<div class="section-wrapper">
    <div class="section-content grid-full">
        <h1 class="headline headline-x color-font-blue">
            Datenschutzerklärung
        </h1>
        <p class="text-regular color-font-darkblue">
            <?= $page->all_text()->toHtml() ?>
        </p>
    </div>
</div>

<?php snippet(name: 'footer') ?>