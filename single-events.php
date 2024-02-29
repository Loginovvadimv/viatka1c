<?php
get_header();
$params = array(
    'post_type' => 'events',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
    'p'=> get_the_ID()
);
$events = get_posts($params);
?>

<?php foreach ($events as $key => $item): ?>

    <section class="eventsSingle newSection">
        <div class="container">
            <div class="contacts__bgWrap background-wrap">
                <div class="contacts__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="#">События</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/allevents/">Мероприятия</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div  class="crumbActive"><?= get_field('event-name', $item->ID) ?></div>
                </div>
                <h2 class="eventsSingle__title title"><?= get_field('event-name', $item->ID) ?></h2>
            </div>
            <div class="eventsSingle__wrapper">
                <div class="eventsSingle__regWrap">
                    <div class="eventsSingle__regbox">
                        <div class="events__date eventsSingle__date fs16"><?= get_field('event-date', $item->ID) ?></div>
                        <div class="eventsSingle__time fs16">
                            <img src="<?= ASSETS ?>/images/icons/time.svg" alt="time"><?= get_field('event-time-single', $item->ID) ?>
                        </div>
                    </div>
                    <div class="eventsSingle__price fs16">Стоимость обучения: <?= get_field('event-price', $item->ID) ?></div>
                    <button class="eventsSingle__btn btn-orange">Зарегистрироваться</button>

                </div>
            </div>
        </div>
    </section>


<?php endforeach; ?>




<?php get_footer() ?>
