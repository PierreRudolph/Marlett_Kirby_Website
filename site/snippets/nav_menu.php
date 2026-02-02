<?php
$services = page('services');
$items = $services->children()->listed();
?>


<div class="main-nav__item has-dropdown">
  <a href="<?= url('services') ?>" class="main-nav__toggle">
    <?= $services->title() ?>
    <img class="arrow" src="<?= url('assets/icons/arrow_up.svg') ?>">
  </a>

  <ul class="dropdown">
    <?php foreach ($items as $item): ?>
      <li>
        <a href="<?= $item->url() ?>">
          <?= $item->title() ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</div>