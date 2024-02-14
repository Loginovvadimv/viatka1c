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

})