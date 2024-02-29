<?php
get_header();
$params = array(
    'post_type' => 'events',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => 4,
);
$events = get_posts($params);
?>

<section class="allEvents newSection">
    <div class="container">
        <div class="allEvents__breadСrumbs breadСrumbs">
            <a href="/">Главная</a>
            <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
            <a href="#" class="crumbActive">События</a>
            <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
            <div class="crumbActive">Мероприятия</div>
        </div>
        <h2 class="allEvents__title title">Мероприятия</h2>
        <div class="allEvents__wrapper">
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
                        <a href="<?= $item->guid ?>">
                        <div class="events__name fs16"><?= get_field('event-name', $item->ID) ?></div>
                        </a>
                    </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
</section>
<?php get_footer() ?>
