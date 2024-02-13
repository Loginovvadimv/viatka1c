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
        'date' => $article->post_date,
    ];
}
?>

<section class="news">
    <div class="container">
        <pre>
            <?= var_dump($data['articles']) ?>
        </pre>

        <div class="news__flexBox">
            <div class="news__title title">Новости</div>
            <a href="/allnews/"><button class="news__btn btn-white">Все новости</button></a>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ($data['articles'] as $article): ?>
                <div class="news__wrap">
                    <a href="<?= $article['link'] ?>">
                        <?= $article['preview'] ?>
                    </a>
                    <div class="news__info">
                        <div class="news__date subtitle"><img src="<?= ASSETS ?>/images/icons/date.svg" alt="date">
                            <?= $article['date'] ?>
                        </div>
                        <a href="<?= $article['link'] ?>">
                        <div class="news__name subtitle">
                            <?= $article['name'] ?>
                        </div>
                        </a>
                        <div class="news__text subtitle">
                            <?=$article['except'] ?>
                        </div>
                    </div>

                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>