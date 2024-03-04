<section class="needQuestion section">
    <div class="container">
        <div class="needQuestion__wrapper">
            <img class="needQuestion__img" src="<?= ASSETS ?>/images/needQuestion/messege.svg" alt="messege">
            <h2 class="needQuestion__title title">Есть вопросы или нужна консультация?</h2>
            <div class="needQuestion__subtitle fs16">Оставьте свои контакты, мы свяжемся с Вами и ответим на все вопросы</div>
            <form class="form needQuestion__form">
                <input type="text" name="title" value="вопросы или консультация" hidden>
                <input type="text" name="code" value="order" hidden>
                <div class="form__box">
                    <div class="form__inputWrap">
                        <input type="text" name="name" placeholder="Ваше имя" required>
                        <img src="<?= ASSETS ?>/images/circle-grey.svg" alt="circle">
                    </div>
                    <div class="form__inputWrap">
                        <input type="tel" name="phone" class="tel" placeholder="+7 (999) 999-99-99" required>
                        <img src="<?= ASSETS ?>/images/circle-grey.svg" alt="circle">
                    </div>
                    <button class="needQuestion__btn btn btn-orange">Получить консультацию</button>
                </div>
                <div class="needQuestion__link">
                    <label for="checkbox" class="form__checkbox">
                        <input type="checkbox" name="checkbox" id="checkbox" checked required>
                    </label>
                    <div class="needQuestion__policy">Даю согласие на <a href="/policy/" target="_blank">обработку персональных данных</a></div>
                </div>
            </form>
        </div>
    </div>
</section>