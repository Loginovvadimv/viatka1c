<?php
$reqisitesRep = get_field('requisites-repeat', 'options')
?>
<section class="requisites">
    <div class="container">
        <div class="requisites__wrapper">
            <h2 class="requisites__title title"><?= get_field('requisites-title', 'options') ?></h2>
            <div class="requisites__wrapBox">
                <div class="requisites__address"><?= get_field('requisites-address', 'options') ?></div>
                <?php foreach ($reqisitesRep as $key => $item): ?>
                    <div class="requisites__wrap">
                        <div class="requisites__wrapTitle"><?= $item['requisites-name'] ?></div>
                        <div class="requisites__wrapSubtitle"><?= $item['requisites-value'] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>