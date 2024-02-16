<?php
// Template Name: Партнёрские программы
get_header();
$args = array(
    'posts_per_page' => 3,
    'post_type' => 'news',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
);
$news = new WP_Query($args);

foreach ($news->posts as $article) {
    $data['articles'][] = [
        'id' => $article->ID,
        'name' => $article->post_title,
        'content' => apply_filters('the_content', get_post_field('post_content', $article->ID)),
        'preview' => get_the_post_thumbnail($article->ID, 'full', ['loading' => 'lazy']),
        'except' => get_the_excerpt($article->ID),
        'link' => get_permalink($article->ID),
//        'date' => $article->post_date,
        'date' => Helper::getHumanDate($article->post_date),
    ];
}
?>

<section class="partners newSection">
    <div class="container">
        <div class="partners__bgWrap background-wrap">
            <div class="partners__breadСrumbs breadСrumbs">
                <a href="/">Главная</a>
                <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                <a href="#">Партнерам</a>
                <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                <a href="/partners/" class="crumbActive">Партнёрские программы</a>
            </div>
            <div class="pageNews__title title">Партнёрские программы</div>
        </div>

        </div>
    </div>
</section>
<?php get_footer() ?>
