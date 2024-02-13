        <? wp_footer() ?>

<?// the_field('footer_code', 'options') ?>

        <footer class="footer">
            <div class="container">
                <div class="footer__wrapper">
                    <div class="footer__logo">
                        <a href="/"><img src="<?= ASSETS ?>/images/icons/logo.svg" alt="logo"></a>
                    </div>
                    <div class="footer__nav">
                        События
                        <ul>
                            <li><a href="">Новости</a></li>
                            <li><a href="">Акции</a></li>
                            <li><a href="">Мероприятия</a></li>
                        </ul>
                    </div>
                    <div class="footer__nav">
                        Партнёрам
                        <ul>
                            <li><a href="">Как стать партнёром</a></li>
                            <li><a href="">Партнёрские программы</a></li>
                            <li><a href="">Сертификация</a></li>
                            <li><a href="">1С:Софт</a></li>
                        </ul>
                    </div>
                    <div class="footer__nav">
                        Продукты
                        <ul>
                            <li><a href="">1С:Предприятие</a></li>
                            <li><a href="">1С:ИТС</a></li>
                            <li><a href="">1С:Дистрибьюция</a></li>
                            <li><a href="">Торговое оборудование</a></li>
                        </ul>
                    </div>
                    <div class="footer__nav">
                        Информация
                        <ul>
                            <li><a href="">Контакты</a></li>
                            <li><a href="">О нас</a></li>
                        </ul>
                    </div>
                    <div class="footer__links">
                        <div class="footer__linksWrap">
                            <div class="footer__wrap">
                                <a class="footer__phone" href="<?= get_field('phone-link', 'options') ?>"><?= get_field('phone', 'options') ?></a>
                                <a target="_blank" class="footer__messeger" href="<?= get_field('messenger-vk', 'options') ?>"><img src="<?= ASSETS ?>/images/icons/vk.svg" alt="vk"></a>
                            </div>
                            <a class="footer__email" href="mailto:<?= get_field('email', 'options') ?>"><?= get_field('email', 'options') ?></a>
                            <div class="footer__address"><?= get_field('address', 'options') ?></div>
                        </div>
                        <button class="footer__btn btn-white">Задать вопрос</button>


                    </div>
                </div>
                <div class="footer__line"></div>
                <div class="footer__wrapper-bottom footer__wrapper">
                    <div class="footer__company">
                        <div id="year"><script>
                                document.getElementById('year').textContent = new Date().getFullYear();
                            </script>© ООО «1С-Вятка»</div>
                        <div class="footer__policy"><a href="/policy/">Политика конфиденциальности</a></div>
                    </div>
                    <div class="footer__razrab">Разработка сайта: <a href="https://vyatka-it.ru/" target="_blank"><img src="<?= ASSETS ?>/images/icons/light.webp" alt="company"></a></div>

                </div>

            </div>
        </footer>

    </body>
</html>