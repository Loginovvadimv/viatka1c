<?php
//Template Name: 1С:Софт
get_header();
$softInfo = get_field('soft-info', 'options');
$softAdvs = get_field('soft-advs', 'options');
$softDopInfo = get_field('soft_dop_info', 'options');
$softListDown = get_field('soft-list-down', 'options');
?>

<section class="soft newSection">
    <div class="container">
        <div class="soft__bgWrap background-wrap">
            <div class="scroller">
                <div class="soft__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/partnership/">Партнёрам</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive">1С:Софт</div>
                </div>
            </div>
            <h1 class="soft__title title">1С:Софт</h1>
        </div>
        <div class="scroller">
            <div class="quickLinks">
                <div class="link-block quickLinks__block">
                    <a href="/become-a-partner/" >Как стать партнёром</a>
                    <a href="/partners-programms/" >Партнёрские программы</a>
                    <a href="/certification/">Сертификация</a>
                    <a href="/1ssoft/" class="active">1С:Софт</a>
                </div>
                <div class="quickLinks__line"></div>
            </div>
        </div>
        <div class="soft__wrapper">
            <?php if(!empty($softInfo)): ?>
                <div class="soft__info">
                    <?php foreach ($softInfo as $item): ?>
                        <p class="soft__text fs16"><?= $item['soft-text'] ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <?php if(!empty($softAdvs)): ?>
            <div class="soft__greyWrap">
                <div class="soft__greyTitle subtitle"><?= get_field('soft-subtitle-one', 'options') ?></div>
                <ul class="soft__Ul">
                    <?php foreach ($softAdvs as $item): ?>
                    <li class="soft__li fs16"><?= $item['adv'] ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <?php endif; ?>

            <?php if(!empty($softDopInfo)): ?>
                <div class="soft__dopInfoWrap">
                    <?php foreach ($softDopInfo as $item): ?>
                        <div class="soft__dopInfo fs16"><?= $item['dop_info'] ?></div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <div class="soft__greyWrap">
                    <div class="soft__greyTitle subtitle"><?= get_field('soft-subtitle-two', 'options') ?></div>
                    <ul class="soft__Ul">
                        <?php foreach ($softListDown as $item): ?>
                            <li class="soft__li fs16"><?= $item['soft-list'] ?>
                                <?php if( $item['soft-list-link']): ?>
                                <a href="<?= $item['soft-list-link']['url']?>"><?= $item['soft-list-link']['title']?></a>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <div class="soft__questionnaire fs16">Анкету для размещения на сайте и отсканированную копию подписанного соглашения необходимо отправить партнеру «1Софт».</div>
        </div>

    </div>
</section>



<?php get_footer(); ?>
