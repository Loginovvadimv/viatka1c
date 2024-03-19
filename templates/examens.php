<?php
    $examensRep = get_field('examens-rep', 'options');
?>
<section class="examens section">
    <div class="container">
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


            <div class="examens__info">
                <div class="examens__infoText">Узнайте подробнее о сертификации</div>
                <a href="/partnership/certification/"><button class="examens__btn btn-orange">Подробнее</button></a>
                <div class="examens__elipce">
                    <img class="examens__img" src="<?= ASSETS ?>/images/examens/1.svg" alt="info">
                </div>
            </div>
        </div>

    </div>
</section>