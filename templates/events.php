<?php
$args = array(
    'posts_per_page' => 4,
    'post_type' => 'events',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
);
$events = new WP_Query($args);

foreach ($events->posts as $article) {
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


<section class="events section">
    <div class="container">
            <div class="events__box">
                <h2 class="events__title title"><?= get_field('evens-title', 'options') ?></h2>
                <a href="/allevents/"><button class="events__btn btn-white">Все мероприятия</button></a>
            </div>
        <div class="events__wrapper">
            <?php foreach ($data['articles'] as $article): ?>
            <div class="events__wrap">
                <?= $article['preview'] ?>
                <div class="events__info">
                    <div class="events__date subtitle"><?= $article['date'] ?></div>
                    <div class="events__time subtitle">
                        <img src="<?= ASSETS ?>/images/icons/time.svg" alt="time"><?= $article['events-time'] ?>
                    </div>
                    <div class="events__name subtitle"><?= $article['name'] ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>