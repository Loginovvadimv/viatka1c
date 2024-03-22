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
                            <li><a href="/become-a-partner/">Как стать партнёром</a></li>
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
                        <button class="footer__btn btn-white" data-modal="orders">Задать вопрос</button>


                    </div>
                </div>
                <div class="footer__line"></div>
                <div class="footer__wrapper-bottom footer__wrapper">
                    <div class="footer__company">
                        <div id="year"><script>
                                document.getElementById('year').textContent = new Date().getFullYear();
                            </script> © ООО «1С-Вятка»</div>
                        <div class="footer__policy"><a href="/policy/">Политика конфиденциальности</a></div>
                    </div>
                    <div class="footer__razrab">Разработка сайта: <a href="https://vyatka-it.ru/" target="_blank"><img src="<?= ASSETS ?>/images/icons/light.webp" alt="company"></a></div>
                </div>
            </div>
            <div class="btn-up btn-up_hide"><svg width="46.000000" height="46.000000" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <clipPath id="clip51_4183">
                            <rect id="Icons" width="24.000000" height="24.000000" transform="translate(11.000000 35.000000) rotate(-90.000000)" fill="white" fill-opacity="0"/>
                        </clipPath>
                    </defs>
                    <circle id="Ellipse 62" cx="23.000000" cy="23.000000" r="23.000000" fill="#FFBA08" fill-opacity="1.000000"/>
                    <g clip-path="url(#clip51_4183)">
                        <path id="Arrow 1" d="M22 17.4143L18.0503 21.364C17.6543 21.76 17.032 21.76 16.636 21.364C16.2401 20.968 16.2401 20.3457 16.636 19.9497L22.2928 14.293C22.6888 13.897 23.3112 13.897 23.7072 14.293L29.364 19.9497C29.7599 20.3457 29.7599 20.968 29.364 21.364C28.968 21.76 28.3457 21.76 27.9497 21.364L24 17.4143L24 31C24 31.5601 23.5601 32 23 32C22.4399 32 22 31.5601 22 31L22 17.4143Z" fill="#F4F4F4" fill-opacity="1.000000" fill-rule="evenodd"/>
                    </g>
                </svg></div>
        </footer>

        <div class="modal modal__content open" data-modal-type="orders" hidden>
            <div class="modal__wrapper form__wrapper">
                <h3 class="modal__title">Задать вопрос</h3>
                <h4 class="modal__subtitle">Отправьте свой вопрос, мы свяжемся с Вами
                    и ответим на все вопросы</h4>
                <form class="form">
                    <div class="form__input-hidden">
                        <input type="text" name="title" hidden value="Задать вопрос">
                        <input type="text" name="code" hidden value="order">
                    </div>
                    <div class="form__input modal__field-name field field--required">
                        <input type="text" required="" placeholder="Ваше имя" class="validate-name required" name="name">
                        <div class="requiredWrap"></div>
                    </div>
                    <div class="form__input">
                        <input type="tel" required="" placeholder="+7 (999) 999-99-99" class="tel" name="phone">
                        <div class="requiredWrap"></div>
                    </div>
                    <div class="form__input">
                        <textarea name="comment" cols="30" rows="10" placeholder="Сообщение"></textarea>
                    </div>
                    <button class="form__button btn btn-orange">Отправить</button>
                    <div class="worksDone__link">
                        <label for="checkbox" class="form__checkbox">
                            <input type="checkbox" name="checkbox" id="checkbox" checked required>
                        </label>
                        <div class="worksDone__policy">Даю согласие на <a href="/policy/" target="_blank">обработку персональных данных</a></div>
                    </div>
                                        <div class="form__line"></div>
                    <div class="form__text">Или свяжитесь с нами другим удобным способом</div>
                    <div class="form__contacts">
                        <a class="form__phone" href="<?= get_field('phone-link', 'options') ?>"><?= get_field('phone', 'options') ?></a>
                        <a target="_blank" class="form__messeger" href="https://vk.com/1c_vyatka"><img src="<?= ASSETS ?>/images/icons/vk.svg" alt="vk"></a>
                    </div>
                </form>
                <button class="modal__close modal__close--fixed" type="button">
                </button>
            </div>
        </div>


        <div class="modal modal__content open" data-modal-type="examens" hidden>
            <div class="modal__wrapper form__wrapper">
                <h3 class="modal__title">Заявка на экзамен</h3>
                <h4 class="modal__subtitle">Оставьте заявку, мы свяжемся с Вами в ближайшее время</h4>
                <form class="form">
                    <div class="form__input-hidden">
                        <input type="text" name="title" hidden value="Заявка на экзамен">
                        <input type="text" name="code" hidden value="examen">
                    </div>
                    <div class="form__input modal__field-name field field--required">
                        <input type="text" required="" placeholder="Ваше имя" class="validate-name required" name="name">
                        <div class="requiredWrap"></div>
                    </div>
                    <div class="form__input">
                        <input type="tel" required="" placeholder="+7 (999) 999-99-99" class="tel" name="phone">
                        <div class="requiredWrap"></div>
                    </div>
                    <div class="form__input">
                        <textarea name="comment" cols="30" rows="10" placeholder="Сообщение"></textarea>
                    </div>
                    <button class="form__button btn btn-orange">Отправить</button>
                    <div class="worksDone__link">
                        <label for="checkbox" class="form__checkbox">
                            <input type="checkbox" name="checkbox" id="checkbox" checked required>
                        </label>
                        <div class="worksDone__policy">Даю согласие на <a href="/policy/" target="_blank">обработку персональных данных</a></div>
                    </div>
                    <div class="form__line"></div>
                    <div class="form__text">Или свяжитесь с нами другим удобным способом</div>
                    <div class="form__contacts">
                        <a class="form__phone" href="<?= get_field('phone-link', 'options') ?>"><?= get_field('phone', 'options') ?></a>
                        <a target="_blank" class="form__messeger" href="https://vk.com/1c_vyatka"><img src="<?= ASSETS ?>/images/icons/vk.svg" alt="vk"></a>
                    </div>
                </form>
                <button class="modal__close modal__close--fixed" type="button">
                </button>
            </div>
        </div>


        <div class="modal modal__content open" data-modal-type="partners" hidden>
            <div class="modal__wrapper form__wrapper">
                <h3 class="modal__title">Заявка на партнёрство</h3>
                <h4 class="modal__subtitle">Оставьте заявку, мы свяжемся с Вами в ближайшее время</h4>
                <form class="form">
                    <div class="form__input-hidden">
                        <input type="text" name="title" hidden value="Заявка на партнёрство">
                        <input type="text" name="code" hidden value="partners">
                    </div>
                    <div class="form__input modal__field-name field field--required">
                        <input type="text" required="" placeholder="Ваше имя" class="validate-name required" name="name">
                        <div class="requiredWrap"></div>
                    </div>
                    <div class="form__input">
                        <input type="tel" required="" placeholder="+7 (999) 999-99-99" class="tel" name="phone">
                        <div class="requiredWrap"></div>
                    </div>
                    <div class="form__input">
                        <textarea name="comment" cols="30" rows="10" placeholder="Сообщение"></textarea>
                    </div>
                    <button class="form__button btn btn-orange">Отправить</button>
                    <div class="worksDone__link">
                        <label for="checkbox" class="form__checkbox">
                            <input type="checkbox" name="checkbox" id="checkbox" checked required>
                        </label>
                        <div class="worksDone__policy">Даю согласие на <a href="/policy/" target="_blank">обработку персональных данных</a></div>
                    </div>
                    <div class="form__line"></div>
                    <div class="form__text">Или свяжитесь с нами другим удобным способом</div>
                    <div class="form__contacts">
                        <a class="form__phone" href="<?= get_field('phone-link', 'options') ?>"><?= get_field('phone', 'options') ?></a>
                        <a target="_blank" class="form__messeger" href="https://vk.com/1c_vyatka"><img src="<?= ASSETS ?>/images/icons/vk.svg" alt="vk"></a>
                    </div>
                </form>
                <button class="modal__close modal__close--fixed" type="button">
                </button>
            </div>
        </div>

        <div class="modal modal__content open" data-modal-type="сontactUs" hidden>
            <div class="modal__wrapper form__wrapper">
                <h3 class="modal__title">Заявка на звонок</h3>
                <h4 class="modal__subtitle">Оставьте заявку, мы свяжемся с Вами в ближайшее время</h4>
                <form class="form">
                    <div class="form__input-hidden">
                        <input type="text" name="title" hidden value="Заявка на звонок">
                        <input type="text" name="code" hidden value="partners">
                    </div>
                    <div class="form__input modal__field-name field field--required">
                        <input type="text" required="" placeholder="Ваше имя" class="validate-name required" name="name">
                        <div class="requiredWrap"></div>
                    </div>
                    <div class="form__input">
                        <input type="tel" required="" placeholder="+7 (999) 999-99-99" class="tel" name="phone">
                        <div class="requiredWrap"></div>
                    </div>
                    <div class="form__input">
                        <textarea name="comment" cols="30" rows="10" placeholder="Сообщение"></textarea>
                    </div>
                    <button class="form__button btn btn-orange">Отправить</button>
                    <div class="worksDone__link">
                        <label for="checkbox" class="form__checkbox">
                            <input type="checkbox" name="checkbox" id="checkbox" checked required>
                        </label>
                        <div class="worksDone__policy">Даю согласие на <a href="/policy/" target="_blank">обработку персональных данных</a></div>
                    </div>
                    <div class="form__line"></div>
                    <div class="form__text">Или свяжитесь с нами другим удобным способом</div>
                    <div class="form__contacts">
                        <a class="form__phone" href="<?= get_field('phone-link', 'options') ?>"><?= get_field('phone', 'options') ?></a>
                        <a target="_blank" class="form__messeger" href="https://vk.com/1c_vyatka"><img src="<?= ASSETS ?>/images/icons/vk.svg" alt="vk"></a>
                    </div>
                </form>
                <button class="modal__close modal__close--fixed" type="button">
                </button>
            </div>
        </div>


        <div class="modal modal__content open" data-modal-type="events" hidden>
            <div class="modal__wrapper form__wrapper">
                <h3 class="modal__title">Заявка на мероприятие</h3>
                <h4 class="modal__subtitle">Оставьте заявку, мы свяжемся с Вами в ближайшее время</h4>
                <form class="form">
                    <div class="form__input-hidden">
                        <input type="text" name="title" hidden value="Заявка на мероприятие <?= get_the_title() ?>">
                        <input type="text" name="code" hidden value="events">
                    </div>
                    <div class="form__input modal__field-name field field--required">
                        <input type="text" required="" placeholder="Ваше имя" class="validate-name required" name="name">
                        <div class="requiredWrap"></div>
                    </div>
                    <div class="form__input">
                        <input type="tel" required="" placeholder="+7 (999) 999-99-99" class="tel" name="phone">
                        <div class="requiredWrap"></div>
                    </div>
                    <div class="form__input">
                        <textarea name="comment" cols="30" rows="10" placeholder="Сообщение"></textarea>
                    </div>
                    <button class="form__button btn btn-orange">Отправить</button>
                    <div class="worksDone__link">
                        <label for="checkbox" class="form__checkbox">
                            <input type="checkbox" name="checkbox" id="checkbox" checked required>
                        </label>
                        <div class="worksDone__policy">Даю согласие на <a href="/policy/" target="_blank">обработку персональных данных</a></div>
                    </div>
                    <div class="form__line"></div>
                    <div class="form__text">Или свяжитесь с нами другим удобным способом</div>
                    <div class="form__contacts">
                        <a class="form__phone" href="<?= get_field('phone-link', 'options') ?>"><?= get_field('phone', 'options') ?></a>
                        <a target="_blank" class="form__messeger" href="https://vk.com/1c_vyatka"><img src="<?= ASSETS ?>/images/icons/vk.svg" alt="vk"></a>
                    </div>
                </form>
                <button class="modal__close modal__close--fixed" type="button">
                </button>
            </div>
        </div>


        <div class="modal modal__content" data-modal-type="thank" hidden>
            <div class="modal__wrapper form__wrapper modal__wrapper modal__wrapper-thanks">
                <img src="<?= ASSETS ?>/images/modal-thk.png" alt="thanks">
                <h3 class="form__title modal__title form__title-thank">Спасибо за вопрос!</h3>
                <p>Мы свяжемся с Вами в ближайшее время</p>
                <button class="modal__close-thank modal__close btn btn-orange" type="button">
                    Закрыть
                </button>
                <button class="modal__close modal__close--fixed modal__close-x" type="button"></button>
            </div>
        </div>


    </body>
</html>