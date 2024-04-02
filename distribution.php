<?php
//Template name: 1С:Дистрибьюция
get_header();
$distrInfo = get_field('distr-info', 'options');
?>

    <section class="distribution newSection">
        <div class="container">
            <div class="distribution__bgWrap background-wrap">
                <div class="scroller">
                    <div class="distribution__breadСrumbs breadСrumbs">
                        <a href="/">Главная</a>
                        <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                        <a href="/company-8/">Продукты</a>
                        <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                        <div class="crumbActive"><?= get_the_title(); ?></div>
                    </div>
                </div>
                <h1 class="distribution__title title"><?= get_the_title(); ?></h1>
            </div>
            <div class="scroller">
                <div class="quickLinks">
                    <div class="link-block quickLinks__block">
                        <a href="/company-8/">1С:Предприятие 8</a>
                        <a href="/1sits/">1С:ИТС</a>
                        <a href="/commercial-equipment/">Торговое оборудование</a>
                        <a class="active" href="/distribution/"><?= get_the_title(); ?></a>
                    </div>
                    <div class="quickLinks__line"></div>
                </div>
            </div>
            <div class="distribution__wrapper">
                <? the_content() ?>
            </div>
    </section>
<?php get_template_part('templates/neenQuestion') ?>

<?php get_footer() ?>