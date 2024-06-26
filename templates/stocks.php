<?php

$params = array(
    'posts_per_page' => 2,
    'post_type' => 'stocks',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'DESC',
);

$stocks = new WP_Query($params);

foreach ($stocks->posts as $stock) {
    $data['stocks'][] = [
        'id' => $stock->ID,
        'post_title' => get_the_title($stock->ID),
    ];
}

?>
<?php if(!empty($data['stocks'])):  ?>
<section class="stocks section">
    <div class="container">
        <div class="stocks__wrapper">
            <div class="stocks__box">
                <h2 class="stocks__title title">Акции</h2>
                <a href="/allpromos/"><button class="btn-white stocks__btn">Все акции</button></a>
            </div>
            <div class="stocks__swiper slider__opacity slider__opacity-2-elements">
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($data['stocks'] as $stock): ?>
                            <div class="stocks__wrap">
                                <div class="stocks__img">
                                    <a href="<?= get_permalink($stock['id']) ?>">
                                        <img src="<?= get_the_post_thumbnail($stock['id'], 'full', ['loading' => 'lazy']) ?>" alt="logo">
                                    </a>
                                </div>
                                <div class="stocks__info">
                                    <a class="stocks__text" href="<?= get_permalink($stock['id']) ?>"><?= $stock['post_title'] ?></a>
                                    <div class="stocks__date"><?= get_field('promodate', $stock['id'])?></div>
                                </div>
                            </div>
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

        </div>
    </div>
</section>
<?php endif; ?>