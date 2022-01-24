var map;
DG.then(function () {
    map = DG.map('map', {
        center: [53.198623507282086, 45.02078191919667],
        zoom: 13
    });

    var popup1 = DG.popup({
        maxWidth: 480,
        maxHeight: 400,
    }).setContent('<img src="../img/1map.jpg">' +
        '<a class="popup_link">Музей одной картины им. Г.В. Мясникова</a>');
    DG.marker([53.18359321426105, 45.016046085924536]).addTo(map).bindPopup(popup1);

    var popup2 = DG.popup({
        maxWidth: 350,
        maxHeight: 300,
    }).setContent('<img src="../img/2map.jpg">' +
        '<a class="popup_link">Пензенский государственный краеведческий музей</a>');
    DG.marker([53.18646706854202, 45.00744165632824]).addTo(map).bindPopup(popup2);

    var popup3 = DG.popup({
        maxWidth: 300,
        maxHeight: 300,
    }).setContent('<img src="../img/3map.jpg">' +
        '<a class="popup_link">Музей Сценического Искусства им. В. Э. Мейерхольда</a>');
    DG.marker([53.194731162944095, 45.01452806296041]).addTo(map).bindPopup(popup3);

    var popup4 = DG.popup({
        maxWidth: 380,
        maxHeight: 300,
    }).setContent('<img src="../img/4map.jpg">' +
        '<a class="popup_link">Памятник Первопоселенец</a>');
    DG.marker([53.18343228348369, 45.016309546926934]).addTo(map).bindPopup(popup4);

    var popup5 = DG.popup({
        maxWidth: 450,
        maxHeight: 340,
    }).setContent('<img src="../img/5map.jpg">' +
        '<a class="popup_link">Свето-музыкальный фонтан Спутник</a>');
    DG.marker([53.13957912427541, 45.050546512899594]).addTo(map).bindPopup(popup5);

});
