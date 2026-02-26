<?php
$services = page('leistungen');
$items = $services->children()->listed();
?>


<div class="main-nav__item">
  <div class="services-dropdown-link">
    <a href="<?= url('leistungen') ?>" class="main-nav__toggle mobile-headline-xs">
      <?= $services->title() ?></a>

    <img class="arrow mobile800-d-none" src="<?= url('assets/icons/chevron_down.svg') ?>" alt="Pfeil nach Unten"
      loading="lazy" role="img">

    <label class="nav-services-arrow desktop800-d-none">
      <input type="checkbox" class="d-none">
      <img width="33px" height="33px" class="mobile-arrow" src="<?= url('assets/icons/chevron_down.svg') ?>" alt="Pfeil nach Unten" loading="lazy"
        role="img">
    </label>
  </div>

  <ul class="dropdown mobile800-d-none">
    <?php foreach ($items as $item): ?>
      <li>
        <a class="copy-text-small" href="<?= $item->url() ?>">
          <?= $item->title() ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>


  <ul class="mobile-dropdown desktop800-d-none">
    <?php foreach ($items as $item): ?>
      <li>
        <a class="copy-text-small" href="<?= $item->url() ?>">
          <?= $item->title() ?>
        </a>
      </li>
    <?php endforeach ?>
  </ul>
</div>