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
        <p><?php echo $menu1_4; ?></p>
      </div>
      <div class="menu_location">
        <ul>
          <li><i class="fa-sharp fa-solid fa-house"></i></li>
          <li><?php echo $menu1; ?></li>
          <li><?php echo $menu1_4; ?></li>
        </ul>
      </div>
    </div>
  </div>

  <section class="content gallery">
    <div class="inner-1200">
      <div class="title">
        <h4><?php echo $menu1_4; ?></h4>
        <p><?php echo $dental_name_en; ?></p>
      </div>
      <div id="gallery">
        <div class="swiper-container gallery-top">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/1.jpg" alt="인테리어 이미지 1">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/2.jpg" alt="인테리어 이미지 2">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/3.jpg" alt="인테리어 이미지 3">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/4.jpg" alt="인테리어 이미지 4">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/5.jpg" alt="인테리어 이미지 5">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/6.jpg" alt="인테리어 이미지 6">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/7.jpg" alt="인테리어 이미지 7">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/8.jpg" alt="인테리어 이미지 8">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/9.jpg" alt="인테리어 이미지 9">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/10.jpg" alt="인테리어 이미지 10">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/11.jpg" alt="인테리어 이미지 11">
            </div>
          </div>
          <!-- Add Arrows -->
          <div class="swiper-button-prev"><i class="fas fa-arrow-left"></i></div>
          <div class="swiper-button-next"><i class="fas fa-arrow-right"></i></div>
        </div>
        <div thumbsSlider="" class="swiper-container gallery-thumbs">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/1.jpg" alt="인테리어 이미지 1">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/2.jpg" alt="인테리어 이미지 2">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/3.jpg" alt="인테리어 이미지 3">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/4.jpg" alt="인테리어 이미지 4">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/5.jpg" alt="인테리어 이미지 5">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/6.jpg" alt="인테리어 이미지 6">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/7.jpg" alt="인테리어 이미지 7">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/8.jpg" alt="인테리어 이미지 8">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/9.jpg" alt="인테리어 이미지 9">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/10.jpg" alt="인테리어 이미지 10">
            </div>
            <div class="swiper-slide">
              <img src="<? echo G5_THEME_IMG_URL; ?>/gallery/11.jpg" alt="인테리어 이미지 11">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


</div>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>