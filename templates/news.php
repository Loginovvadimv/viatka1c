<?php
$args = array(
    'posts_per_page' => 4,
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

    <?php if(!empty($data['articles'])):  ?>
<section class="news section">
    <div class="container">
        <div class="news__flexBox">
            <div class="news__title title">Новости</div>
            <a class="news__linkBnt" href="/allnews/"><button class="news__btn btn-white">Все новости</button></a>
        </div>

            <div class="news__wrapper">
                <?php foreach ($data['articles'] as $article): ?>
                <div class="news__wrap">
                    <a class="news__imgLink" href="<?= $article['link'] ?>">
                        <?= $article['preview'] ?>
                    </a>
                    <div class="news__info">
                        <div class="news__date"><img src="<?= ASSETS ?>/images/icons/date.svg" alt="date">
                            <?= $article['date'] ?>
                        </div>
                        <a href="<?= $article['link'] ?>">
                        <div class="news__name">
                            <?= $article['name'] ?>
                        </div>
                        </a>
                        <div class="news__text fs16">
                            <?=$article['except'] ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
    </div>
</section>
    <?php endif; ?>