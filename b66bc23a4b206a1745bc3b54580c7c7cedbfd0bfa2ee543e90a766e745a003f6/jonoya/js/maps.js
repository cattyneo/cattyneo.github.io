google.maps.event.addDomListener(window, 'load', init);

var map;
var currentInfoWindow = null;	//最後に開いた情報ウィンドウを記憶

function init() {
    // 各マーカーの名前・緯度・経度を定義
    var markerData = [
        {
            name: 'じょうのや本店',
            lat: 34.68707,
            lng: 135.50183,
            icon: 'img/icon-honten.png',
            address: '〒541-0047 大阪府大阪市中央区淡路町3-4-13 東和ビルB1',
        }, {
            name: 'じょうのや北浜店',
            lat: 34.6918,
            lng: 135.50291,
            icon: 'img/icon-kitahama.png',
            address: '〒541-0041 大阪府大阪市中央区北浜3-2-18 センターホテル大阪B1',
        }, {
            name: 'じぇいず',
            lat: 34.68405,
            lng: 135.50615,
            icon: 'img/icon-js.png',
            address: '〒541-0052 大阪府大阪市中央区安土町2-2-15 堺筋本町駅前ビルB1',
        }
    ];

    // 地図の作成
    var mapElement = document.getElementById('gmap');
    var centerOffsetY = 0.0016;//0.0022;
    var mapOptions = {
        center: new google.maps.LatLng({lat: markerData[0]['lat'] + centerOffsetY, lng: markerData[0]['lng']}), // 地図の中心を指定
        zoom: 15,                       // ズーム量を指定
        zoomControl: true,              // ズーム調整を表示するか
        disableDoubleClickZoom: true,   // ダブルクリックでのズームを無効
        mapTypeControl : false,         // 地図タイプを表示するか
        scaleControl: true,             // 長さの基準を表示するか
        scrollwheel: false,             // 地図上でホイール回転して倍率調整可能か
        streetViewControl: true,        // ストリートビューを表示するか
        draggable: true,                // ドラッグ可能か
    };
    map = new google.maps.Map(mapElement, mapOptions);// global

    // 地図の中央寄せ
    google.maps.event.addDomListener(window, "resize", function() {
      var center = map.getCenter();
      google.maps.event.trigger(map, "resize");
      map.setCenter(center);
    });

    // デフォルトの情報ウィンドウを非表示
    (function fixInfoWindow() {
        var set = google.maps.InfoWindow.prototype.set;
        google.maps.InfoWindow.prototype.set = function(key, val) {
            if (key === "map") {
                if (! this.get("noSuppress")) {
                    return;
                }
            }
            set.apply(this, arguments);
        }
    })();

    // マーカー毎の処理
    var marker = [],
        infoWindow = [];
    for (var i = 0; i < markerData.length; i++) {
        // マーカーの追加
        marker[i] = new google.maps.Marker({
            position: new google.maps.LatLng({lat: markerData[i]['lat'], lng: markerData[i]['lng']}), // マーカーを立てる位置を指定
            map: map, // マーカーを立てる地図を指定
            opacity: 0.9,
            icon: {
                url: markerData[i]['icon'],
                scaledSize: new google.maps.Size(55, 62),
            },
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

    // 地図スタイルのカスタマイズ
    var styles = [
        {
            stylers: [
                { hue: '#b6a580' },
                { saturation: '-20'},
            ]
        }
    ];
    var styledMap = new google.maps.StyledMapType(styles,
        { name: 'じょうのや' });// 地図のタイトルを指定
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
}

// マーカークリック時のイベント
function markerEvent(map, marker, infoWindow) {
        //情報ウィンドウを開く
        marker.addListener('click', function(){
            //先に開いた情報ウィンドウがあれば、closeする
            if (currentInfoWindow) {
                currentInfoWindow.close();
            }
            infoWindow.open(map, marker);

            currentInfoWindow = infoWindow;
        });
}
