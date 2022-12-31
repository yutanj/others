<?php 
require('../../dbc.php');
header("Set-Cookie: cross-site-cookie=whatever; SameSite=None; Secure");
error_reporting(0);
//error_reporting(E_ALL & ~E_NOTICE);
$dbc = new Dbc;

$output_db_array = $dbc->getRequestAllOverJapan();
$DB_table_name_json = json_encode($DB_table_name, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);

?>
<!DOCTYPE html>
<html class="h-full" lang="ja">
<head>
  <meta charset="UTF-8">
  <title>福島県 | SUSURU TV. map</title>
  <!--<link rel="stylesheet" href="../src/styles_dev.css">-->
  <!--<link rel="stylesheet" href="tailwind.css">-->
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"/>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-dns-prefetch-control" content="on">
  <link rel="preconnect dns-prefetch" href="https://www.google.com/maps">
  <link rel="preconnect dns-prefetch" href="https://fonts.google.com/">
  <link rel="icon" href="../favicon.ico" id="favicon">
  <meta name="description" content="YouTuber SUSURU TV.さんが紹介したラーメン店を地図上から探すことができます。">
  <style>
    
.entry-btn-wrapper {
  
}
.entry-btn{
  margin: auto 0;
  position: relative;
  text-decoration: none;
  color: #1d1d1d;
  display: block;
  max-width: 240px;
  padding: 0.5rem;
  border-radius: 50px;
  border: 1px solid #1d1d1d;
  padding: 0.5rem 1rem;
  text-align: center;
  background-color: #fff;
  font-weight: bold;
  transition: transform .2s;
  &:active{
   transform: scale(.95);
  }
}
  </style>
</head>

<body class="font-sans h-full">
  <header class="flex pt-7 pb-2.5 pl-6 mb-7 border-b-2 md:pl-14">
    <div>
      <a href="../../index.php"><img src="../../header_icon.png" class="w-30 h-3 md:w-60 h-9"></a>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  </header>

  <div class="px-5 h-full">
  <h1 class="font-bold text-2xl pb-4">福島県のラーメン</h1>
  <div class="h-2/5 w-full mx-auto mb-4" id="map"></div>
  <!-- <div class='entry-btn-wrapper'>
    <a href="#" class="entry-btn">ボタン</a>
  </div> -->
  
  
  <h2 class="text-lg">SUSURU TV.で紹介された、福島県のラーメン店をまとめています。お店選びの参考に参考にしてみてください。（サムネイルをクリックすると動画が見れます）</p>
  
    <div id="ramen-shop-list">
    <div class="border-b-2">
        <div class="flex my-5">
            <a href="https://www.youtube.com/watch?v=XsdZcT4ZIj4"><img class="w-36 h-auto pt-2 pr-4 md:w-58 h-auto pr-4" src="http://img.youtube.com/vi/XsdZcT4ZIj4/mqdefault.jpg" alt=""></a>
            <h3 class="font-bold">ちばから郡山店 </h3>
        </div>
    </div>
    <div class="border-b-2">
        <div class="flex my-5">
            <a href="https://www.youtube.com/watch?v=PfJeRhxPJ8I"><img class="w-36 h-auto pt-2 pr-4 md:w-58 h-auto pr-4" src="http://img.youtube.com/vi/PfJeRhxPJ8I/mqdefault.jpg" alt=""></a>
            <h3 class="font-bold">とら食堂</h3>
        </div>
    </div>
    <div class="border-b-2">
        <div class="flex my-5">
            <a href="https://www.youtube.com/watch?v=iCgEhxeNc3g"><img class="w-36 h-auto pt-2 pr-4 md:w-58 h-auto pr-4" src="http://img.youtube.com/vi/iCgEhxeNc3g/mqdefault.jpg" alt=""></a>
            <h3 class="font-bold">喜一</h3>
        </div>
    </div>
    <div class="border-b-2">
        <div class="flex my-5">
            <a href="https://www.youtube.com/watch?v=K6iY_eNNQMk"><img class="w-36 h-auto pt-2 pr-4 md:w-58 h-auto pr-4" src="http://img.youtube.com/vi/K6iY_eNNQMk/mqdefault.jpg" alt=""></a>
            <h3 class="font-bold">まこと食堂 </h3>
        </div>
    </div>
    <div class="border-b-2">
        <div class="flex my-5">
            <a href="https://www.youtube.com/watch?v=BYvNDnDyff8"><img class="w-36 h-auto pt-2 pr-4 md:w-58 h-auto pr-4" src="http://img.youtube.com/vi/BYvNDnDyff8/mqdefault.jpg" alt=""></a>
            <h3 class="font-bold">食堂なまえ</h3>
        </div>
    </div>
    <div class="border-b-2">
        <div class="flex my-5">
            <a href="https://www.youtube.com/watch?v=-wG320d1mPQ"><img class="w-36 h-auto pt-2 pr-4 md:w-58 h-auto pr-4" src="http://img.youtube.com/vi/-wG320d1mPQ/mqdefault.jpg" alt=""></a>
            <h3 class="font-bold">桝はん</h3>
        </div>
    </div>
    <div class="border-b-2">
        <div class="flex my-5">
            <a href="https://www.youtube.com/watch?v=Lh5dzQ9q_ng"><img class="w-36 h-auto pt-2 pr-4 md:w-58 h-auto pr-4" src="http://img.youtube.com/vi/Lh5dzQ9q_ng/mqdefault.jpg" alt=""></a>
            <h3 class="font-bold">正月屋</h3>
        </div>
    </div>
    <div class="border-b-2">
        <div class="flex my-5">
            <a href="https://www.youtube.com/watch?v=FnUO3VsCdiA"><img class="w-36 h-auto pt-2 pr-4 md:w-58 h-auto pr-4" src="http://img.youtube.com/vi/FnUO3VsCdiA/mqdefault.jpg" alt=""></a>
            <h3 class="font-bold">若武者</h3>
        </div>
    </div>
    
    </div>
  <footer class="w-full text-center ">
    <div class="mt-8">
      <p class="text-sm pt-12 pb-2">© 2021 SUSURU TV. maps</p>
    </div>
  </footer>
    
</div>
  <script>
  const js_test = <?php echo $output_db_array; ?>;
  
  //paramでとってくるときはコメントアウト
  //秋田
  //37.4156818822283, 140.32200912214168
  var get_param_lat = 37.415681;
  var get_param_lng = 140.322009;
  
  const pref = <?php echo $DB_table_name_json; ?>;
  function initMap() {
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 8,
      center: { lat: parseFloat(get_param_lat), lng: parseFloat(get_param_lng)},
      gestureHandling: 'greedy',
      fullscreenControl: true
      /*styles: */
    });

    setMarkers(map);
    //getCurrentPosition(map);
    
  }
function setMarkers(map){
    var result99 = js_test.map(obj => {
      let rObj = {}
      rObj.lat = parseFloat(obj.latitude)
      rObj.lng = parseFloat(obj.longitude)
      //rObj.name_address = obj.name_address
      rObj.stores_name = obj.stores_name
      rObj.stores_address = obj.stores_address
      rObj.youtube_url = obj.youtube_url
      //rObj.video_id = obj.youtube_url.substring(32, 43);
      rObj.video_id = obj.video_id
      //console.log(rObj.video_id);
      return rObj
    });
    

    const markers = result99.map((location, i) => {
      const marker = new google.maps.Marker({
      position: {lat: location.lat, lng: location.lng},
    });
    const infoWindow = new google.maps.InfoWindow({
      maxWidth: 200,
      disableAutoPan: true,
    });
    marker.addListener("click", () => {
      infoWindow.setContent(`<div id="infowindow"><a href= "${location.youtube_url}" target="_blank" rel="noopener noreferrer"><img class="w-full mr-1" src="http://img.youtube.com/vi/${location.video_id}/mqdefault.jpg"></a><p class="text-lg font-bold mt-1">${location.stores_name}</p><p class="text-md">${location.stores_address}</p><a href= "${location.youtube_url}" target="_blank" rel="noopener noreferrer" class=infowindow_url>動画を見る</a></div>`);
      infoWindow.open(map, marker);
    });
    return marker;
  });
    //setMarkerListener(markers, location.name_address, location.youtube_url);
    new markerClusterer.MarkerClusterer({ map, markers });
}


    function changeMarkerSize(marker) {
      // ズーム値変更時
      map.addListener('zoom_changed', function() {
        //console.log('ズーム値:', map.getZoom());
        // 20未満の場合はマーカーサイズ縮小
        if(map.getZoom() >= 13 && map.getZoom() <= 15) {
          // マーカーのサイズ変更
          marker.setIcon({
            url: 'beachflag.png',
            scaledSize : new google.maps.Size(15, 24)
          });
        // 12以上の場合はマーカーサイズを戻す
      } else if (map.getZoom() <= 12){
        // マーカーのサイズ変更
        marker.setIcon({
          url: 'beachflag.png',
          scaledSize : new google.maps.Size(10, 16)
        });
      } else {
            marker.setIcon('beachflag.png');
        }
    });
  }

//}
//ボタンをクリックしたら現在地を取得し座標を返す

// function getCurrentPosition(map) {
//   var get_cp_btn = document.getElementById("get_current_position");
//   get_cp_btn.addEventListener('click', function() {
//     if (navigator.geolocation) {
//       // 現在地を取得
//       navigator.geolocation.getCurrentPosition(
//         // 取得成功した場合
//         function(position) {
//           // 緯度・経度を変数に格納
//           var mapLatLng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
//           map.setZoom(16);
//           map.setCenter(mapLatLng);
//         },
//         // 取得失敗した場合
//         function(error) {
//           // エラーメッセージを表示
//           switch(error.code) {
//             case 1: // PERMISSION_DENIED
//             alert("位置情報の利用が許可されていません");
//             break;
//             case 2: // POSITION_UNAVAILABLE
//             alert("現在位置が取得できませんでした");
//             break;
//             case 3: // TIMEOUT
//             alert("タイムアウトになりました");
//             break;
//             default:
//             alert("その他のエラー(エラーコード:"+error.code+")");
//             break;
//           }
//         }
//       );
//       // Geolocation APIに対応していない
//     } else {
//       alert("この端末では位置情報が取得できません");
//     }
//   })
// }

</script>
      
  <script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyDodZcfXqmf6oAGQs4wTLzCWz2mTwZY-qE&callback=initMap"></script>


</body>
</html>