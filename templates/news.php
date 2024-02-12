<?php
$params = array(
    'post_type' => 'news',
    'orderby' => 'date',
    'order' => 'DESC',
);
$news = get_posts($params);
?>

<section class="news">
    <div class="container">
        <div class="news__flexBox">
            <div class="news__title title">Новости</div>
            <a href="/allnews/"><button class="news__btn btn-white">Все новости</button></a>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <?php foreach ($news as $key => $item): ?>
                <div class="news__wrap">
                    <a href="<?= $item->guid ?>">
                    <img class="news__cover" src="<?= get_field('news-img', $item->ID)?>" alt="news"></a>
                    <div class="news__info">
                        <div class="news__date subtitle"><img src="<?= ASSETS ?>/images/icons/date.svg" alt="date"><?=  get_field('news-date', $item->ID)?></div>
                        <a href="<?= $item->guid ?>">
                        <div class="news__name subtitle">
                            <?=  get_field('news-title', $item->ID)?>
                        </div>
                        </a>
                        <div class="news__text subtitle"><?=  get_field('news-text', $item->ID)?></div>
                    </div>

                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>