<?php
    //Template name: 1С:Предприятие 8
get_header();
?>

<section class="predpr8 newSection">
    <div class="container">
        <div class="predpr8__bgWrap background-wrap">
            <div class="scroller">
                <div class="predpr8__breadСrumbs breadСrumbs">
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
                    <a href="/company-8/" class="active"><?= get_the_title(); ?></a>
                    <a href="/1sits/">1С:ИТС</a>
                    <a href="/commercial-equipment/">Торговое оборудование</a>
                    <a href="/distribution/">1С:Дистрибьюция</a>
                    <a href="/otraslevye-resheniya-1s/">Отраслевые решения 1С</a>
                    <a href="/oblachnye-tehnologii-1s/">Облачные технологии 1С</a>
                </div>
                <div class="quickLinks__line"></div>
            </div>
        </div>


        <div class="predpr8__wrapper">
            <div class="predpr8__list">
                <div class="predpr8__subtitle fs16">Система программ 1С:Предприятие 8</div>
                <ul class="predpr8__ul">
                    <li class="predpr8__li fs16"><a target="_blank" href="https://v8.1c.ru/tekhnologii/overview/">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_126_1424)">
                                    <path d="M14.6571 2.65691C14.2666 2.26639 13.6334 2.26639 13.2429 2.65691L12.5571 3.3427C12.1666 3.73322 12.1666 4.36639 12.5571 4.75691L18 10.1998V10.1998C18.1107 10.3105 18.0323 10.4998 17.8757 10.4998L1 10.4998C0.447716 10.4998 1.32393e-07 10.9475 1.25807e-07 11.4998L1.13883e-07 12.4998C1.07297e-07 13.0521 0.447715 13.4998 1 13.4998L17.8757 13.4998C18.0323 13.4998 18.1107 13.6891 18 13.7998V13.7998L12.5571 19.2427C12.1666 19.6332 12.1666 20.2664 12.5571 20.6569L13.2429 21.3427C13.6334 21.7332 14.2666 21.7332 14.6571 21.3427L23.2929 12.7069C23.6834 12.3164 23.6834 11.6832 23.2929 11.2927L14.6571 2.65691Z" fill="#FA7E10"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_126_1424">
                                        <rect width="24" height="24" fill="white" transform="translate(0 24) rotate(-90)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            Обзор системы «1С:Предприятие 8»
                        </a></li>
                    <li class="predpr8__li fs16"><a target="_blank" href="https://v8.1c.ru/tekhnologii/tipovye-prikladnye-resheniya-dlya-rossiyskikh-organizatsiy-na-platforme-1s-predpriyatie-8/">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_126_1424)">
                                    <path d="M14.6571 2.65691C14.2666 2.26639 13.6334 2.26639 13.2429 2.65691L12.5571 3.3427C12.1666 3.73322 12.1666 4.36639 12.5571 4.75691L18 10.1998V10.1998C18.1107 10.3105 18.0323 10.4998 17.8757 10.4998L1 10.4998C0.447716 10.4998 1.32393e-07 10.9475 1.25807e-07 11.4998L1.13883e-07 12.4998C1.07297e-07 13.0521 0.447715 13.4998 1 13.4998L17.8757 13.4998C18.0323 13.4998 18.1107 13.6891 18 13.7998V13.7998L12.5571 19.2427C12.1666 19.6332 12.1666 20.2664 12.5571 20.6569L13.2429 21.3427C13.6334 21.7332 14.2666 21.7332 14.6571 21.3427L23.2929 12.7069C23.6834 12.3164 23.6834 11.6832 23.2929 11.2927L14.6571 2.65691Z" fill="#FA7E10"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_126_1424">
                                        <rect width="24" height="24" fill="white" transform="translate(0 24) rotate(-90)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                            Типовые решения
                        </a></li>
                </ul>
            </div>
            <div class="predpr8__info fs16"><?= get_field('predpr8-text', 'options') ?></div>
            <img class="predpr8__img" src="<?= get_field('predpr8-img', 'options') ?>" alt="predpr8">


        </div>

    </div>
</section>

<?php get_footer(); ?>
