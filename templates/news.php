<?php
$params = array(
    'post_type' => 'news-type',
    'orderby' => 'date',
    'order' => 'DESC',
);
$news = get_posts($params);
?>

<section class="news">
    <div class="container">
        <div class="news__title title">Новости</div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ($news as $key => $item): ?>
                <div class="news__wrap">
                    <img src="<?= get_field('news-img', $item->ID)?>" alt="news">
                    <div class="events__info">
                        <div class="events__date subtitle"><img src="<?= ASSETS ?>/images/icons/date.svg" alt="date"><?=  get_field('news-date', $item->ID)?></div>
                        <div class="events__name subtitle">
                            <?=  get_field('news-title', $item->ID)?>
                        </div>
                        <div class="events__text subtitle"><?=  get_field('news-text', $item->ID)?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>