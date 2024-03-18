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
                            <li><a href="/allnews/">Новости</a></li>
                            <li><a href="/allpromos/">Акции</a></li>
                            <li><a href="/allevents/">Мероприятия</a></li>
                        </ul>
                    </div>
                    <div class="footer__nav">
                        Партнёрам
                        <ul>
                            <li><a href="/become-a-partner/">Стать партнёром</a></li>
                            <li><a href="/partners-programms/">Партнёрские программы</a></li>
                            <li><a href="/certification/">Сертификация</a></li>
                            <li><a href="/1ssoft/">1С:Софт</a></li>
                        </ul>
                    </div>
                    <div class="footer__nav">
                        Продукты
                        <ul>
                            <li><a href="/company-8/">1С:Предприятие</a></li>
                            <li><a href="/1sits/">1С:ИТС</a></li>
                            <li><a href="/distribution/">1С:Дистрибьюция</a></li>
                            <li><a href="/commercial-equipment/">Торговое оборудование</a></li>
                        </ul>
                    </div>
                    <div class="footer__nav">
                        Информация
                        <ul>
                            <li><a href="/contacts/">Контакты</a></li>
                            <li><a href="/forus/">О нас</a></li>
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
            <div class="btn-up btn-up_hide"><img src="<?= ASSETS ?>/images/icons/upb.svg" alt="up"></div>
        </footer>

        <div class="modal modal__content open" data-modal-type="orders" hidden>
            <div class="modal__wrapper form__wrapper">
                <h3 class="modal__title">Оставить заявку</h3>
                <h4 class="modal__subtitle">Оставьте свои контакты и мы скоро
                    свяжемся с Вами </h4>
                <form class="form">
                    <div class="form__input-hidden">
                        <input type="text" name="title" hidden value="Заказать звонок">
                        <input type="text" name="code" hidden value="order">
                    </div>
                    <div class="form__input modal__field-name field field--required">
                        <input type="text" required="" placeholder="Ваше имя" class="validate-name required" name="name">
                    </div>
                    <div class="form__input">
                        <input type="tel" required="" placeholder="Телефон" class="tel" name="phone">
                    </div>
                    <div class="form__input">
                        <textarea name="comment" cols="30" rows="10" placeholder="Сообщение"></textarea>
                    </div>
                    <button class="form__button btn">Оставить заявку</button>
                    <div class="worksDone__link">
                        <label for="checkbox" class="form__checkbox">
                            <input type="checkbox" name="checkbox" id="checkbox" checked required>
                        </label>
                        <div class="worksDone__policy">Даю согласие на <a href="/policy/" target="_blank">обработку персональных данных</a></div>
                    </div>
                    <!--                    <div class="form__line"></div>-->
                    <div class="form__text">Или напишите нам в мессенджеры</div>
                    <div class="form__messegers">
                        <a href="<?= get_field('telegram', 'options') ?>" class="telegram"><img src="<?= ASSETS ?>/images/messegers/telegram.svg" alt="telegram"></a>
                        <a href="<?= get_field('whatsapp', 'options') ?>" class="whatsapp"><img src="<?= ASSETS ?>/images/messegers/whatsapp.svg" alt="whatsapp"></a>
                    </div>
                </form>
                <button class="modal__close modal__close--fixed" type="button">
                </button>
            </div>
        </div>


        <div class="modal modal__content" data-modal-type="thank" hidden>
            <div class="modal__wrapper form__wrapper modal__wrapper modal__wrapper-thanks">
                <img src="<?= ASSETS ?>/images/modal-thk.png" alt="thanks">
                <h3 class="form__title modal__title form__title-thank">Спасибо за заявку!</h3>
                <p>Мы свяжемся с Вами в ближайшее время</p>
                <button class="modal__close-thank modal__close btn btn-orange" type="button">
                    Закрыть
                </button>
                <button class="modal__close modal__close--fixed" type="button"></button>
            </div>
        </div>


    </body>
</html>