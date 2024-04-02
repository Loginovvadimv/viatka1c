<?php
get_header();
// Template Name: Партнёрские программы
$params = array(
    'post_type' => 'partners',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
    'posts_per_page' => -1,
);

$partners = new WP_Query($params);

foreach ($partners->posts as $partner) {
    $data['partners'][] = [
        'id' => $partner->ID,
        'post_title' => get_the_title($partner->ID),
        'name' => $partner->post_title,
        'except' => get_the_excerpt($partner->ID),
    ];
}

$params_too = array(
    'post_type' => 'partners',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
);

$partners_too = new WP_Query($params_too);

foreach ($partners_too->posts as $item) {
    $data['partners_too'][] = [
        'id' => $item->ID,
        'name' => $item->post_title,
        'link' => get_permalink($item->ID)
    ];
}


?>
<section class="partnersProgramms newSection">
    <div class="container">
        <div class="partnersProgramms__bgWrap background-wrap">
            <div class="scroller">
                <div class="partnersProgramms__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/partnership/">Партнерам</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive"><?= get_the_title(); ?></div>
                </div>
            </div>
            <h1 class="pageNews__title title"><?= get_the_title(); ?></h1>
        </div>
        <div class="scroller">
            <div class="quickLinks">
                <div class="link-block quickLinks__block">
                    <?php foreach($data['partners_too'] as $item ) : ?>
                        <a href="<?= $item['link'] ?>" <?= get_the_ID() == $item['id'] ? 'class="active"' : '' ?>><?= $item['name'] ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="quickLinks__line"></div>
            </div>
        </div>
        <div class="partnersProgramms__wrapper">
        <?php foreach ($data['partners'] as $partner): ?>
            <div class="partnersProgramms__wrap">
                <div class="partnersProgramms__wrapText">
                    <h3 class="subtitle partnersProgramms__wrapTitle"><?= $partner['post_title'] ?></h3>
                    <h4 class="partnersProgramms__wrapSubtitle fs16"><?= $partner['except'] ?></h4>
                </div>
                <div class="partnersProgramms__wrapDown">
                    <div class="partnersProgramms__line"></div>
                    <a href="<?= get_permalink($partner['id']) ?>" class="partnersProgramms__link fs16">Подробнее
                        <svg width="7.500977" height="15.000793" viewBox="0 0 7.50098 15.0008" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <desc>
                                Created with Pixso.
                            </desc>
                            <defs/>
                            <path id="Path" d="M2.22656 14.5317L7.22656 8.28168C7.59229 7.82501 7.59229 7.17584 7.22656 6.71918L2.22656 0.469177C1.79541 -0.0700073 1.0083 -0.157288 0.469238 0.27417C-0.0698242 0.705627 -0.157227 1.49249 0.274414 2.03168L4.64941 7.50043L0.274414 12.9692C-0.157227 13.5083 -0.0698242 14.2952 0.469238 14.7267C1.0083 15.1581 1.79541 15.0708 2.22656 14.5317Z" fill="#FA7E10" fill-opacity="1.000000" fill-rule="evenodd"/>
                        </svg></a>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php get_footer() ?>
