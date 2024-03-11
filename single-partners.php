<?php
get_header();
$params = array(
    'post_type' => 'partners',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
    'p'=> get_the_ID()
);
$partners = get_posts($params);
?>

<?php foreach ($partners as $key => $partner): ?>
<section class="singlePartners newSection">
    <div class="container">
        <div class="singlePartners__bgWrap background-wrap">
            <div class="scroller">
                <div class="singlePartners__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/partners-programms/">Партнерам</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/partners-programms/">Партнёрские программы</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive"><?= $partner->post_title ?></div>
                </div>
            </div>

            <h2 class="singlePartners title"><?= $partner->post_title ?></h2>
        </div>
        <div class="singlePartners__info fs16"><?= $partner->post_content ?></div>
    </div>
</section>
<?php endforeach; ?>

<?php get_footer(); ?>
