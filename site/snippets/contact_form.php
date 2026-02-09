<?php if ($success): ?>
    <div class="alert success">
        <p><?= $success ?></p>
    </div>
<?php else: ?>
    <?php if (isset($alert['error'])): ?>
        <div><?= $alert['error'] ?></div>
    <?php endif ?>
    <form method="post" action="<?= $page->url() ?>">
        <div class="honeypot">
            <label for="website">Website <abbr title="required">*</abbr></label>
            <input type="url" id="website" name="website" tabindex="-1">
        </div>

        <div class="field">
            <label for="service" style="display:none;">Choose a service:</label>
            <select name="service" id="service">
                <?php foreach (page('services')->children()->listed() as $p): ?>
                    <option value="<?= $p->title()->html() ?>">
                        <?= $p->title()->html() ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>

        <div class="field">
            <label for="first-name">
                Vorname <abbr title="required">*</abbr>
            </label>
            <input type="text" id="first-name" name="first-name" value="<?= esc($data['first-name'] ?? '', 'attr') ?>"
                required>
            <?= isset($alert['first-name']) ? '<span class="alert error">' . esc($alert['first-name']) . '</span>' : '' ?>
        </div>

        <div class="field">
            <label for="last-name">
                Nachname <abbr title="required">*</abbr>
            </label>
            <input type="text" id="last-name" name="last-name" value="<?= esc($data['last-name'] ?? '', 'attr') ?>"
                required>
            <?= isset($alert['last-name']) ? '<span class="alert error">' . esc($alert['last-name']) . '</span>' : '' ?>
        </div>

        <div class="field">
            <label for="zip-code">
                Postleitzahl <abbr title="required">*</abbr>
            </label>
            <input type="number" id="zip-code" name="zip-code" value="<?= esc($data['zip-code'] ?? '', 'attr') ?>" required>
            <?= isset($alert['zip-code']) ? '<span class="alert error">' . esc($alert['zip-code']) . '</span>' : '' ?>
        </div>

        <div class="field">
            <label for="city">
                Ort <abbr title="required">*</abbr>
            </label>
            <input type="text" id="city" name="city" value="<?= esc($data['city'] ?? '', 'attr') ?>" required>
            <?= isset($alert['city']) ? '<span class="alert error">' . esc($alert['city']) . '</span>' : '' ?>
        </div>

        <div class="field">
            <label for="email">
                Email (optional)
            </label>
            <input type="email" id="email" name="email" value="<?= esc($data['email'] ?? '', 'attr') ?>">
            <?= isset($alert['email']) ? '<span class="alert error">' . esc($alert['email']) . '</span>' : '' ?>
        </div>

        <div class="field">
            <label for="phone">
                Telefon <abbr title="required">*</abbr>
            </label>
            <input type="tel" id="phone" name="phone" value="<?= esc($data['phone'] ?? '', 'attr') ?>">
            <?= isset($alert['phone']) ? '<span class="alert error">' . esc($alert['phone']) . '</span>' : '' ?>
        </div>

        <div class="field">
            <label for="text">
                Text <abbr title="required">*</abbr>
            </label>
            <textarea id="text" name="text" required>
                                                                                        <?= esc($data['text'] ?? '') ?>
                                                                                    </textarea>
            <?= isset($alert['text']) ? '<span class="alert error">' . esc($alert['text']) . '</span>' : '' ?>
        </div>

        <input type="submit" name="submit" value="Submit">
    </form>
<?php endif ?>