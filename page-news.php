<?php
    // Template Name: Все новости
get_header();
$params = array(
    'post_type' => 'news',
    'orderby' => 'date',
    'order' => 'DESC',
);
$news = get_posts($params);
?>

<section class="news newSection">
    <div class="container">
        <div class="news__breadСrumbs breadСrumbs">
            <a href="/">Главная</a>
            <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
            <a href="/works/" class="crumbActive"><?= get_field('worksDone-title', 'options') ?></a>
        </div>
        <div class="news__title title">Новости</div>
            <div class="news-wrapper">
                <?php foreach ($news as $key => $item): ?>
                    <div class="news__wrap">
                        <a href="<?= $item->guid ?>">
                            <img src="<?= get_field('news-img', $item->ID)?>" alt="news">
                            <div class="events__info">
                                <div class="events__date subtitle"><img src="<?= ASSETS ?>/images/icons/date.svg" alt="date"><?=  get_field('news-date', $item->ID)?></div>
                                <a href="<?= $item->guid ?>">
                                    <div class="events__name subtitle">
                                        <?=  get_field('news-title', $item->ID)?>
                                    </div>
                                </a>
                                <div class="events__text subtitle"><?=  get_field('news-text', $item->ID)?></div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>

    </div>
</section>
<?php get_footer() ?>
