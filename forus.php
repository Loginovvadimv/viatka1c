<?php
    // Template Name: О нас
    get_header();

    $forusRep = get_field('forus-rep', 'options');
    $forusStatuses = get_field('forus-statuses', 'options');
    $forusPrincip = get_field('forus-princip', 'options');
?>

<section class="forus newSection">
    <div class="container">
        <div class="forus__bgWrap background-wrap">
            <div class="scroller">
                <div class="forus__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive">О нас</div>
                </div>
            </div>

            <h1 class="forus__title title">О нас</h1>
        </div>
        <div class="forus__info">
            <?php foreach ($forusRep as $key => $item): ?>
            <p><?= $item['forus-text'] ?></p>
            <?php endforeach; ?>
        </div>
        <div class="forus__advantages">
            <div class="forus__statuses m48">
                <div class="forus__statusesTitle textTitle ">Наши статусы</div>
                <ul class="forus__statusesUl ul">
                    <?php foreach ($forusStatuses as $key => $item): ?>
                        <li class="forus__statusesLi li"><div class="forus__ellipce ellipce"></div><?= $item['forus-status'] ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="forus__princips m48">
                <div class="forus__principsTitle textTitle ">Наши принципы работы</div>
                <ul class="forus__principsUl ul">
                    <?php foreach ($forusPrincip as $key => $item): ?>
                        <li class="forus__principsLi li"><div class="ellipce"></div><?= $item['forus-princip-text'] ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="forus__target">
                <div class="forus__targetTitle textTitle">Наша цель</div>
                <div class="forus__text li"><?= get_field('forUs-subtitle', 'options') ?></div>
            </div>
        </div>

    </div>
    <div class="forus__sections">
        <?php get_template_part('templates/diploms') ?>
        <?php get_template_part('templates/letters') ?>
    </div>

</section>

<?php get_footer() ?>
