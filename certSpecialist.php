<?php
// Template Name: Сертификация "1С:Специалист"
get_header();
$specInfoRep = get_field('spec-info-rep', 'options');
$specPrices = get_field('spec-prices', 'options');
$specLinks = get_field('spec-links', 'options');
?>

<section class="certSpecialist newSection">
    <div class="container">
        <div class="certSpecialist__bgWrap background-wrap">
            <div class="scroller">
                <div class="certSpecialist__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/become-a-partner/">Партнёрам</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/certification/">Сертификация</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive"><?= get_the_title(); ?></div>
                </div>
            </div>
            <h1 class="certification__title title"><?= get_the_title(); ?></h1>
        </div>
        <div class="scroller">
            <div class="quickLinks">
                <div class="link-block quickLinks__block">
                    <a href="/certification/">1С:СЭЦ</a>
                    <a href="/certification-professional/">1С:Профессионал</a>
                    <a href="/partnership/certification/sert-spec/" class="active">1С:Специалист</a>
                </div>
                <div class="quickLinks__line"></div>
            </div>
        </div>
        <div class="certSpecialist__wrapper">
            <?php if(!empty($specInfoRep)): ?>
                <div class="certSpecialist__info">
                    <?php foreach ($specInfoRep as $item): ?>
                        <p class="certSpecialist__text fs16"><?= $item['spec-info'] ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <?php if(get_field('lists_attests', 'options')): ?>
                <?php while(has_sub_field('lists_attests', 'options')) : ?>
                    <div class="certSpecialist__wrap">
                        <div class="certSpecialist__wrapTitle fs16"><?php the_sub_field('spec-list-title') ?></div>
                        <ul class="certSpecialist__ul">
                            <?php if(get_sub_field('spec-list-ul', 'options')): ?>
                                <?php while(has_sub_field('spec-list-ul', 'options')) : ?>
                                    <li class="certSpecialist__li fs16"><?php the_sub_field('spec-li'); ?></li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php if(!empty($specPrices)): ?>
                <div class="certSpecialist__greyWrap">
                    <?php foreach ($specPrices as $item): ?>
                        <div class="certSpecialist__greyText"><?= $item['spec-price'] ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if(!empty($specLinks)): ?>
                <div class="scroller">
                    <div class="certSpecialist__links">
                        <?php foreach ($specLinks as $item): ?>
                            <div class="certSpecialist__link fs16"><?= $item['spec-linksText'] ?><a target="_blank" href="<?= $item['spec-link']['url'] ?>"><?= $item['spec-link']['title'] ?></a></div>
                        <?php endforeach; ?>
                    </div>
                </div>

            <?php endif; ?>



        </div>

    </div>
</section>
<?php get_template_part('templates/examens-nodop') ?>
<?php get_template_part('templates/neenQuestion') ?>


<?php get_footer(); ?>
