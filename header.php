<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?= get_site_url() ?>/favicon.png" type="image/png">

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
                        <a class="drop" href="#">События</a>
                        <ul>
                            <li><a href="/allnews/">Новости</a></li>
                            <li><a href="/allevents/">Мероприятия</a></li>
                            <li><a href="/allpromos/">Акции</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="drop" href="/become-a-partner/">Партнёрам</a>
                        <ul>
                            <li><a href="/become-a-partner/">Стать партнером</a></li>
                            <li><a href="/partners-programms/">Партнерские программы</a></li>
                            <li><a href="/certification/">Сертификация</a></li>
                            <li><a href="/1ssoft/">1С:Софт</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="drop" href="#">Продукты</a>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="drop" href="/forus/">О нас</a>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="drop" href="/contacts/">Контакты</a>
                        <ul>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="header__wrap">
                <div class="header__phone"><a href="<?= get_field('phone-link', 'options') ?>"><?= get_field('phone', 'options') ?></a></div>
                <div class="header__btn btn-orange">Задать вопрос</div>
            </div>
        </div>


    </div>

</header>