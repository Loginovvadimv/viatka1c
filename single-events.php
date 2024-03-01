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
$eventAdvUl = get_field('event-adv-ul', $events[0]->ID);
$eventsProgRep = get_field('events-progRep', $events[0]->ID);
$eventsSpeakRep = get_field('events-speakRep', $events[0]->ID);
$eventsСonditions = get_field('events-conditions', $events[0]->ID);
$eventsAttentions = get_field('events-attentions', $events[0]->ID);
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
                <div class="eventsSingle__invation">
                    <div class="eventsSingle__invationTitle"><?= get_field('event-inv', $item->ID) ?></div>
                    <div class="eventsSingle__advWrapper">
                        <div class="eventsSingle__advTitle fs16"><?= get_field('event-adv-title', $item->ID) ?></div>
                        <ul class="eventsSingle__advUl">
                            <?php foreach ($eventAdvUl as $key => $item2): ?>
                            <li class="eventsSingle__advLi fs16"><div class="eventsSingle__ellipse"></div><?= $item2['event-adv-li'] ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="eventsSingle__dopInfo fs16"><?= get_field('event-dopInfo', $item->ID) ?></div>
                    <div class="eventsSingle__programs">
                        <div class="eventsSingle__programsTitle subtitle"><?= get_field('events-progTitle', $item->ID) ?></div>
                        <ul class="eventsSingle__programsUl">
                            <?php foreach ($eventsProgRep as $key => $item3): ?>
                                <li class="eventsSingle__programsLi fs16"><div class="eventsSingle__ellipse"></div><?= $item3['events-prog-list'] ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="eventsSingle__teachers">
                        <div class="eventsSingle__teachersTitle subtitle">Спикеры</div>
                        <?php foreach ($eventsSpeakRep as $item4): ?>
                        <div class="eventsSingle__teachersWrap">
                            <img src="<?= $item4['speak-img'] ?>" alt="speaker" class="eventsSingle__teachersImg">
                            <div class="eventsSingle__boxInfo">
                                <div class="eventsSingle__name"><?= $item4['spik-name'] ?></div>
                                <div class="eventsSingle__teachInfo fs16"><?= $item4['spiker_dop_info'] ?></div>
                            </div>

                        </div>
                        <div class="eventsSingle__line"></div>
                        <?php endforeach; ?>
                    </div>
                    <div class="eventsSingle__conditions">
                        <div class="eventsSingle__conditionsTitle subtitle"><?= get_field('events-conditions-title', $item->ID) ?></div>
                        <ul class="eventsSingle__conditionsUl">
                            <?php foreach ($eventsСonditions as $item5): ?>
                            <li class="eventsSingle__conditionsLi"><div class="eventsSingle__ellipse"></div><?= $item5['events-condition'] ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="eventsSingle__attention">
                        <div class="eventsSingle__attentionTitle subtitle">Внимание</div>
                        <ul>
                            <?php foreach ($eventsAttentions as $item6): ?>
                            <li><?= $item6['events-attention'] ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="eventsSingle__blockColor"></div>
                    </div>
                    <button class="eventsSingle__regbtn btn-orange">Зарегистрироваться</button>
                </div>
            </div>
                <div class="eventsSingle__allEvents">
                    <h2 class="eventsSingle__allEventsTitle h2">Похожие мероприятия</h2>
                    <div class="events__wrapper-dop">
                        <?php foreach ($events as $event): ?>
                            <div class="events__wrap">
                                <a href="<?= $event->guid ?>">
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
                </div>
        </div>
    </section>
<?php endforeach; ?>




<?php get_footer() ?>
