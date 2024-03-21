import './classes/Modal.js'
import './classes/Select.js'
import './classes/Fancybox.js'
import './classes/Mask.js'
import './classes/Slider.js'
import './classes/Alert.js'
import './classes/Tabs.js'
import './classes/SetSizes.js'
import './classes/CookieAccept.js'
import './classes/ToTop.js'
import './classes/Form.js'
import './classes/Validation.js'
import './classes/Util.js'
import './classes/Lightbox.js'



import './classes/Hover3D.js'
import './classes/Inputer.js'

document.addEventListener('DOMContentLoaded', function() {
//contacts map
    if(document.querySelector('#map')) {
        ymaps.ready(init);


        function init() {
            let map = new ymaps.Map('map', {
                center: [58.6037605856916, 49.67858607672121],
                zoom: 17
            });

            let placemark = new ymaps.Placemark([58.604255607018004, 49.67831551710745], {}, {
                iconLayout: 'default#image',
                iconImageHref: 'https://cdn4.iconfinder.com/data/icons/navigation-set/128/Location-1024.png',
                iconImageSize: [36, 36],
                iconImageOffset: [0, 0]
            });

            map.controls.remove('geolocationControl');
            map.controls.remove('searchControl');
            map.controls.remove('trafficControl');
            map.controls.remove('typeSelector');
            map.controls.remove('fullscreenControl');
            map.controls.remove('zoomControl');
            map.controls.remove('rulerControl');
            map.geoObjects.add(placemark);
            map.behaviors.disable('scrollZoom');
        }
    }

//end contacts map

    ///hamb-mob
    const hamb = document.querySelector('.header__hamb');
    const header = document.querySelector('.header');
    const navContainer = document.querySelector('.navContainer');
    const navLink = document.querySelectorAll('.header .nav > ul > li > a');
    const navUl = document.querySelectorAll('.header .nav > ul > li > ul');
    const headerBottomWrapper = document.querySelector('.header__bottomWrapper');
    const body = document.querySelector('body');
    const headerWrap = document.querySelector('.header__wrap');
    const headerSearch = document.querySelector('.header .search__wrapper');


    hamb.addEventListener('click', () => {
        hamb.classList.toggle('header__hamb-open');
        if (hamb.classList.contains('header__hamb-open')) {
            navContainer.classList.add('visibility');
            headerBottomWrapper.classList.add('max-wrap');
            body.style.overflow = 'hidden';
            headerWrap.classList.add('header__wrap-mobile');
            headerSearch.classList.add('sVisibility');


        } else {
            header.classList.remove('header__open');
            navContainer.classList.remove('visibility');
            headerBottomWrapper.classList.remove('max-wrap');
            body.style.overflow = '';
            headerWrap.classList.remove('header__wrap-mobile');
            headerSearch.classList.remove('sVisibility');
        }
    });

    const mediaQuery = window.matchMedia('(max-width: 1023px)')
    if (mediaQuery.matches) {
        navLink.forEach(item => {
            item.addEventListener('click', (e) => {
                e.preventDefault();
                navUl.forEach(nav => {
                    if (nav!==item.nextElementSibling){
                        nav.classList.remove('visibility');
                    }
                })
                item.nextElementSibling.classList.toggle('visibility');

            });
        });
    }

    //end hamb


    //plus=minus

    const trigger = document.querySelectorAll('.listOpen__plus');
    trigger.forEach(item => {
        item.addEventListener('click', (e) => {
            item.classList.toggle('listOpen__plusOpen');
            const target = item.closest('.listOpen__wrap');
            target.nextElementSibling.classList.toggle('listOpen__answer_active');
        });
    });
//end



    //link-active

    const links = document.querySelectorAll('.link-block a');
    links.forEach(el => {
        el.addEventListener('click', e => {
            const id = e.target.getAttribute('href');
            links.forEach(el => {
                el.classList.remove('active');
            });
            e.target.classList.add('active');
            document.querySelector(id).classList.remove('hidden');
        });
    });

    //end




    //table
    const tables = document.querySelectorAll('table');
    const div = document.createElement("div");
    div.classList.add('tables');
    tables.forEach(item => {
        var parent = item.parentNode;
        parent.insertBefore(div, item);
        div.appendChild(item);
    })
    //end

    //btnup

    const btnUp = {
        el: document.querySelector('.btn-up'),
        show() {
            // удалим у кнопки класс btn-up_hide
            this.el.classList.remove('btn-up_hide');
        },
        hide() {
            // добавим к кнопке класс btn-up_hide
            this.el.classList.add('btn-up_hide');
        },
        addEventListener() {
            // при прокрутке содержимого страницы
            window.addEventListener('scroll', () => {
                // определяем величину прокрутки
                const scrollY = window.scrollY || document.documentElement.scrollTop;
                // если страница прокручена больше чем на 400px, то делаем кнопку видимой, иначе скрываем
                scrollY > 800 ? this.show() : this.hide();
            });
            // при нажатии на кнопку .btn-up
            document.querySelector('.btn-up').onclick = () => {
                // переместим в начало страницы
                window.scrollTo({
                    top: 0,
                    left: 0,
                    behavior: 'smooth'
                });
            }
        }
    }
    btnUp.addEventListener();

    //end

    //topHeaderHide

    const headerTopWrap = {
        el: document.querySelector('.header__topWrap'),
        show() {
            // удалим у хедера класс header-up_hide
            this.el.classList.remove('header-up_hide');
        },
        hide() {
            // добавим хедеру класс btn-up_hide
            this.el.classList.add('header-up_hide');
        },
        addEventListener() {
            // при прокрутке содержимого страницы
            window.addEventListener('scroll', () => {
                // определяем величину прокрутки
                const scrollY = window.scrollY || document.documentElement.scrollTop;
                // если страница прокручена больше чем на 400px, то делаем кнопку видимой, иначе скрываем
                scrollY > 800 ? this.hide() : this.show();
            });
        }
    }
    headerTopWrap.addEventListener();

    //end


});