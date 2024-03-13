
<?php
    // Template Name: Все новости
get_header();
$args = array(
    'posts_per_page' => -1,
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
        'date' => Helper::getHumanDate($article->post_date),
    ];
}
?>

<section class="pageNews newSection">
    <div class="container">
        <div class="pageNews__bgWrap background-wrap">
            <div class="scroller">
                <div class="pageNews__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="#">События</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive">Новости</div>
                </div>
            </div>
            <div class="pageNews__title title">Новости</div>
        </div>
            <div class="scroller">
                <div class="quickLinks">
                    <div class="link-block quickLinks__block">
                        <a href="/allnews/" class="active">Новости</a>
                        <a href="/allevents/">Мероприятия</a>
                        <a href="/allpromos/">Акции</a>
                    </div>
                    <div class="quickLinks__line"></div>
                </div>
            </div>
        <div class="pageNews__wrapper">
            <?php foreach ($data['articles'] as $article): ?>
                <div class="pageNews__wrap">
                    <a class="pageNews__link" href="<?= $article['link'] ?>">
                        <?= $article['preview'] ?>
                    </a>
                    <div class="pageNews__info">
                        <div class="pageNews__date fs16"><img src="<?= ASSETS ?>/images/icons/date.svg" alt="date">
                            <?= $article['date'] ?>
                        </div>
                        <a href="<?= $article['link'] ?>">
                            <div class="pageNews__name fs16">
                                <?= $article['name'] ?>
                            </div>
                        </a>
                        <div class="pageNews__text fs16">
                            <?=$article['content'] ?>
                        </div>
                        <a class="pageNews__more" href="<?= $article['link'] ?>">Читать полностью</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
<?php get_footer() ?>
