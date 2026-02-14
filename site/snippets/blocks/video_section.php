<div class="section-wrapper lightgrey-bg" id="<?= $block->section_id()->toHtml() ?>">

    <section class="section-gap48">

        <div class="section-content">
            <h2 class="headline headline-l color-font-blue services-headline">
                <?= $block->headline_first_half()->toHtml() ?>
                <br>
                <span class="headline headline-l color-font-skyblue">
                    <?= $block->headline_second_half()->toHtml() ?>
                </span>
            </h2>
        </div>

        <div class="section-content-row-gap20">
            <?php $videoCollection = $block->videos()->toStructure() ?>

            <?php foreach ($videoCollection as $videoStructure): ?>
                <?php $index = $videoCollection->indexOf($videoStructure) ?>
                <div class="video-wrapper">
                    <div class="video-thumbnail-layer" id="blue-video-layer-<?= $index ?>">
                        <div class="flex-column-gap12" style="align-items: center;">
                            <h3 class="headline headline-s color-font-white">
                                <?= $videoStructure->video_thumbnail_text()->toHtml() ?>
                            </h3>
                            <?php if ($iconPath = url('assets/icons/icon_play_btn.svg')): ?>
                                <img src="<?= $iconPath ?>" alt="Abspiel Knopf">
                            <?php endif ?>
                        </div>
                    </div>
                    <div onclick="hideVideoLayers(<?= $index ?>)">
                        <?php if ($iconPath = url('assets/icons/icon_play_btn.svg')): ?>
                            <img id="poster-video-layer-<?= $index ?>" class="video-poster-layer"
                                src="<?= $videoStructure->video_thumbnail()->toFile()->url() ?>">
                        <?php endif ?>
                    </div>


                    <?php if ($videoFile = $videoStructure->video()->toFile()): ?>
                        <video class="video-with-thumbnail" id="section-video-<?= $index ?>" controls
                            poster="<?= $videoStructure->video_thumbnail()->toFile()->url() ?>">
                            <source src="<?= $videoFile->url() ?>" type="<?= $videoFile->mime() ?>">
                        </video>
                    <?php endif ?>
                </div>

            <?php endforeach ?>
        </div>

    </section>
</div>