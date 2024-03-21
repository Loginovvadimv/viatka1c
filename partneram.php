<?php
// Template Name: Партнерам
get_header();
$partnersRep = get_field('partners-rep', 'options');
$destrRep = get_field('destr-rep', 'options');
?>

    <section class="becomePartnerpage newSection">
        <div class="container">
            <div class="background-wrap">
                <div class="scroller">
                    <div class="becomePartnerpage__breadСrumbs breadСrumbs">
                        <a href="/">Главная</a>
                        <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                        <a href="/become-a-partner/">Партнёрам</a>
                        <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                        <div  class="crumbActive">Как стать партнёром</div>
                    </div>
                </div>
                <h1 class="title becomePartnerpage__title">Как стать партнёром</h1>
            </div>
            <div class="scroller">
                <div class="quickLinks">
                    <div class="link-block quickLinks__block">
                        <a href="/become-a-partner/" class="active">Как стать партнёром</a>
                        <a href="/partners-programms/">Партнёрские программы</a>
                        <a href="/certification/">Сертификация</a>
                        <a href="/1ssoft/">1С:Софт</a>
                    </div>
                    <div class="quickLinks__line"></div>
                </div>
            </div>
            <div class="becomePartnerpage__wrapper">
                <div class="becomePartnerpage__become">
                    <p class="fs16">Региональный дистрибьютор фирмы «1С» приглашает к сотрудничеству!</p>
                    <p class="fs16"><?= get_field('become-partner', 'options') ?></p>
                </div>
                <div class="becomePartnerpage__container">
                    <div class="becomePartnerpage__grey-wrap grey-wrap">
                        <h3 class="becomePartnerpage__h3 subtitle">Кто может стать нашим партнером:</h3>
                        <ul class="becomePartnerpage__ul">
                            <?php foreach ($partnersRep as $partner): ?>
                                <li class="becomePartnerpage__li fs16"><?= $partner['list-partners'] ?></li>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                    <div class="becomePartnerpage__grey-wrap grey-wrap">
                        <h3 class="becomePartnerpage__h3 subtitle">Почему выгодно работать с дистрибьютором?</h3>
                        <ul class="becomePartnerpage__ul">
                            <?php foreach ($destrRep as $destr): ?>
                                <li class="becomePartnerpage__li fs16"><?= $destr['destr-list'] ?></li>
                            <?php endforeach; ?>
                        </ul>

                    </div>
                </div>
                <div class="becomePartnerpage__infoWrapper">
                    <h3 class="becomePartnerpage__infoTitle subtitle">Как стать партнером</h3>
                    <p class="fs16">Для того чтобы стать партнером, необходимо заключить дилерское соглашение (скачать: дилерское соглашение и лицензионный договор) и приобрести не менее 5 продуктов фирмы «1С» на сумму от 3000 руб. или 3 продукта любых других производителей из прайс-листа фирмы «1С» на сумму не менее 7500 руб. Свою первую дилерскую покупку Вы делаете уже по «дилерским» ценам. При увеличении партии скидки возрастают: если закупка составит от 15000 руб. — цена товара определяется колонкой «постоянный партнер».
                    </p>
                    <p class="fs16">Одним из самых перспективных видов сотрудничества является «1С:Франчайзинг». Такие партнеры обеспечивают квалифицированное распространение ПО, установку, внедрение, обучение и сопровождение программных продуктов. Спрос на услуги таких фирм достаточно широк на всей территории России.</p>
                    <p class="fs16">Партнерам заключившим договор «1С:Франчайзинг», фирма «1С» оказывает регулярную информационную, методическую и технологическую поддержку — ежемесячные партнерские диски ИТС, NFR-версии продуктов по специальным ценам для изучения программ, регулярное обучение сотрудников фирм-партнеров в своих учебных центрах.</p>
                </div>
                <div class="becomePartnerpage__comingPartnersWrapper">
                    <div class="becomePartnerpage__comingPartnersTextWrap">
                        <h3 class="becomePartnerpage__comingPartnersTextTitle h3">Хотите стать партнером фирмы «1С» ?</h3>
                        <div class="becomePartnerpage__comingPartnersTextSubitle fs16">Оставьте заявку, мы свяжемся с Вами и проконсультируем по всем вопросам</div>
                    </div>
                    <img class="becomePartnerpage__img" src="<?= ASSETS ?>/images/partners.webp" alt="partner" loading="lazy">
                    <button class="becomePartnerpage__btn btn-orange" data-modal="partners">Оставить заявку</button>
                </div>


            </div>
        </div>
    </section>

<?php get_footer() ?>