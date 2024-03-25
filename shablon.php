<?php
    //Template name: Шаблон страницы
    get_header();
$examensRep = get_field('examens-rep', 'options');
$shablonListOpen = get_field('shablon-list-open');
$blockInfoRep = get_field('blockInfo-rep');
$linksRep = get_field('links-rep');
$video = get_field('video');
$shablonPhotos = get_field('shablon-photos');
?>



<section class="shablon">
    <div class="container">
        <div class="background-wrap">
            <div class="scroller">
                <div class="shablon__breadСrumbs breadСrumbs">
                   <?php do_action('pretty_breadcrumb'); ?>
                </div>

            </div>

            <h1 class="allEvents__title title"><?= get_the_title() ?></h1>
        </div>
        <div class="shablon__wrapper">
            <? the_content() ?>
        </div>

        <?php if(!empty($blockInfoRep)): ?>
        <div class="quotePhoto">
            <?php if(get_field('blockInfo-rep')): ?>
            <?php while(has_sub_field('blockInfo-rep')) : ?>
            <div class="quotePhoto__wrapper">
                <div class="quotePhoto__title"><?php the_sub_field('blockInfo-title'); ?></div>
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

        </div>
        <?php endif; ?>

<!--        slider-->

        <?php if(!empty($shablonPhotos)): ?>
            <section class="shablonPhotos">
                <h2 class="shablonPhotos__title title"><?= get_field('shablon-photos-title') ?></h2>
                <div class="shablonPhotos__wrapper">
                    <div class="swiper">
                        <div class="swiper-wrapper" data-lightbox-parent>
                            <?php foreach ($shablonPhotos as $item): ?>
                                <a class="shablonPhotos__link" href="<?= $item['shablon-photo'] ?>" class="slider__item" data-fancybox="slider">
                                    <img class="shablonPhotos__img" src="<?= $item['shablon-photo'] ?>" alt="photo">
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="slider__arrows">
                        <button class="slider__arrow slider__arrow--prev"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7807 12.3753L7.28069 8.0003L10.7807 3.6253C11.004 3.34627 11.0614 2.96932 10.9315 2.63643C10.8015 2.30354 10.5037 2.0653 10.1505 2.01143C9.79716 1.95757 9.44198 2.09627 9.21869 2.3753L5.21868 7.3753C4.92618 7.74063 4.92618 8.25997 5.21868 8.6253L9.21869 13.6253C9.56386 14.0566 10.1934 14.1265 10.6247 13.7813C11.056 13.4361 11.1259 12.8066 10.7807 12.3753Z" fill="#212121"></path>
                            </svg></button>
                        <button class="slider__arrow slider__arrow--next"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.21933 3.62469L8.71933 7.99969L5.21933 12.3747C4.99604 12.6537 4.93857 13.0307 5.06856 13.3636C5.19856 13.6964 5.49628 13.9347 5.84956 13.9886C6.20285 14.0424 6.55804 13.9037 6.78133 13.6247L10.7813 8.62469C11.0738 8.25935 11.0738 7.74002 10.7813 7.37469L6.78133 2.37469C6.43615 1.94335 5.80666 1.87351 5.37533 2.21869C4.94399 2.56386 4.87415 3.19335 5.21933 3.62469Z" fill="#212121"></path>
                            </svg></button>
                    </div>
                </div>
            </section>
        <?php endif; ?>

<!--        endSlider-->


        <!--        video-->
        <?php if(!empty($video)): ?>
        <div class="video">
            <h2 class="video__title title"><?= $video['video-title'] ?></h2>
            <div class="video__wrapper">
                <?php if(!empty($video['video-file'])): ?>
                    <a class="video__videoLink" data-fancybox href="<?= $video['video-file'] ?>">
                        <div class="video__wrap video__wrap-link">
                            <img class="video__bg" src="<?= $video['video-img'] ?>" alt="video">
                            <img class="video__play" src="<?= ASSETS ?>/images/icons/play.svg" alt="play">
                        </div>
                    </a>
                <?php endif; ?>

                <?php if(empty($video['video-file'])): ?>
                    <a class="video__videoLink" data-fancybox href='<?= $video['video-link'] ?>'><div class="video__wrap video__wrap-link">
                            <img class="video__bg" src="<?= $video['video-img'] ?>" alt="video">
                            <img class="video__play" src="<?= ASSETS ?>/images/icons/play.svg" alt="play">
                        </div></a>
                <?php endif; ?>
            </div>
        </div>
        <?php endif; ?>
        <!--//end video-->


        <?php if(!empty($linksRep)): ?>
        <section class="links">
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
        <h2 class="listOpen__title title"><?= get_field('listOpenTitle') ?></h2>
        <div class="listOpen__wrapper">
        <?php foreach ($shablonListOpen as $item): ?>
        <div class="listOpen__greyBox">
            <div class="listOpen__wrap">
                <div class="listOpen__text"><?= $item['shablon-li'] ?></div>
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
    </section>
        <?php endif; ?>


    </div>
</section>
<?php get_template_part('templates/neenQuestion') ?>

<?php get_footer(); ?>
