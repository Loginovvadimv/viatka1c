<?php
// Template Name: Сертификация 1С:Профессионал
get_header();
$professionalNowRep = get_field('professional-now-rep', 'options');
$professionalDopInfo = get_field('professional-dopInfo', 'options');
$professionalPodgRep = get_field('professional-podg-rep', 'options');
$professionalPriceRep = get_field('professional-price-rep', 'options');
?>


<section class="certProfessional newSection">
    <div class="container">
        <div class="certProfessional__bgWrap background-wrap">
            <div class="scroller">
                <div class="certProfessional__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/become-a-partner/">Партнёрам</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/certification/">Сертификация</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive">1С:Профессионал</div>
                </div>
            </div>

            <h2 class="certification__title title">Сертификация 1С:Профессионал</h2>
        </div>
        <div class="certProfessional__wrapper">
            <?php if(!empty($professionalNowRep)): ?>
            <div class="certProfessional__wrap">
                <div class="certProfessional__wrapTitle fs16">В настоящее время проводится сертификация 1С:Профессионал по:</div>
                <ul class="certProfessional__ul">
                    <?php foreach ($professionalNowRep as $item): ?>
                    <li class="certProfessional__li fs16"><?= $item['professional-li'] ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
            <?php if(!empty($professionalDopInfo)): ?>
            <div class="certProfessional__info">
                <?php foreach ($professionalDopInfo as $item): ?>
                <p class="certProfessional__text fs16"><?= $item['professional-text'] ?></p>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <?php if(!empty($professionalPodgRep)): ?>
            <div class="certProfessional__wrap">
                <div class="certProfessional__wrapTitle fs16">Для подготовки к экзамену рекомендуется:</div>
                <ul class="certProfessional__ul">
                    <?php foreach ($professionalPodgRep as $item): ?>
                        <li class="certProfessional__li fs16"><?= $item['professional-podg'] ?><a target="_blank" href="<?= $item['professional-link']['url'] ?>"><?= $item['professional-link']['title'] ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>
            <?php if(!empty($professionalPriceRep)): ?>
                <div class="certProfessional__greyWrap">
                    <?php foreach ($professionalPriceRep as $item): ?>
                        <div class="certProfessional__greyText"><?= $item['professional-price'] ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>

    </div>
</section>
<?php get_template_part('templates/examens-nodop') ?>
<?php get_template_part('templates/neenQuestion') ?>




<?php get_footer(); ?>
