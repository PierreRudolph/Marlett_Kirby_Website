<?php
// /site/templates/emails/email.php
?>

Hallo,

es wurde eine neue Anfrage über das Formular gesendet.

----------------------------------------
Service: <?= esc($data['service'] ?? '') ?>

Name: <?= esc($data['first-name'] ?? '') ?> <?= esc($data['last-name'] ?? '') ?>

Adresse:
PLZ: <?= esc($data['zip-code'] ?? '') ?>

Ort: <?= esc($data['city'] ?? '') ?>

Kontakt:
E-Mail: <?= esc($data['email'] ?? '') ?>

Telefon: <?= esc($data['phone'] ?? '') ?>

Nachricht:
<?= esc($data['text'] ?? '') ?>

----------------------------------------

Datenschutzerklärung akzeptiert: <?= !empty($data['privacy']) ? 'Ja' : 'Nein' ?>

----------------------------------------
Diese E-Mail wurde automatisch über die Website generiert.
