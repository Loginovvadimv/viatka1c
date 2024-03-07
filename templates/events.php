<?php
$params = array(
    'post_type' => 'events',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
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
            <?php foreach ($events as $key => $event): ?>
            <div class="events__wrap">
                <a class="events__imgLink" href="<?= $event->guid ?>">
                <img class="events__img" src="<?= get_field('event-img', $event->ID)?>" alt="event" loading="lazy">
                </a>
                <div class="events__info">
                    <div class="events__date fs16"><?= get_field('event-date', $event->ID) ?></div>
                    <div class="events__time fs16">
                        <img src="<?= ASSETS ?>/images/icons/time.svg" alt="time"><?= get_field('event-time', $event->ID) ?>
                    </div>
                    <a href="<?= $event->guid ?>"><div class="events__name fs16"><?= get_field('event-name', $event->ID) ?></div></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="events__wrapper-mob">
            <?php foreach ($events as $key => $event): ?>
                <div class="events__wrap">
                    <div class="events__wrapBox">
                        <a class="events__imgLink" href="<?= $event->guid ?>">
                            <img class="events__img" src="<?= get_field('event-img', $event->ID)?>" alt="event" loading="lazy">
                        </a>
                        <div class="events__infoBox">
                            <div class="events__date fs16"><?= get_field('event-date', $event->ID) ?></div>
                            <div class="events__time fs16">
                                <img src="<?= ASSETS ?>/images/icons/time.svg" alt="time"><?= get_field('event-time', $event->ID) ?>
                            </div>
                        </div>

                    </div>

                        <a href="<?= $event->guid ?>"><div class="events__name fs16"><?= get_field('event-name', $event->ID) ?></div></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>