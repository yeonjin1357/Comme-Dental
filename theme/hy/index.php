<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_CAPTCHA_PATH.'/captcha.lib.php');
include_once(G5_THEME_PATH.'/menu.php');
?>


<!-- fullpage.js를 사용해서 5개짜리 슬라이드 제작 -->
<div id="fullpage">
  <div class="section" data-index="1">
    <div class="content area1">
      <!-- 슬라이드 4개 제작 -->
      <div class="swiper-container">
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <div class="slide-content">
              <div class="slide-img">
                <div></div>
              </div>
              <div class="slide-text">
                <h1>환자에 대한 사랑으로
                  의술이 아닌 <span class="nanumsqeb">인술</span>을 펼칩니다.
                </h1>
                <p><span class="x1_5">항상 환자분들의 <br class="m_br">웃음과 마주하고 싶습니다.</span></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-content">
              <div class="slide-img">
                <div></div>
              </div>
              <div class="slide-text">
                <h1><span class="nanumsqeb">건강한 미소</span>를 심어드리기 위해
                  끊임없이 <span class="nanumsqeb">연구</span>하고 <span class="nanumsqeb">노력</span>합니다.
                </h1>
                <p><span class="x1_5">비결은 18년의 <br class="m_br">임상경험과 노력입니다.</span></p>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="slide-content">
              <div class="slide-img">
                <div></div>
              </div>
              <div class="slide-text">
                <h1>환자에게 꼭 필요한 진료만을,
                  <span class="nanumsqeb">1:1 맞춤 치료</span>를 제공합니다.
                </h1>
                <p><span class="x1_5">개인의 상태에 따라 <br class="m_br">더 좋은 치료를 계획합니다.</span></p>
              </div>
            </div>
          </div>

        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <article class="mouse_scroll">
      <div class="mouse">
        <div class="wheel"></div>
      </div>
      <div>
        <span class="m_scroll_arrows m_scroll_arrows_one"></span>
        <span class="m_scroll_arrows m_scroll_arrows_two"></span>
      </div>
    </article>
  </div>
  <div class="section" data-index="2">
    <div class="content area2">
      <ul class="treatment">
        <!-- 4개의 구역으로 나눠서 배경이미지를 적용할거야 -->
        <li class="treatment1">
          <div class="treatment-content">
            <div class="treatment-img">
              <div></div>
            </div>
            <div class="treatment-text">
              <h3>임플란트</h3>
              <a href="#"></a>
            </div>
          </div>
        </li>
        <li class="treatment2">
          <div class="treatment-content">
            <div class="treatment-img">
              <div></div>
            </div>
            <div class="treatment-text">
              <h3>치아교정</h3>
              <a href="#"></a>
            </div>
          </div>
        </li>
        <li class="treatment3">
          <div class="treatment-content">
            <div class="treatment-img">
              <div></div>
            </div>
            <div class="treatment-text">
              <h3>라미네이트</h3>
              <a href="#"></a>
            </div>
          </div>
        </li>
        <li class="treatment4">
          <div class="treatment-content">
            <div class="treatment-img">
              <div></div>
            </div>
            <div class="treatment-text">
              <h3>보철치료</h3>
              <a href="#"></a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class=" section" data-index="3">
    <div class="content area3">
      <ul class="doctor">
        <li class="doctor-cover">
          <div></div>
        </li>
        <li class="doctor-txt">
          <ul>
            <li>
              <div>
                <p class="logo-circle scandia">COMME&nbsp; COMME&nbsp; DENTAL&nbsp; CLINICㅤ</p>
              </div>
            </li>
            <li>
              <div>
                <h5><?php echo $dental_name_ko; ?> 의료진 소개</h5>
                <p>믿을 수 있는 <?php echo $dental_name_ko; ?> 전문 의료진과 함께 하세요.</p>
                <a href="<?php echo G5_URL ?>/a2.php">의료진 소개 보기</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <div class="section" data-index="4">
    <div class="content area4">
      <ul class="time">
        <li class="time-cover">
          <div></div>
        </li>
        <li class="time-txt">
          <div>
            <div class="time-title">
              <h5><?php echo $dental_name_ko; ?> 진료 안내</h5>
              <p><?php echo $dental_name_ko; ?>에 방문하여 최고 수준의 진료를 받아보세요.</p>
            </div>
            <div class="time-list">
              <h5 class="point-color">진료시간</h5>
              <ul>
                <li>
                  <p>월 수 금</p>
                  <p>AM 09:00 ~ PM 06:00</p>
                </li>
                <li>
                  <p>화 목</p>
                  <p>AM 09:00 ~ PM 08:00</p>
                </li>
                <li>
                  <p>토 요 일</p>
                  <p>AM 09:00 ~ PM 02:00</p>
                </li>
                <li>
                  <p>점 심 시 간</p>
                  <p>PM 01:00 ~ PM 02:00</p>
                </li>
                <div class="notice">
                  <p><span class="x0_8">- 토요일은 점심시간 없이 진료합니다.</span></p>
                  <p><span class="x0_8">- 일요일, 공휴일은 휴진입니다.</span></p>
                </div>
              </ul>
            </div>
            <div class="call">

            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="section" data-index="5">
    <div class="content area5">
      <ul class="map">
        <li class="map-txt">
          <div>
            <div class="map-title">
              <h5><?php echo $dental_name_ko; ?> 오시는 길</h5>
              <p><?php echo $dental_name_ko; ?>에 방문하여 최고 수준의 진료를 받아보세요.</p>
            </div>
            <div class="map-address">
              <h5>치과 주소</h5>
              <p>서울시 양천구 목동서로 383, 201호</p>
            </div>
            <div class="map-address">
              <h5>주차장 주소</h5>
              <p>서울시 양천구 목동서로 383</p>
            </div>
            <div class="map-address">
              <h5>전화번호</h5>
              <p>02 - 2643 - 2879</p>
            </div>
          </div>
        </li>
        <li class="kakao-map">
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
            "mapWidth": "100%",
            "mapHeight": "100%"
          }).render();
          </script>
        </li>

      </ul>
    </div>
  </div>
  <div class="section footer-sec" data-index="6">
    <?php
      include_once(G5_THEME_PATH.'/tail.php');
    ?>
  </div>
</div>
<ul class="custom-nav">
  <li><a href="#section1">상단</a></li>
  <li><a href="#section2">특별함</a></li>
  <li><a href="#section3">의료진</a></li>
  <li><a href="#section4">진료 안내</a></li>
  <li><a href="#section5">오시는 길</a></li>
  <li><a href="#section6">하단</a></li>
</ul>
</body>

</html>