<?php
    //Template name: Шаблон страницы
    get_header();
$examensRep = get_field('examens-rep', 'options');
$shablonListOpen = get_field('shablon-list-open');
?>


<section class="shablon">
    <div class="container">
        <div class="background-wrap">
            <div class="scroller">
                <div class="allEvents__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive">Заголовок типовой контентной страницы</div>
                </div>
            </div>
            <h2 class="allEvents__title title"><?= get_the_title() ?></h2>
        </div>
        <div class="shablon__wrapper">
            <? the_content() ?>
        </div>
        <section class="examens__section">
            <div class="examens__container">
                <h2 class="examens__title title"><?= get_field('examens-title', 'options') ?></h2>
                <div class="examens__scrollBox">
                    <div class="examens__wrapper">
                        <div class="examens__header">
                            <div class="examens__headDate">Дата проведения</div>
                            <div class="examens__headType">Тип экзамена</div>
                            <div class="examens__headPrice">Стоимость</div>
                            <div class="examens__headReg">Регистрация</div>
                        </div>
                        <ul class="examens__ul">
                            <?php if(!empty($examensRep)): ?>
                                <?php foreach ($examensRep as $item): ?>
                                    <li class="examens__li"><div class="examens__date examens__headDate"><?= $item['date'] ?><span><?= $item['time'] ?></span></div><div class="examens__type examens__headType"><?= $item['type'] ?></div><div class="examens__price examens__headPrice"><?= $item['price'] ?></div>
                                        <a class="examens__reg" href="#">Подать заявку</a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

            </div>
        </section>


        <section class="listOpen">
            <h2 class="listOpen__title title">Раскрывающийся список</h2>
            <div class="listOpen__wrapper">
                <?php foreach ($shablonListOpen as $item): ?>
                    <div class="listOpen__wrap">
                        <div class="listOpen__wrapTitle"><?= $item['shablon-li'] ?></div>
                        <div class="listOpen__wrapSubtitle"><?= $item['shablon-li-open'] ?></div>
                        <div class="listOpen__plusBox">
                            <div class="listOpen__plus">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>


    </div>
</section>

<?php get_footer(); ?>
