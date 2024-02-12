<?php
    $eventsRep = get_field('events-rep', 'options');
?>
<section class="events section">
    <div class="container">

            <div class="events__box">
                <h2 class="events__title title"><?= get_field('evens-title', 'options') ?></h2>
                <a href="#"><button class="events__btn btn-white">Все мероприятия</button></a>
            </div>
        <div class="events__wrapper">
            <?php foreach ($eventsRep as $key => $item): ?>
            <div class="events__wrap">
                <img class="events__img" src="<?= $item['events-img'] ?>" alt="veb">
                <div class="events__info">
                    <div class="events__date subtitle"><?= $item['events-date'] ?></div>
                    <div class="events__time subtitle">
                        <img src="<?= ASSETS ?>/images/icons/time.svg" alt="time"><?= $item['events-time'] ?>
                    </div>
                    <div class="events__name subtitle"><?= $item['events-name'] ?></div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>