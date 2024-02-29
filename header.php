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
<!--            <div class="header__search">-->
<!--                <div class="search search-live">-->
<!--                    <form action="--><?php //= get_site_url() ?><!--/" class="search__form">-->
<!--                        <input type="text" class="search__input" name="s" value="--><?php //= isset($_GET['s']) ? $_GET['s'] : '' ?><!--" autocomplete="off" placeholder="Поиск">-->
<!--                        <button type="submit" class="search__submit">-->
<!--                            <img src="--><?php //= ASSETS ?><!--/images/parts/header/search.svg">-->
<!--                        </button>-->
<!--                    </form>-->
<!---->
<!--                    <div class="header__search-list search__results" hidden>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
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
                            <li><a href="#">Widget A</a></li>
                            <li><a href="#">Widget B</a></li>
                            <li><a href="#">Widget C</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="drop" href="#">Партнёрам</a>
                        <ul>
                            <li><a href="#">Location A</a></li>
                            <li><a href="#">Location B</a></li>
                            <li><a href="#">Location C</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="drop" href="#">Продукты</a>
                        <ul>
                            <li><a href="#">President</a></li>
                            <li><a href="#">VP</a></li>
                            <li><a href="#">Manager</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="drop" href="/forus/">О нас</a>
                        <ul>
                            <li><a href="#">President</a></li>
                            <li><a href="#">VP</a></li>
                            <li><a href="#">Manager</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="drop" href="/contacts/">Контакты</a>
                        <ul>
                            <li><a href="#">President</a></li>
                            <li><a href="#">VP</a></li>
                            <li><a href="#">Manager</a></li>
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