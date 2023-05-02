<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>

<div class="wrapper">

  <div class="banner">
    <div class="banner-img a1-banner"></div>
    <div class="banner-txt">
      <div>
        <h3><?php echo $menu1; ?></h3>
        <p><?php echo $menu1_6; ?></p>
      </div>
      <div class="menu_location">
        <ul>
          <li><i class="fa-sharp fa-solid fa-house"></i></li>
          <li><?php echo $menu1; ?></li>
          <li><?php echo $menu1_6; ?></li>
        </ul>
      </div>
    </div>
  </div>

  <section class="content map">
    <div class="inner-1200">
      <div class="title">
        <h4><?php echo $menu1_6; ?></h4>
        <p><?php echo $dental_name_en; ?></p>
      </div>
      <div class="kakao-map">
        <!-- * 카카오맵 - 지도퍼가기 -->
        <!-- 1. 지도 노드 -->
        <div id="daumRoughmapContainer1678067987506" class="root_daum_roughmap root_daum_roughmap_landing"></div>

        <!--
            2. 설치 스크립트
            * 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
          -->
        <script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

        <!-- 3. 실행 스크립트 -->
        <script charset="UTF-8">
        new daum.roughmap.Lander({
          "timestamp": "1678067987506",
          "key": "2dxh7",
          "mapWidth": "1200",
          "mapHeight": "400"
        }).render();
        </script>
      </div>
      <ul class="map-info">
        <li>
          <div class="icon">
            <i class="fa-solid fa-location-dot"></i>
          </div>
          <div class="text">
            <h6>주소</h6>
            <p>서울시 양천구 목동서로 383, 201호</p>
          </div>
        </li>
        <li>
          <div class="icon">
            <i class="fa-solid fa-square-parking"></i>
          </div>
          <div class="text">
            <h6>주차 안내</h6>
            <p>건물 내 주차 가능합니다.</p>
          </div>
        </li>
      </ul>
    </div>
  </section>

</div>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>