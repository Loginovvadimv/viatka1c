<?php
get_header();
$current_page = $_GET['pag'] ? $_GET['pag'] : 1;


$params = array(
    'posts_per_page' => 7,
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
            <?php foreach ($data['events'] as $event): ?>
                <div class="events__wrap">
                    <a href="<?= get_permalink($event['id']) ?>">
                        <img class="events__img" src="<?= get_field('event-img', $event['id'])?>" alt="event" loading="lazy">
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
        <div class="allEvents__wrapper-mob">
            <?php foreach ($data['events'] as $event): ?>
                <div class="events__wrap">
                    <div class="events__wrapBox">
                        <a class="events__imgLink" href="<?= get_permalink($event['id']) ?>">
                            <img class="events__img" src="<?= get_field('event-img', $event['id'])?>" alt="event" loading="lazy">
                        </a>
                        <div class="events__infoBox">
                            <div class="events__date fs16"><?= get_field('event-date', $event['id']) ?></div>
                            <div class="events__time fs16">
                                <img src="<?= ASSETS ?>/images/icons/time.svg" alt="time"><?= get_field('event-time', $event['id']) ?>
                            </div>
                        </div>

                    </div>

                    <a href="<?= get_permalink($event['id']) ?>"><div class="events__name fs16"><?= get_field('event-name', $event['id']) ?></div></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php get_footer() ?>
