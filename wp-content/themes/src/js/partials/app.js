// Yandex Map
ymaps.ready(init);

function init() {

    ////YandexApi map
    var sputnikMap = new ymaps.Map("map", {
            center: [55.7630, 37.6133], //sputnik hostel
            zoom: 17,

            //убрать кнопки управления
            controls: ['zoomControl']
        }),


    // Создаем геообъект с типом геометрии "Круг".
        sputnikPlacemark = new ymaps.GeoObject({
            // Описание геометрии
            geometry: {
                type: "Point",
                coordinates: [55.7630, 37.6133]

            }
        });

    sputnikMap.geoObjects.add(sputnikPlacemark);


// отключается zoom при прокрутке страницы
    sputnikMap.behaviors.disable('scrollZoom');
    sputnikMap.behaviors.disable('drag');
}


//jQuerry no conflict mode
jQuery(document).ready(function ($) {

//top navigation menu
//toggle active and open classes, add esc btn toggle class function

    $('#toggle').click(function () {
        $(this).toggleClass('active');
        $('#overlay').toggleClass('open');
    });

    $('.menu-main-menu-container').click(function () {
        $('#toggle').toggleClass('active');
        $('#overlay').toggleClass('open');
    });

    $(document).keydown(function (e) {

        if (e.keyCode == 27) {
            $('#toggle').toggleClass('active');
            $('#overlay').toggleClass('open');
        }
    });

    $('#roominfo').click(function () {

    });

});

//travelline search form in site header

(function (w) {
    var q = [
        ['setContext', 'TL-INT-sputnikhostel', 'ru'],
        ['embed', 'search-form', {container: 'tl-search-form'}]
    ];
    var t = w.travelline = (w.travelline || {}), ti = t.integration = (t.integration || {});
    ti.__cq = ti.__cq ? ti.__cq.concat(q) : q;
    if (!ti.__loader) {
        ti.__loader = true;
        var d = w.document, p = d.location.protocol, s = d.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = (p == 'https:' ? p : 'http:') + '//ibe.tlintegration.com/integration/loader.js';
        (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s);
    }
})(window);