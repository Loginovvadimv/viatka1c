<?php
//Template name: Отраслевые решения 1С
get_header();
?>

<section class="indsol newSection">
    <div class="container">
        <div class="indsol__bgWrap background-wrap">
            <div class="scroller">
                <div class="indsol__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/company-8/">Продукты</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive"><?= get_the_title(); ?></div>
                </div>
            </div>
            <h1 class="certification__title title"><?= get_the_title(); ?></h1>
        </div>
        <div class="scroller">
            <div class="quickLinks">
                <div class="link-block quickLinks__block">
                    <a href="/company-8/">1С:Предприятие 8</a>
                    <a href="/1sits/">1С:ИТС</a>
                    <a href="/commercial-equipment/">Торговое оборудование</a>
                    <a href="/distribution/">1С:Дистрибьюция</a>
                    <a href="/otraslevye-resheniya-1s/" class="active"><?= get_the_title(); ?></a>
                    <a href="/oblachnye-tehnologii-1s/">Облачные технологии 1С</a>
                </div>
                <div class="quickLinks__line"></div>
            </div>
        </div>


        <div class="indsol__wrapper">
            <?php get_template_part('templates/examens') ?>
            <?php the_content(); ?>
        </div>

    </div>
</section>
<?php get_template_part('templates/neenQuestion') ?>


<?php get_footer(); ?>
