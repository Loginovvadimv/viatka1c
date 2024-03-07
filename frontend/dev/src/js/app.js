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
import './classes/Pagination.js'


import './classes/Hover3D.js'
import './classes/Inputer.js'

document.addEventListener('DOMContentLoaded', function() {
//contacts map
    ymaps.ready(init);
    function init(){
        let map = new ymaps.Map('map', {
            center: [58.6037605856916,49.67858607672121],
            zoom: 17
        });

        let placemark = new ymaps.Placemark([58.604255607018004,49.67831551710745], {}, {
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
        // map.controls.remove('scrollZoom');
        map.geoObjects.add(placemark);
    }

//end contacts map

    ///hamb-mob
    const hamb = document.querySelector('.header__hamb');
    const header = document.querySelector('.header');
    const headerNav = document.querySelector('.header__wrap');
    const headerBtn = document.querySelector('.header__btn');
    const headerWrap = document.querySelector('.header__wrapper');

    hamb.addEventListener('click', () => {
        hamb.classList.toggle('header__hamb-open');
        if (hamb.classList.contains('header__hamb-open')) {
            header.classList.add('header__open');
            headerNav.classList.add('visible');
            headerBtn.classList.add('visible');
            headerWrap.classList.add('header__wrapper-open');
        } else {
            header.classList.remove('header__open');
            headerNav.classList.remove('visible');
            headerBtn.classList.remove('visible');
            headerWrap.classList.remove('header__wrapper-open');
        }
    });

    //end hamb


    //закрытие окна при переходе по ссылке


    const headerLinks = document.querySelectorAll('.header__li a');
    // if (window.matchMedia("(max-width: 1023px)").matches) {
    headerLinks.forEach(item => {
        item.addEventListener('click', function () {
            hamb.classList.remove('header__hamb-open');
            headerWrap.classList.remove('visible');
            header.classList.remove('header__open');
            headerNav.classList.remove('visible');
            headerWrap.classList.remove('header__wrapper-open')
            headerBtn.classList.remove('visible');
        })
    })

    // }

    ///////end

})