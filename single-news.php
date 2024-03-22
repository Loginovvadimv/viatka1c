<?php
get_header();
$id = get_the_ID();

$article = get_post($id);
?>

<?php
$args = array(
    'posts_per_page' => -1,
    'post_type' => 'news',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
);
$news = new WP_Query($args);

foreach ($news->posts as $item) {
    $data['articles'][] = [
        'id' => $item->ID,
        'name' => $item->post_title,
        'content' => apply_filters('the_content', get_post_field('post_content', $item->ID)),
        'preview' => get_the_post_thumbnail($item->ID, 'full', ['loading' => 'lazy']),
        'except' => get_the_excerpt($item->ID),
        'link' => get_permalink($item->ID),
        'date' => Helper::getHumanDate($item->post_date),
    ];
}
?>

<section class="singleNews newSection">
    <div class="container">
        <div class="singleNews__head">
            <div class="scroller">
                <div class="singleNews__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/allnews/">События</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/allnews/">Новости</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive"><?= $article->post_title ?></div>
                </div>
            </div>
            <h1 class="singleNews__h1 h1 title"><?= $article->post_title ?></h1>
        </div>
        <div class="singleNews__wrapper">
            <div class="singleNews__wrap">
                <div class="singleNews__paragraph"><?= $article->post_content ?></div>
                <a href="/allnews/"><button class="singleNews__btn btn-white"><svg width="7.500000" height="15.000793" viewBox="0 0 7.5 15.0008" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <path id="Path" d="M5.27344 0.469116L0.273438 6.71912C-0.0917969 7.17578 -0.0917969 7.82495 0.273438 8.28162L5.27344 14.5316C5.70508 15.0708 6.49219 15.1581 7.03125 14.7266C7.57031 14.2952 7.6582 13.5083 7.22656 12.9691L2.85156 7.50037L7.22656 2.03162C7.6582 1.49249 7.57031 0.705627 7.03125 0.274109C6.49219 -0.157349 5.70508 -0.0700073 5.27344 0.469116Z" fill="#FA7E10" fill-opacity="1.000000" fill-rule="evenodd"/>
                    </svg>Назад к списку</button></a>
            </div>
            <div class="singleNews__wrap-right">
                <?php $preview = get_the_post_thumbnail($article->ID, 'full', ['loading'=>'lazy'])?>
                <?php if(isset($preview) && !empty($preview)) : ?>
                    <?= $preview ?>
                <?php else : ?>
                    <p>Картинки не найдено :(</p>
                <?php endif; ?>
                <div class="singleNews__infoBox">
                    <div class="singleNews__date singleNews__infotext"><img src="<?= ASSETS ?>/images/icons/date.svg" alt="date"><span>Дата:</span><?= Helper::getHumanDate($article->post_date) ?></div>
                    <?php
                    $viewing = get_field('news-views') + 1;
                    update_field('news-views', $viewing);
                    ?>
                    <div class="singleNews__views singleNews__infotext"><img src="<?= ASSETS ?>/images/icons/views.svg" alt="views"><span>Просмотров:</span><?= get_field('news-views') ?></div>
<!--                    <div class="singleNews__share">-->
                        <div class="ya-share2" data-curtain data-shape="round" data-limit="0" data-more-button-type="long" data-services="vkontakte,telegram,whatsapp"></div>
<!--                        <div class="singleNews__shareText">Поделиться</div>-->
<!--                    </div>-->

                </div>
            </div>
        </div>
    </div>
</section>

<div class="newsDop">
    <div class="container">
        <h2 class="title">Читайте также</h2>
        <div class="news__wrapper">
            <?php foreach ($data['articles'] as $item): ?>
                <div class="news__wrap">
                    <a href="<?= $item['link'] ?>">
                        <?= $item['preview'] ?>
                    </a>
                    <div class="news__info">
                        <div class="news__date fs16"><img src="<?= ASSETS ?>/images/icons/date.svg" alt="date">
                            <?= $item['date'] ?>
                        </div>
                        <a href="<?= $item['link'] ?>">
                            <div class="news__name fs16">
                                <?= $item['name'] ?>
                            </div>
                        </a>
                        <div class="news__text fs16">
                            <?=$item['except'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php get_footer() ?>
