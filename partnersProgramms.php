<?php
get_header();
// Template Name: Партнёрские программы
$params = array(
    'post_type' => 'partners',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
);
$partners = get_posts($params);
?>
<section class="partnersProgramms newSection">
    <div class="container">
        <div class="partnersProgramms__bgWrap background-wrap">
            <div class="scroller">
                <div class="partnersProgramms__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="#">Партнерам</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive">Партнёрские программы</div>
                </div>
            </div>
            <h2 class="pageNews__title title">Партнёрские программы</h2>
        </div>
        <div class="partnersProgramms__wrapper">
        <?php foreach ($partners as $key => $partner): ?>
            <div class="partnersProgramms__wrap">
                <div class="partnersProgramms__wrapText">
                    <h3 class="subtitle partnersProgramms__wrapTitle"><?= $partner->post_title ?></h3>
                    <h4 class="partnersProgramms__wrapSubtitle fs16"><?= $partner->post_excerpt ?></h4>
                </div>
                <div class="partnersProgramms__wrapDown">
                    <div class="partnersProgramms__line"></div>
                    <a href="<?= $partner->guid ?>" class="partnersProgramms__link fs16">Подробнее
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
