<?php

$current_page = $_GET['pag'] ? $_GET['pag'] : 1;


$params = array(
    'posts_per_page' => 4,
    'post_type' => 'events',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $current_page,
);

$events = new WP_Query($params);

foreach ($events->posts as $event) {
    $data['events'][] = [
        'id' => $event->ID,
        'name' => $event->post_title,
        'preview' => get_the_post_thumbnail($event->ID, 'full', ['loading' => 'lazy', 'class'=>'events__img']),
    ];
}

$pagination = Pagination::create(
    [
        'pages' => $events->max_num_pages,
        'paged' => $current_page,
        'range' => 1,
        'post_type' => 'events'
    ]
);
?>


<section class="events section">
    <div class="container">
            <div class="events__box">
                <h2 class="events__title title"><?= get_field('evens-title', 'options') ?></h2>
                <a href="/allevents/"><button class="events__btn btn-white">Все мероприятия</button></a>
            </div>
        <div class="events__wrapper">
            <?php foreach ($data['events'] as $event): ?>
            <div class="events__wrap">
                <a class="events__imgLink" href="<?= get_permalink($event['id']) ?>">
                    <?= $event['preview'] ?>
                </a>
                <div class="events__info">
                    <div class="events__date fs16"><?= get_field('event-date', $event['id']) ?></div>
                    <div class="events__time fs16">
                        <img src="<?= ASSETS ?>/images/icons/time.svg" alt="time"><?= get_field('event-time', $event['id']) ?>
                    </div>
                    <a href="<?= get_permalink($event['id']) ?>"><div class="events__name fs16"><?= get_field('event-name', $event['id']) ?></div></a>
                </div>
            </div>
            <?php endforeach; ?>
            <?= $pagination ?>
        </div>
        <div class="events__wrapper-mob">
            <?php foreach ($data['events'] as $event): ?>
                <div class="events__wrap">
                    <div class="events__wrapBox">
                        <a class="events__imgLink" href="<?= get_permalink($event['id']) ?>">
                            <?= $event['preview'] ?>
                        </a>
                        <div class="events__infoBox">
                            <div class="events__date fs16"><?= get_field('event-date', $event['id']) ?></div>
                            <div class="events__time fs16">
                                <img src="<?= ASSETS ?>/images/icons/time.svg" alt="time"><?= get_field('event-time', $event['id']) ?>
                            </div>
                        </div>

                    </div>

                        <a href="<?= get_permalink($event['id']) ?>"><div class="events__name fs16"><?= get_field('event-time', $event['id']) ?></div></a>
                </div>
            <?php endforeach; ?>
            <?= $pagination ?>
        </div>
    </div>
</section>