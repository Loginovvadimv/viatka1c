<?php
    //Template name: Шаблон страницы
    get_header();
$examensRep = get_field('examens-rep', 'options');
$shablonListOpen = get_field('shablon-list-open');
$blockInfoRep = get_field('blockInfo-rep');
$linksRep = get_field('links-rep');
//$video = get_field('video');
?>


<section class="shablon">
    <div class="container">
        <div class="background-wrap">
            <div class="scroller">
                <div class="allEvents__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/company-8/">Продукты</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/1sits/">1С:ИТС</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive"><?= get_the_title() ?></div>
                </div>
            </div>
            <h1 class="allEvents__title title"><?= get_the_title() ?></h1>
        </div>
        <div class="shablon__wrapper">
            <? the_content() ?>
        </div>


        <div class="quotePhoto">
            <?php if(!empty($blockInfoRep)): ?>
            <?php if(get_field('blockInfo-rep')): ?>
            <?php while(has_sub_field('blockInfo-rep')) : ?>
            <div class="quotePhoto__wrapper">
                <h4 class="quotePhoto__title h4"><?php the_sub_field('blockInfo-title'); ?></h4>
                <div class="quotePhoto__person">
                    <img src="<?php the_sub_field('blockInfo-img'); ?>" alt="person" class="quotePhoto__personImg">
                    <div class="quotePhoto__personWrap">
                        <div class="quotePhoto__personName"><?php the_sub_field('blockInfo-name'); ?></div>
                        <div class="quotePhoto__personDopInfo"><?php the_sub_field('blockInfo-dopInfo'); ?></div>
                    </div>
                </div>
                <div class="quotePhoto__info">
                    <?php if(get_sub_field('blockInfo-info-rep')): ?>
                    <?php while(has_sub_field('blockInfo-info-rep')) : ?>
                        <p class="quotePhoto__text"><?php the_sub_field('blockInfo-info'); ?></p>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            <?php endif; ?>
        </div>

        <section class="video">
            <div class="video__wrapper">

            </div>
        </section>

        <?php if(!empty($linksRep)): ?>
        <section class="links section">
            <div class="links__wrapper">
                <h2 class="links__title">Блок с ссылками</h2>
                <div class="links__wrap">
                    <?php foreach ($linksRep as $item): ?>
                    <a class="links__link" href="<?= $item['link']['url'] ?>">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_126_1424)">
                                    <path d="M14.6571 2.65691C14.2666 2.26639 13.6334 2.26639 13.2429 2.65691L12.5571 3.3427C12.1666 3.73322 12.1666 4.36639 12.5571 4.75691L18 10.1998V10.1998C18.1107 10.3105 18.0323 10.4998 17.8757 10.4998L1 10.4998C0.447716 10.4998 1.32393e-07 10.9475 1.25807e-07 11.4998L1.13883e-07 12.4998C1.07297e-07 13.0521 0.447715 13.4998 1 13.4998L17.8757 13.4998C18.0323 13.4998 18.1107 13.6891 18 13.7998V13.7998L12.5571 19.2427C12.1666 19.6332 12.1666 20.2664 12.5571 20.6569L13.2429 21.3427C13.6334 21.7332 14.2666 21.7332 14.6571 21.3427L23.2929 12.7069C23.6834 12.3164 23.6834 11.6832 23.2929 11.2927L14.6571 2.65691Z" fill="#FA7E10"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_126_1424">
                                        <rect width="24" height="24" fill="white" transform="translate(0 24) rotate(-90)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        <?= $item['link']['title'] ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <?php endif; ?>

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
                                        <a class="examens__reg" data-modal="examens">Подать заявку</a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <?php if(!empty($shablonListOpen)): ?>
        <section class="listOpen">
        <div class="container">
        <h2 class="listOpen__title title"><?= get_field('listOpenTitle') ?></h2>
        <div class="listOpen__wrapper">
        <?php foreach ($shablonListOpen as $item): ?>
        <div class="listOpen__greyBox">
            <div class="listOpen__wrap">
                <div class="listOpen__text fs16"><?= $item['shablon-li'] ?></div>
                <div class="listOpen__plus">
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="listOpen__answer fs16">
                <?= $item['shablon-li-open'] ?>
            </div>
        </div>


        <?php endforeach; ?>
        </div>

<!--            <div class="video__wrapper">-->
<!---->
<!--                --><?php //if(!empty(the_sub_field('video_file'))): ?>
<!--                    <a class="video__videoLink" data-fancybox href="--><?php //the_sub_field('video-file'); ?><!--"><div class="video__wrap video__wrap-link">-->
<!--                            <img src="--><?php //the_sub_field('video_img'); ?><!--" alt="video">-->
<!---->
<!--                            <div class="video__container">-->
<!--                                <img class="video__play" src="--><?php //= ASSETS ?><!--/images/video/play.webp" alt="play">-->
<!--                            </div>-->
<!---->
<!--                        </div></a>-->
<!--                --><?php //endif; ?>
<!---->
<!---->
<!---->
<!--                --><?php //if(empty($video['video_file'])): ?>
<!--                    <a class="video__videoLink" data-fancybox href='--><?php //= $video['video_link'] ?><!--'><div class="video__wrap video__wrap-link">-->
<!--                            <img src="--><?php //the_sub_field('video_img'); ?><!--" alt="video">-->
<!--                            <div class="video__container">-->
<!--                                <img class="video__play" src="--><?php //= ASSETS ?><!--/images/video/play.webp" alt="play">-->
<!--                            </div>-->
<!---->
<!--                        </div></a>-->
<!--                --><?php //endif; ?>
<!---->
<!---->
<!--            </div>-->


        </div>
    </section>
        <?php endif; ?>



    </div>
</section>
<?php get_template_part('templates/neenQuestion') ?>

<?php get_footer(); ?>
