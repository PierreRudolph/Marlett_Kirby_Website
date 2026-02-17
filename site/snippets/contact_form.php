<?php if ($success): ?>
    <div class="alert success">
        <p class="headline headline-m color-font-white"><?= $success ?></p>
    </div>
<?php else: ?>
    <?php if (isset($alert['error'])): ?>
        <div><?= $alert['error'] ?></div>
    <?php endif ?>
    <form class="contact-form flex-column-gap24 lightgrey-bg" method="post" action="<?= $page->url() ?>">
        <div class="honeypot">
            <label for="website">Website <abbr title="required">*</abbr></label>
            <input type="url" id="website" name="website" tabindex="-1">
        </div>

        <h3 class="headline-m color-font-darkblue-alt3">Vereinbare deinen Termin</h3>

        <div class="flex-column-gap20">
            <div class="field">
                <label for="service">Für welche Leistung interessieren Sie sich?</label>
                <select class="services-dropdown color-font-darkblue" name="service" id="service">
                    <?php foreach (page('leistungen')->children()->listed() as $p): ?>
                        <option value="<?= $p->title()->html() ?>">
                            <?= $p->title()->html() ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="grid-column-gap20">
                <div class="field grid-span1">
                    <label for="first-name">
                        Vorname <abbr title="Bitte ausfüllen">*</abbr>
                    </label>
                    <input type="text" id="first-name" name="first-name" placeholder="Vorname"
                        value="<?= esc($data['first-name'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['first-name']) ? '<span class="alert error">' . esc($alert['first-name']) . '</span>' : '' ?>
                </div>

                <div class="field grid-span1">
                    <label for="last-name">
                        Nachname <abbr title="Bitte ausfüllen">*</abbr>
                    </label>
                    <input type="text" id="last-name" name="last-name" placeholder="Nachname"
                        value="<?= esc($data['last-name'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['last-name']) ? '<span class="alert error">' . esc($alert['last-name']) . '</span>' : '' ?>
                </div>

                <div class="field grid-span1">
                    <label for="zip-code">
                        Postleitzahl <abbr title="Bitte ausfüllen">*</abbr>
                    </label>
                    <input type="number" id="zip-code" name="zip-code" placeholder="PLZ"
                        value="<?= esc($data['zip-code'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['zip-code']) ? '<span class="alert error">' . esc($alert['zip-code']) . '</span>' : '' ?>
                </div>

                <div class="field grid-span1">
                    <label for="city">
                        Ort <abbr title="Bitte ausfüllen">*</abbr>
                    </label>
                    <input type="text" id="city" name="city" placeholder="Ort"
                        value="<?= esc($data['city'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['city']) ? '<span class="alert error">' . esc($alert['city']) . '</span>' : '' ?>
                </div>

                <div class="field grid-span1">
                    <label for="email">
                        Email (optional)
                    </label>
                    <input type="email" id="email" name="email" placeholder="Email"
                        value="<?= esc($data['email'] ?? '', 'attr') ?>">
                    <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
                </div>

                <div class="field grid-span1">
                    <label for="phone">
                        Telefon <abbr title="Bitte ausfüllen">*</abbr>
                    </label>
                    <input type="tel" id="phone" name="phone" placeholder="Telefonnummer"
                        value="<?= esc($data['phone'] ?? '', 'attr') ?>" required>
                    <?= isset($alert['phone']) ? '<span class="alert error">' . esc($alert['phone']) . '</span>' : '' ?>
                </div>
            </div>


            <div class="field">
                <label for="text">
                    Nachricht (optional)
                </label>
                <textarea placeholder="Deine Nachricht" id="text" name="text" required>
                                                                                                                                                                                                    <?= esc($data['text'] ?? '') ?>
                                                                                                                                                                                                </textarea>
                <?= isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?>
            </div>
        </div>

        <div class="field checkbox">
            <label>
                <input type="checkbox" name="privacy" value="1" <?= isset($data['privacy']) && $data['privacy'] ? 'checked' : '' ?> required>
                Ich stimme den <a href="<?= url('datenschutzerklaerung') ?>" target="_blank">Datenschutzbestimmungen</a> zu <abbr
                    title="required">*</abbr>
            </label>
            <?= isset($alert['privacy']) ? '<span class="alert error">' . esc($alert['privacy']) . '</span>' : '' ?>
        </div>

        <button class="btn-pos btn-text" type="submit" name="submit" value="Senden">Senden</button>


    </form>
<?php endif ?>