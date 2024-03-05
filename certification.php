<?php
    //Template name: Сертификация
get_header();
$sertList = get_field('sert-list', 'options');
?>

<section class="certification newSection">
    <div class="container">
        <div class="certification__bgWrap background-wrap">
            <div class="certification__breadСrumbs breadСrumbs">
                <a href="/">Главная</a>
                <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                <a href="/become-a-partner/">Партнёрам</a>
                <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                <div class="crumbActive">Сертификация</div>
            </div>
            <h2 class="certification__title title">Сертификация</h2>
        </div>
        <div class="certification__wrapper">
            <div class="certification__info fs16"><?= get_field('sert-text', 'options') ?></div>
            <div class="certification__wrap">
                <h3 class="certification__wrapTitle subtitle">Фирма "1С" проводит два вида сертификаций на знание программных продуктов "1С":</h3>
                <ul class="certification__ul">
                    <li class="certification__li fs16"><a href="/certification-professional/">
                            <svg width="20.000000" height="20.000000" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <clipPath id="clip133_9179">
                                        <rect id="Icons" width="20.000000" height="20.000000" fill="white" fill-opacity="0"/>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#clip133_9179)">
                                    <path id="Arrow 1" d="M3.33301 9L16.666 9L16.666 11L3.33301 11L3.33301 9ZM3.35254 10.98L3.33301 11C2.77344 11 2.33301 10.56 2.33301 10C2.33301 9.44 2.77344 9 3.33301 9L3.35254 9.02002L3.35254 10.98ZM15.252 10L10.3027 5.05023C9.90625 4.6543 9.90625 4.03204 10.3027 3.63605C10.6982 3.24005 11.3203 3.24005 11.7168 3.63605L17.373 9.29291C17.7695 9.68884 17.7695 10.3112 17.373 10.7071L11.7168 16.364C11.3203 16.7599 10.6982 16.7599 10.3027 16.364C9.90625 15.968 9.90625 15.3457 10.3027 14.9498L15.252 10Z" fill="#FA7E10" fill-opacity="1.000000" fill-rule="evenodd"/>
                                </g>
                            </svg>
                            Сертификация "1С:Профессионал"
                        </a></li>
                    <li class="certification__li fs16"><a href="">
                            <svg width="20.000000" height="20.000000" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <clipPath id="clip133_9179">
                                        <rect id="Icons" width="20.000000" height="20.000000" fill="white" fill-opacity="0"/>
                                    </clipPath>
                                </defs>
                                <g clip-path="url(#clip133_9179)">
                                    <path id="Arrow 1" d="M3.33301 9L16.666 9L16.666 11L3.33301 11L3.33301 9ZM3.35254 10.98L3.33301 11C2.77344 11 2.33301 10.56 2.33301 10C2.33301 9.44 2.77344 9 3.33301 9L3.35254 9.02002L3.35254 10.98ZM15.252 10L10.3027 5.05023C9.90625 4.6543 9.90625 4.03204 10.3027 3.63605C10.6982 3.24005 11.3203 3.24005 11.7168 3.63605L17.373 9.29291C17.7695 9.68884 17.7695 10.3112 17.373 10.7071L11.7168 16.364C11.3203 16.7599 10.6982 16.7599 10.3027 16.364C9.90625 15.968 9.90625 15.3457 10.3027 14.9498L15.252 10Z" fill="#FA7E10" fill-opacity="1.000000" fill-rule="evenodd"/>
                                </g>
                            </svg>
                            Сертификация "1С:Специалист"
                        </a></li>
                </ul>
            </div>
            <div class="certification__dopInfo">
                <?php foreach ($sertList as $item): ?>
                    <p class="fs16"><?= $item['info'] ?></p>
                <?php endforeach; ?>
            </div>

        </div>

    </div>
</section>

<?php get_footer(); ?>
