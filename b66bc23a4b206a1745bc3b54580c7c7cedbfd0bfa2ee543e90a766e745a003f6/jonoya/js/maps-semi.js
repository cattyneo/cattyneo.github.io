google.maps.event.addDomListener(window, 'load', initSeminar);
var marker = [],
    infoWindow = [];

function initSeminar() {
    init();

    var markerData = [
        {   // 1
            name: 'TKP大阪御堂筋カンファレンスセンター',
            lat: 34.6871273,
            lng: 135.5013042,
            address: '大阪府大阪市中央区淡路町3-5-13',
        }, { // 2
            name: 'シキボウホール　展示会場',
            lat: 34.6849859,
            lng: 135.5028653,
            address: '大阪府大阪市中央区備後町3-2-6',
        }, { // 3
            name: '大阪産業　創造館',
            lat: 34.6838028,
            lng: 135.5092036,
            address: '大阪市中央区本町1-4-5',
        }, { // 4
            name: '産業メディカルセミナールーム',
            lat: 34.6837583,
            lng: 135.5082509,
            address: '大阪府大阪市中央区本町1-5-6',
        }, { // 5
            name: 'アクセア貸会議室',
            lat: 34.6851192,
            lng: 135.5010821,
            address: '大阪市中央区備後町3-6-2',
        }, { // 6
            name: 'イオンコンパスENDO堺筋会議室',
            lat: 34.6849971,
            lng: 135.5067121,
            address: '大阪府大阪市中央区備後町1-7-3',
        }, { // 7
            name: 'NSE貸会議室　堺筋本町店',
            lat: 34.6840694,
            lng: 135.5061761,
            address: '大阪府大阪市 中央区安土町2丁目2-15',
        }, { // 8
            name: 'AP大阪淀屋橋',
            lat: 34.6918213,
            lng: 135.5031623,
            address: '大阪府大阪市中央区北浜3-2-25',
        }, { // 9
            name: 'AAホール本館',
            lat: 34.686675,
            lng: 135.503296,
            address: '大阪府大阪市中央区中央区淡路町3-2-9',
        }, { // 10
            name: '北浜ビジネス会館',
            lat: 34.6922296,
            lng: 135.5048565,
            address: '大阪府大阪市中央区北浜2-1-17',
        }, { // 11
            name: 'つるやホール',
            lat: 34.6833472,
            lng: 135.5017543,
            address: '大阪府大阪市中央区本町3-3-5',
        }, { // 12
            name: 'D-SPOT-ZERO/大阪セミナールーム',
            lat: 34.685425,
            lng: 135.504771,
            address: '大阪府大阪市中央区備後町2丁目4-10',
        }
    ];

    // マーカー毎の処理
    for (var i = 0; i < markerData.length; i++) {
        // マーカーの追加
        marker[i] = new google.maps.Marker({
            position: new google.maps.LatLng({lat: markerData[i]['lat'], lng: markerData[i]['lng']}), // マーカーを立てる位置を指定
            map: map, // マーカーを立てる地図を指定
        });

        // 吹き出しの追加
        infoWindow[i] = new google.maps.InfoWindow({
            noSuppress: true, // 表示する
            content: // 吹き出しに表示する内容
            '<div class="gmap-marker">' +
                '<b>' + markerData[i]['name'] + '</b><br>' +
                markerData[i]['address'] +
            '</div>',
        });
        markerEvent(map, marker[i], infoWindow[i]);
    }

    // 幅1000px以上ならズーム
    if ( $(window).innerWidth() >= 1000 ) {
        map.setZoom(map.getZoom() + 1);
    }
}

function mapClick(i) {
    google.maps.event.trigger(marker[i], "click");
}
