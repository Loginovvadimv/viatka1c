<?php
//Template name: 1С:ИТС
get_header();
$itsLinks = get_field('its-links', 'options');
?>

<section class="its newSection">
    <div class="container">
        <div class="its__bgWrap background-wrap">
            <div class="scroller">
                <div class="its__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/company-8/">Продукты</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive">1С:ИТС</div>
                </div>
            </div>
            <h2 class="its__title title">1С:ИТС</h2>
        </div>
        <div class="scroller">
            <div class="quickLinks">
                <div class="link-block quickLinks__block">
                    <a href="/company-8/">1С:Предприятие 8</a>
                    <a class="active" href="/1sits/">1С:ИТС</a>
                    <a href="">Торговое оборудование</a>
                    <a href="">1С:Дистрибьюция</a>
                </div>
                <div class="quickLinks__line"></div>
            </div>
        </div>

    <div class="its__wrapper">
        <div class="its__info">
            <p class="fs16">Информационная система ИТС (1С:ИТС) – это комплексная поддержка, которую фирма "1С" совместно с партнерами оказывает пользователям программ "1С:Предприятие".</p>
            <p class="fs16">Поддержка осуществляется в рамках договора 1С:ИТС. Тип этого договора определяет перечень сервисов, которые получает пользователь, а также перечень доступных разделов информационной системы 1С:ИТС. Наиболее удобным для пользователей является обслуживание по договору 1С:ИТС уровня ПРОФ.</p>
        </div>

        <ul class="its__ul">
            <?php if(!empty($itsLinks)): ?>
            <?php foreach ($itsLinks as $itsLink): ?>
            <li class="its__li"><a target="_blank" href="<?= $itsLink['its-link']['url'] ?>"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_126_1424)">
                            <path d="M14.6571 2.65691C14.2666 2.26639 13.6334 2.26639 13.2429 2.65691L12.5571 3.3427C12.1666 3.73322 12.1666 4.36639 12.5571 4.75691L18 10.1998V10.1998C18.1107 10.3105 18.0323 10.4998 17.8757 10.4998L1 10.4998C0.447716 10.4998 1.32393e-07 10.9475 1.25807e-07 11.4998L1.13883e-07 12.4998C1.07297e-07 13.0521 0.447715 13.4998 1 13.4998L17.8757 13.4998C18.0323 13.4998 18.1107 13.6891 18 13.7998V13.7998L12.5571 19.2427C12.1666 19.6332 12.1666 20.2664 12.5571 20.6569L13.2429 21.3427C13.6334 21.7332 14.2666 21.7332 14.6571 21.3427L23.2929 12.7069C23.6834 12.3164 23.6834 11.6832 23.2929 11.2927L14.6571 2.65691Z" fill="#FA7E10"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_126_1424">
                                <rect width="24" height="24" fill="white" transform="translate(0 24) rotate(-90)"/>
                            </clipPath>
                        </defs>
                    </svg><?= $itsLink['its-link']['title'] ?></a></li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>

    </div>



    </div>
</section>


<?php get_footer(); ?>
