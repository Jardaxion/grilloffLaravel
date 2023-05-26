ymaps.ready(() => {
    $('.ourShops__page-map').each(function() {
        let div = $(this);
        $.ajax({
            type: "get",
            url: `https://api.geoapify.com/v1/geocode/search?text=${encodeURIComponent($(this).attr('data-map'))}&apiKey=5bf7c03c1b924c62bc48b6e261a18b7e`,
            success: function (response) {
                init(div, response.features[0].geometry.coordinates);
            }
        })
    });
});  

function init(div, coord) {
    let map = new ymaps.Map(div.attr('id'), {
        center: [coord[1], coord[0]],
        zoom: 17
    })

    let mark = new ymaps.Placemark([coord[1], coord[0]]);

    map.geoObjects.add(mark);
}

