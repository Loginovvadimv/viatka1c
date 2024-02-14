<?php
    // Template Name: О нас
    get_header();

    $forusRep = get_field('forus-rep', 'options');
?>

<section class="forus newSection">
    <div class="container">
        <div class="forus__bgWrap background-wrap">
            <div class="forus__breadСrumbs breadСrumbs">
                <a href="/">Главная</a>
                <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                <a href="/forus/" class="crumbActive">О нас</a>
            </div>
            <h1 class="forus__title title">О нас</h1>
        </div>
        <div class="forus__info">
            <?php foreach ($forusRep as $key => $item): ?>
            <p><?= $item['forus-text'] ?></p>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer() ?>
