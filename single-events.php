<?php
get_header();

$compare_events = get_field('compare-events-list', get_the_ID());
$data['compare_title'] = get_field('compare-events-title', get_the_ID());

if(isset($compare_events) && !empty($compare_events)){
    foreach ($compare_events as $item) {
        $data['compare_events'][] = [
            'id' => $item->ID,
            'name' => $item->post_title,
            'preview' => get_the_post_thumbnail($item->ID, 'full', ['loading' => 'lazy', 'class'=>'eventsSingle__dopImg']),
            'date' => get_field('event-date', $item->ID),
            'time' => get_field('event-time', $item->ID),
            'time-text' => get_field('event-time-single', $item->ID),
        ];
    }
}

$eventsSpeakRep = get_field('events-speakRep');
$eventsСonditions = get_field('events-conditions');
$eventsAttentions = get_field('events-attentions');


?>


    <section class="eventsSingle newSection">
        <div class="container">
            <div class="contacts__bgWrap background-wrap">
                <div class="scroller">
                    <div class="contacts__breadСrumbs breadСrumbs">
                        <a href="/">Главная</a>
                        <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                        <a href="/allnews/">События</a>
                        <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                        <a href="/allevents/">Мероприятия</a>
                        <img src="<?= ASSETS ?>/images/icons/crumb.svg" alt="crumb">
                        <div  class="crumbActive"><?= get_the_title() ?></div>
                    </div>
                </div>
                <h1 class="eventsSingle__title title"><?= get_the_title() ?></h1>
            </div>
            <div class="eventsSingle__wrapper">
                <div class="eventsSingle__regWrap">
                    <div class="eventsSingle__regbox">
                        <div class="events__date eventsSingle__date fs16"><?= get_field('event-date', $item->ID) ?></div>
                        <div class="eventsSingle__time fs16">
                            <img src="<?= ASSETS ?>/images/icons/time.svg" alt="time"><?= get_field('event-time-single') ?>
                        </div>
                    </div>
                    <div class="eventsSingle__price fs16">Стоимость обучения: <?= get_field('event-price') ?></div>
                    <button class="eventsSingle__btn btn-orange" data-modal="events">Зарегистрироваться</button>

                </div>
                <div class="eventsSingle__invation">
                    <div class="eventsSingle__infoWrapper">
                        <?php the_content() ?>
                    </div>
                    <?php if(!empty($eventsSpeakRep)): ?>
                    <div class="eventsSingle__teachers">
                        <div class="eventsSingle__teachersTitle subtitle">Спикеры</div>
                        <?php foreach ($eventsSpeakRep as $item4): ?>
                        <div class="eventsSingle__teachersWrap">
                            <img src="<?= $item4['speak-img'] ?>" alt="speaker" class="eventsSingle__teachersImg">
                            <div class="eventsSingle__boxInfo">
                                <div class="eventsSingle__name"><?= $item4['spik-name'] ?></div>
                                <div class="eventsSingle__teachInfo fs16"><?= $item4['spiker_dop_info'] ?></div>
                            </div>

                        </div>
                        <div class="eventsSingle__line"></div>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($eventsСonditions)): ?>
                    <div class="eventsSingle__conditions">
                        <div class="eventsSingle__conditionsTitle subtitle"><?= get_field('events-conditions-title', $item->ID) ?></div>
                        <ul class="eventsSingle__conditionsUl">
                            <?php foreach ($eventsСonditions as $item5): ?>
                            <li class="eventsSingle__conditionsLi li"><?= $item5['events-condition'] ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                    <?php if(!empty($eventsAttentions)): ?>
                    <div class="eventsSingle__attention">
                        <div class="eventsSingle__attentionTitle subtitle">Внимание</div>
                        <ul class="eventsSingle__attentionUl">
                            <?php foreach ($eventsAttentions as $item6): ?>
                            <li class="li"><?= $item6['events-attention'] ?></li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="eventsSingle__blockColor"></div>
                    </div>
                    <?php endif; ?>
                    <button class="eventsSingle__regbtn btn-orange" data-modal="events">Зарегистрироваться</button>
                </div>
            </div>
            <?php if(!empty($data['compare_events'])) : ?>
                <div class="eventsSingle__allEvents">
                <h2 class="eventsSingle__allEventsTitle h2"><?= $data['compare_title'] ?></h2>
                <div class="events__wrapper-dop">
                    <?php foreach ($data['compare_events'] as $event): ?>
                        <div class="events__wrap">
                            <a href="<?= get_permalink($event['id'])?>">
                                <?= $event['preview'] ?>
                            </a>
                            <div class="events__info">
                                <div class="events__date fs16"><?= $event['date'] ?></div>
                                <div class="events__time fs16">
                                    <img src="<?= ASSETS ?>/images/icons/time.svg" alt="time">
                                    <?= $event['time'] ?>
                                </div>
                                <a href="<?= get_permalink($event['id'])?>"><div class="events__name fs16"> <?= $event['name'] ?></div></a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endif ?>


            <?php if(!empty($data['compare_events'])) : ?>
                <div class="eventsSingle__wrapper-mob">
                    <h2 class="eventsSingle__allEventsTitle h2"><?= $data['compare_title'] ?></h2>
                    <?php foreach ($data['compare_events'] as $event): ?>
                    <div class="events__wrap">
                        <div class="events__wrapBox">
                            <a class="events__imgLink" href="<?= get_permalink($event['id'])?>">
                                <?= $event['preview'] ?>
                            </a>
                            <div class="events__infoBox">
                                <div class="events__date fs16"><?= $event['date'] ?></div>
                                <div class="events__time fs16">
                                    <img src="<?= ASSETS ?>/images/icons/time.svg" alt="time"><?= $event['time'] ?>
                                </div>
                            </div>
                        </div>
                        <a href="<?= get_permalink($event['id'])?>"><div class="events__name fs16"> <?= $event['name'] ?></div></a>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php endif ?>
        </div>
    </section>


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
            </div>
            <div class="form__input">
                <input type="tel" required="" placeholder="Телефон" class="tel" name="phone">
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




<?php get_footer() ?>
