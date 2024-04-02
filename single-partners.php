<?php
get_header();
$params = array(
    'post_type' => 'partners',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
    'p' => get_the_ID()
);
//$partners = get_posts($params);

$partners = new WP_Query($params);

foreach ($partners->posts as $partner) {
    $data['partners'][] = [
        'id' => $partner->ID,
        'post_title' => get_the_title($partner->ID),
        'name' => $partner->post_title,
        'except' => get_the_excerpt($partner->ID),
        'content' => get_the_content($partner->ID),
        'link' => get_permalink($partner->ID)
    ];
}

$params_too = array(
    'post_type' => 'partners',
    'orderby' => 'date',
    'order' => 'DESC',
    'posts_per_page' => -1,
);

$partners_too = new WP_Query($params_too);

foreach ($partners_too->posts as $item) {
    $data['partners_too'][] = [
        'id' => $item->ID,
        'name' => $item->post_title,
        'link' => get_permalink($item->ID)
    ];
}
?>

<?php foreach ($data['partners'] as $partner): ?>
<section class="singlePartners newSection">
    <div class="container">
        <div class="singlePartners__bgWrap background-wrap">
            <div class="scroller">
                <div class="singlePartners__breadСrumbs breadСrumbs">
                    <a href="/">Главная</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/partners-programms/">Партнерам</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <a href="/partners-programms/">Партнёрские программы</a>
                    <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                    <div class="crumbActive"><?= $partner['post_title'] ?></div>
                </div>
            </div>

            <h1 class="singlePartners title"><?= $partner['post_title'] ?></h1>
        </div>
        <div class="scroller">
            <div class="quickLinks">
                <div class="link-block quickLinks__block">
                    <?php foreach($data['partners_too'] as $item ) : ?>
                        <a href="<?= $item['link'] ?>" <?= get_the_ID() == $item['id'] ? 'class="active"' : '' ?>><?= $item['name'] ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="quickLinks__line"></div>
            </div>
        </div>
        <div class="singlePartners__info fs16"><?= $partner['content'] ?></div>
    </div>
</section>
<?php endforeach; ?>

<?php get_footer(); ?>
