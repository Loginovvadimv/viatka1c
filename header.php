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


<section class="header">
    <div class="header__topBg">
    <div class="container">
            <div class="header__topWrap">
                <div class="header__info">
                    <div class="header__adress subtitle"><img src="<?= ASSETS ?>/images/icons/locate.svg" alt="locate"><?= get_field('address', 'options') ?></div>
                    <div class="header__mail subtitle"><a href="mailto:<?= get_field('email', 'options') ?>"><?= get_field('email', 'options') ?></a></div>
                </div>
                <div class="header__search">
                    <div class="search search-live">
                        <form action="<?= get_site_url() ?>/" class="search__form">
                            <input type="text" class="search__input" name="s" value="<?= isset($_GET['s']) ? $_GET['s'] : '' ?>" autocomplete="off" placeholder="Поиск по товарам">
                            <button type="submit" class="search__submit">
                                <img src="<?= ASSETS ?>/images/parts/header/search.svg">
                            </button>
                        </form>

                        <div class="header__search-list search__results" hidden>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottomWrapper">
        <div class="container">
            <div class="header__bottomWrap">

                <div class="header__left">
                    <div class="header__logo">
                        <a href="/"></a><img src="<?= ASSETS ?>/images/icons/logo.svg" alt="logo">
                    </div>
                    <nav class="header__nav">
                        <ul class="header__ul">
                            <li class="header__li"><a href="#">События</a></li>
                            <li class="header__li"><a href="#">Партнёрам</a></li>
                            <li class="header__li"><a href="#">Продукты</a></li>
                            <li class="header__li"><a href="#">О нас</a></li>
                            <li class="header__li"><a href="#">Контакты</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="header__right">
                    <a class="header__phone" href="tel:+78332223272"><?= get_field('phone', 'options') ?></a>
                    <button class="btn-orange header__btn">Задать вопрос</button>
                </div>

            </div>
        </div>
    </div>
</section>
