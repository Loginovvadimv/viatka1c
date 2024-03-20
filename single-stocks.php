<?php
get_header();
$params = array(
    'post_type' => 'stocks',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
    'p'=> get_the_ID()
);
$stocks = get_posts($params);
?>

<?php foreach ($stocks as $key => $item): ?>
<section class="stocksSingle newSection">
    <div class="container">
        <div class="background-wrap">
            <div class="scroller">
                <div class="contacts__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="#">События</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/allpromos/">Акции</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div  class="crumbActive"><?= $item->post_title ?></div>
                </div>
            </div>
            <h1 class="eventsSingle__title title"><?= $item->post_title ?></h1>
        </div>
        <div class="stocksSingle__wrap">
            <div class="stocksSingle__info">
                <?= $item->post_content ?>
                <a class="stocksSingle__btnLink" href="/allpromos/"><button class="btn-white stocksSingle__btn">
                        <svg width="7.500000" height="15.000732" viewBox="0 0 7.5 15.0007" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <path id="Path" d="M5.27344 0.469116L0.273438 6.71912C-0.0898438 7.17578 -0.0898438 7.82495 0.273438 8.28162L5.27344 14.5316C5.70703 15.0707 6.49219 15.1581 7.03125 14.7266C7.57031 14.295 7.65625 13.5082 7.22656 12.9691L2.85156 7.50037L7.22656 2.03162C7.65625 1.49243 7.57031 0.705566 7.03125 0.274048C6.49219 -0.157349 5.70703 -0.0700684 5.27344 0.469116Z" fill="#FA7E10" fill-opacity="1.000000" fill-rule="evenodd"/>
                        </svg>
                        Назад к списку</button></a>
            </div>
            <div class="stocksSingle__wrap-right">
                <div class="stocksSingle__endTime"><?= get_field('promodate', $item->ID)?></div>
                <div class="stocksSingle__infoBox">
                    <div class="stocksSingle__date stocksSingle__infotext"><img src="<?= ASSETS ?>/images/icons/date.svg" alt="date"><span>Дата:</span><?= Helper::getHumanDate($item->post_date) ?></div>
                    <?php
                    $viewing = get_field('promo-views') + 1;
                    update_field('promo-views', $viewing);
                    ?>
                    <div class="stocksSingle__views stocksSingle__infotext"><img src="<?= ASSETS ?>/images/icons/views1.svg" alt="views"><span>Просмотров:</span><?= get_field('promo-views') ?></div>
                    <div class="stocksSingle__share stocksSingle__infotext"><div class="stocksSingle__shareImg"><img src="<?= ASSETS ?>/images/icons/share.svg" alt="share"></div><a href="#">Поделиться</a></div>
                </div>
            </div>

        </div>


    </div>
</section>
<?php get_template_part('templates/neenQuestion') ?>

<?php endforeach; ?>

<?php get_footer() ?>
