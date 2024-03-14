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
            // map.controls.remove('scrollZoom');
            map.geoObjects.add(placemark);
            map.behaviors.disable('scrollZoom');
        }
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

    //pagination\\\\\\\\\\\\\\\\\\\\\\\\\\\\

        // const content = document.querySelector('.content');
        // const itemsPerPage = 1; // set number of items per page
        // let currentPage = 0;
        // const items = Array.from(content.getElementsByTagName('section')).slice(0); // tag name set to section and slice set to 0
        //
        // function showPage(page) {
        //     const startIndex = page * itemsPerPage;
        //     const endIndex = startIndex + itemsPerPage;
        //     items.forEach((item, index) => {
        //         item.classList.toggle('hidden', index < startIndex || index >= endIndex);
        //     });
        //     updateActiveButtonStates();
        // }
        //
        // function createPageButtons() {
        //     const totalPages = Math.ceil(items.length / itemsPerPage);
        //     const paginationContainer = document.createElement('div');
        //     const paginationDiv = document.body.appendChild(paginationContainer);
        //     paginationContainer.classList.add('pagination');
        //
        //     // Add page buttons
        //     for (let i = 0; i < totalPages; i++) {
        //         const pageButton = document.createElement('button');
        //         pageButton.textContent = i + 1;
        //         pageButton.addEventListener('click', () => {
        //             currentPage = i;
        //             showPage(currentPage);
        //             updateActiveButtonStates();
        //         });
        //
        //         content.appendChild(paginationContainer);
        //         paginationDiv.appendChild(pageButton);
        //     }
        // }
        //
        // function updateActiveButtonStates() {
        //     const pageButtons = document.querySelectorAll('.pagination button');
        //     pageButtons.forEach((button, index) => {
        //         if (index === currentPage) {
        //             button.classList.add('active');
        //         } else {
        //             button.classList.remove('active');
        //         }
        //     });
        // }
        //
        // createPageButtons(); // Call this function to create the page buttons initially
        // showPage(currentPage);




    //endPagination



})