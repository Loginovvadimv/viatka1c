<?php
get_header();
$params = array(
    'post_type' => 'events',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
);
$events = get_posts($params);
?>

<section class="allEvents newSection">
    <div class="container">
        <div class="background-wrap">
            <div class="scroller">
                <div class="allEvents__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="#" class="crumbActive">События</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive">Мероприятия</div>
                </div>
            </div>
            <h2 class="allEvents__title title">Мероприятия</h2>
        </div>
        <div class="scroller">
            <div class="quickLinks">
                <div class="link-block quickLinks__block">
                    <a href="/allnews/">Новости</a>
                    <a href="/allevents/" class="active">Мероприятия</a>
                    <a href="/allpromos/">Акции</a>
                </div>
                <div class="quickLinks__line"></div>
            </div>
        </div>

        <div class="allEvents__wrapper">
                <?php foreach ($events as $key => $event): ?>
                <div class="events__wrap">
                    <a href="<?= $event->guid ?>">
                        <img class="events__img" src="<?= get_field('event-img', $event->ID)?>" alt="event" loading="lazy">
                    </a>
                    <div class="events__info">
                        <div class="events__date fs16"><?= get_field('event-date', $event->ID) ?></div>
                        <div class="events__time fs16">
                            <img src="<?= ASSETS ?>/images/icons/time.svg" alt="time"><?= get_field('event-time', $event->ID) ?>
                        </div>
                        <a href="<?= $event->guid ?>">
                            <div class="events__name fs16"><?= get_field('event-name', $event->ID) ?></div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>

            </div>
    </div>
</section>
<?php get_footer() ?>
