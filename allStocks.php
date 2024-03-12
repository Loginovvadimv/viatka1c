<?php
    // Template Name: Все акции
get_header();
$params = array(
    'post_type' => 'stocks',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
);
$stocks = get_posts($params);
?>

<section class="allStocks newSection">
    <div class="container">
        <div class="background-wrap">
            <div class="scroller">
                <div class="allStocks__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="#" class="crumbActive">События</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive">Акции</div>
                </div>
            </div>
        <h2 class="allStocks__title title">Акции</h2>
        </div>
        <div class="scroller">
            <div class="quickLinks">
                <div class="link-block quickLinks__block">
                    <a href="/allnews/">Новости</a>
                    <a href="/allevents/">Мероприятия</a>
                    <a href="/allpromos/" class="active">Акции</a>
                </div>
                <div class="quickLinks__line"></div>
            </div>
        </div>

        <div class="allStocks__wrapper">
                <?php foreach ($stocks as $key => $stock): ?>
                    <div class="stocks__wrap allStocks__wrap">
                        <div class="stocks__img">
                            <a href="<?= $stock->guid ?>">
                                <img src="<?= get_the_post_thumbnail($stock->ID, 'full', ['loading' => 'lazy']) ?>" alt="logo">
                            </a>
                        </div>
                        <div class="stocks__info">
                            <a class="stocks__text" href="<?= $stock->guid ?>"><?= $stock->post_title  ?></a>
                            <div class="stocks__date"><?= get_field('promodate', $stock->ID)?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
