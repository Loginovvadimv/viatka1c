<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?= get_site_url() ?>/favicon.png" type="image/png">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&apikey=c2a888d7-28f1-4234-89bb-c4785a857bc4"></script>
    <? the_field('header_code', 'options') ?>
    <script>
        var ajax = '<?= get_admin_url() ?>admin-ajax.php'
    </script>

    <? wp_head() ?>
</head>

<body>

<header class="header">
    <div class="container">
        <div class="header__topWrap">
            <div class="header__info">
                <div class="header__adress fs16"><img src="<?= ASSETS ?>/images/icons/locate.svg" alt="locate"><?= get_field('address', 'options') ?></div>
                <div class="header__mail fs16"><a href="mailto:<?= get_field('email', 'options') ?>"><?= get_field('email', 'options') ?></a></div>
            </div>
            <div class="header__search fs16"><a href="#">
                    <img src="<?= ASSETS ?>/images/icons/search.svg" alt="search">
                    Поиск
                </a>

            </div>
        </div>
    </div>
<!--     NAVIGATION-->
    <div class="header__bottomWrapper">
        <div class="container header__flexBox">
            <div class="nav">
                <div class="header__logo">
                    <a href="/"><img src="<?= ASSETS ?>/images/icons/logo.svg" alt="logo"></a>
                </div>
                <ul class="navContainer">
                    <li>
                        <a class="drop" href="/allnews/">События<svg width="6.000000" height="13.000000" viewBox="0 0 6 13" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path id="Path" d="M1.78 11.62L5.78 6.62C6.07 6.26 6.07 5.74 5.78 5.37L1.78 0.37C1.43 -0.06 0.8 -0.13 0.37 0.21C-0.06 0.56 -0.13 1.19 0.21 1.62L3.71 6L0.21 10.37C-0.13 10.8 -0.06 11.43 0.37 11.78C0.8 12.12 1.43 12.05 1.78 11.62Z" fill="#252525" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                        </a>
                        <ul>
                            <li><a href="/allnews/">Новости</a></li>
                            <li><a href="/allevents/">Мероприятия</a></li>
                            <li><a href="/allpromos/">Акции</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="drop" href="/partnership/">Партнёрам<svg width="6.000000" height="13.000000" viewBox="0 0 6 13" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path id="Path" d="M1.78 11.62L5.78 6.62C6.07 6.26 6.07 5.74 5.78 5.37L1.78 0.37C1.43 -0.06 0.8 -0.13 0.37 0.21C-0.06 0.56 -0.13 1.19 0.21 1.62L3.71 6L0.21 10.37C-0.13 10.8 -0.06 11.43 0.37 11.78C0.8 12.12 1.43 12.05 1.78 11.62Z" fill="#252525" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                        </a>
                        <ul class="ul2">
                            <li><a href="/become-a-partner/">Стать партнером</a></li>
                            <li><a href="/partners-programms/">Партнерские программы</a></li>
                            <li><a href="/certification/">Сертификация</a></li>
                            <li><a href="/1ssoft/">1С:Софт</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="drop" href="/company-8/">Продукты<svg width="6.000000" height="13.000000" viewBox="0 0 6 13" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path id="Path" d="M1.78 11.62L5.78 6.62C6.07 6.26 6.07 5.74 5.78 5.37L1.78 0.37C1.43 -0.06 0.8 -0.13 0.37 0.21C-0.06 0.56 -0.13 1.19 0.21 1.62L3.71 6L0.21 10.37C-0.13 10.8 -0.06 11.43 0.37 11.78C0.8 12.12 1.43 12.05 1.78 11.62Z" fill="#252525" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                        </a>
                        <ul class="ul3">
                            <li><a href="/company-8/">1С:Предприятие 8</a></li>
                            <li><a href="/1sits/">1С:ИТС</a></li>
                            <li><a href="/commercial-equipment/">Торговое оборудование</a></li>
                            <li><a href="/distribution/">1С:Дистрибьюция</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="drop" href="/forus/">О нас<svg width="6.000000" height="13.000000" viewBox="0 0 6 13" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path id="Path" d="M1.78 11.62L5.78 6.62C6.07 6.26 6.07 5.74 5.78 5.37L1.78 0.37C1.43 -0.06 0.8 -0.13 0.37 0.21C-0.06 0.56 -0.13 1.19 0.21 1.62L3.71 6L0.21 10.37C-0.13 10.8 -0.06 11.43 0.37 11.78C0.8 12.12 1.43 12.05 1.78 11.62Z" fill="#252525" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a class="drop" href="/contacts/">Контакты<svg width="6.000000" height="13.000000" viewBox="0 0 6 13" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <path id="Path" d="M1.78 11.62L5.78 6.62C6.07 6.26 6.07 5.74 5.78 5.37L1.78 0.37C1.43 -0.06 0.8 -0.13 0.37 0.21C-0.06 0.56 -0.13 1.19 0.21 1.62L3.71 6L0.21 10.37C-0.13 10.8 -0.06 11.43 0.37 11.78C0.8 12.12 1.43 12.05 1.78 11.62Z" fill="#252525" fill-opacity="1.000000" fill-rule="evenodd"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header__wrap">
                <div class="header__info-mob">
                    <div class="header__adress fs16"><img src="<?= ASSETS ?>/images/icons/locate.svg" alt="locate"><?= get_field('address', 'options') ?></div>
                    <div class="header__mail fs16"><a href="mailto:<?= get_field('email', 'options') ?>"><?= get_field('email', 'options') ?></a></div>
                </div>
                <div class="header__phone"><a href="<?= get_field('phone-link', 'options') ?>"><?= get_field('phone', 'options') ?></a></div>
                <div class="header__btn btn-orange">Задать вопрос</div>
            </div>
            <div class="header__wrap-mob">
                <a href="<?= get_field('phone-link', 'options') ?>"><div class="header__phone-mob"><img src="<?= ASSETS ?>/images/icons/call.svg" alt="phone"></div></a>
                <div class="header__hamb">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>


    </div>

</header>



