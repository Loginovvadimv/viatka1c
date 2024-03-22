


<?php
    // Template Name: Все акции
get_header();

$current_page = $_GET['pag'] ? $_GET['pag'] : 1;

$params = array(
    'posts_per_page' => 10,
    'post_type' => 'stocks',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $current_page,
);

$stocks = new WP_Query($params);

foreach ($stocks->posts as $stock) {
    $data['stocks'][] = [
        'id' => $stock->ID,
        'post_title' => get_the_title($stock->ID),
    ];
}

$pagination = Pagination::create(
    [
        'pages' => $stocks->max_num_pages,
        'paged' => $current_page,
        'range' => 1,
        'post_type' => 'stocks'
    ]
);

?>

<section class="allStocks newSection">
    <div class="container">
        <div class="background-wrap">
            <div class="scroller">
                <div class="allStocks__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/allnews/" class="crumbActive">События</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive">Акции</div>
                </div>
            </div>
        <h1 class="allStocks__title title">Акции</h1>
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
                <?php foreach ($data['stocks'] as $stock): ?>
                    <div class="stocks__wrap allStocks__wrap">
                        <div class="stocks__img">
                            <a href="<?= get_permalink($stock['id']) ?>">
                                <img src="<?= get_the_post_thumbnail($stock['id'], 'full', ['loading' => 'lazy']) ?>" alt="logo">
                            </a>
                        </div>
                        <div class="stocks__info">
                            <a class="stocks__text" href="<?= get_permalink($stock['id']) ?>"><?= $stock['post_title'] ?></a>
                            <div class="stocks__date"><?= get_field('promodate', $stock['id'])?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?= $pagination ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
