<?php
    // Template Name: Контакты
    get_header();
?>

<section class="contacts newSection">
    <div class="container">
            <div class="contacts__bgWrap background-wrap">
                <div class="scroller">
                    <div class="contacts__breadСrumbs breadСrumbs">
                        <a href="/">Главная</a>
                        <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                        <a href="/contacts/" class="crumbActive">Контакты</a>
                    </div>
                </div>
                <h1 class="contacts__title title">Контакты</h1>
            </div>
        <div class="contacts__wrapper">
            <div class="contacts__wrap">
                <div class="contacts__wrapBox">
                    <div class="contacts__wrapTitle">Телефон:</div>
                    <div class="contacts__wrapLink"><a href="<?= get_field('phone-link', 'options') ?>"><?= get_field('phone', 'options') ?></a></div>
                </div>
                <div class="contacts__wrapBox">
                    <div class="contacts__wrapTitle">E-mail:</div>
                    <div class="contacts__wrapLink"><a href="mailto:<?= get_field('email', 'options') ?>"><?= get_field('email', 'options') ?></a></div>
                </div>
                <div class="contacts__wrapBox">
                    <div class="contacts__wrapTitle">Адрес:</div>
                    <div class="contacts__wrapLink contacts__address"><?= get_field('address', 'options') ?></div>
                    <div class="contacts__dopinfo">(внутренний дворик)</div>
                </div>
                <div class="contacts__wrapBox">
                    <div class="contacts__wrapTitle">Социальные сети:</div>
                    <a target="_blank" href="<?= get_field('messenger-vk', 'options') ?>"><img class="vk" src="<?= ASSETS ?>/images/icons/vk.svg" alt="vk"></a>
                </div>
                <button class="contacts__btn btn-orange">Связаться с нами</button>
            </div>
            <div class="contacts__map" id="map"></div>
            </div>
        </div>
</section>
<?php get_template_part('templates/reqisites') ?>


<?php get_footer() ?>
