<?php
$params = array(
    'post_type' => 'events',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 4,
);
$events = get_posts($params);
?>


<section class="events section">
    <div class="container">
            <div class="events__box">
                <h2 class="events__title title"><?= get_field('evens-title', 'options') ?></h2>
                <a href="/allevents/"><button class="events__btn btn-white">Все мероприятия</button></a>
            </div>
        <div class="events__wrapper">
            <?php foreach ($events as $key => $item): ?>
            <div class="events__wrap">
                <a href="<?= $item->guid ?>">
                <img class="events__img" src="<?= get_field('event-img', $item->ID)?>" alt="event" loading="lazy">
                </a>
                <div class="events__info">
                    <div class="events__date fs16"><?= get_field('event-date', $item->ID) ?></div>
                    <div class="events__time fs16">
                        <img src="<?= ASSETS ?>/images/icons/time.svg" alt="time"><?= get_field('event-time', $item->ID) ?>
                    </div>
                    <a href="<?= $item->guid ?>"><div class="events__name fs16"><?= get_field('event-name', $item->ID) ?></div></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>