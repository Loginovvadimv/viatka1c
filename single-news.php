<?php
get_header();
$id = get_the_ID();

$article = get_post($id);
?>

<section class="singleNews newSection">
    <div class="container">
        <div class="singleNews__head">
            <div class="singleNews__breadСrumbs breadСrumbs">
                <a href="/">Главная</a>
                <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                <a href="/works/">Новости</a>
                <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                <a href="" class="crumbActive"><?= $article->post_title ?></a>
            </div>
            <h1 class="singleNews__h1 h1"><?= $article->post_title ?></h1>
        </div>
        <div class="singleNews__wrapper">
            <div class="singleNews__wrap">
                <p class="singleNews__paragraph"><?= $article->post_content ?></p>
            </div>
            <div class="singleNews__wrap-right">
                <img src="" alt="news">
                <?php $preview = get_the_post_thumbnail($article->ID, 'full', ['loading'=>'lazy']) ?>
                <?php if(isset($preview) && !empty($preview)) : ?>
                    <?= $preview ?>
                <?php else : ?>
                    <p>Картинки не найдено :(</p>
                <?php endif; ?>
                <div class="singleNews__infoBox">
                    <div class="singleNews__date"><img src="<?= ASSETS ?>/images/icons/date.svg" alt="date">Дата:<?= $article->post_date ?></div>
                    <div class="singleNews__views"><img src='<?= ASSETS ?>/images/icons/views.svg">' alt="views"></div>
                    <div class="singleNews__share"><img src="<?= ASSETS ?>/images/icons/share.svg" alt="share"><a href="#">Поделиться</a></div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer() ?>
