<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');

if(defined('_INDEX_')) {
    $idx_nav = ' navigation';
    $menu_href = '';
} else {
    $idx_nav = '';
    $menu_href = G5_URL;
}

?>
<!-- 이벤트 게시판 -->

<header>
  <div class="head-wrap">
    <div class="head-logo">
      <div>
        <a href="<?php echo G5_URL ?>/index.php">
          <img src="<? echo G5_THEME_IMG_URL; ?>/common/logo-w.svg" alt="로고" crossorigin="anonymous">
        </a>
      </div>
    </div>
    <div class="menu">
      <ul>
        <li>
          <a href="<?php echo G5_URL ?><?php echo $link1; ?>" target="_self"><?php echo $menu1; ?></a>
          <ul class="sub-menu">
            <li><a href="<?php echo G5_URL ?><?php echo $link1_1; ?>" target="_self"><?php echo $menu1_1; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link1_2; ?>" target="_self"><?php echo $menu1_2; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link1_3; ?>" target="_self"><?php echo $menu1_3; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link1_4; ?>" target="_self"><?php echo $menu1_4; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link1_5; ?>" target="_self"><?php echo $menu1_5; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link1_6; ?>" target="_self"><?php echo $menu1_6; ?></a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo G5_URL ?><?php echo $link2; ?>" target="_self"><?php echo $menu2; ?></a>
          <ul class="sub-menu">
            <li><a href="<?php echo G5_URL ?><?php echo $link2_1; ?>" target="_self" target="_self"><?php echo $menu2_1; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link2_2; ?>" target="_self" target="_self"><?php echo $menu2_2; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link2_3; ?>" target="_self" target="_self"><?php echo $menu2_3; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link2_4; ?>" target="_self" target="_self"><?php echo $menu2_4; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link2_5; ?>" target="_self" target="_self"><?php echo $menu2_5; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link2_6; ?>" target="_self" target="_self"><?php echo $menu2_6; ?></a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo G5_URL ?><?php echo $link3; ?>" target="_self"><?php echo $menu3; ?></a>
          <ul class="sub-menu">
            <li><a href="<?php echo G5_URL ?><?php echo $link3_1; ?>" target="_self"><?php echo $menu3_1; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link3_2; ?>" target="_self"><?php echo $menu3_2; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link3_3; ?>" target="_self"><?php echo $menu3_3; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link3_4; ?>" target="_self"><?php echo $menu3_4; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link3_5; ?>" target="_self"><?php echo $menu3_5; ?></a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo G5_URL ?><?php echo $link4; ?>" target="_self"><?php echo $menu4; ?></a>
          <ul class="sub-menu">
            <li><a href="<?php echo G5_URL ?><?php echo $link4_1; ?>" target="_self"><?php echo $menu4_1; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link4_2; ?>" target="_self"><?php echo $menu4_2; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link4_3; ?>" target="_self"><?php echo $menu4_3; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link4_4; ?>" target="_self"><?php echo $menu4_4; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link4_5; ?>" target="_self"><?php echo $menu4_5; ?></a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo G5_URL ?><?php echo $link5; ?>" target="_self"><?php echo $menu5; ?></a>
          <ul class="sub-menu">
            <li><a href="<?php echo G5_URL ?><?php echo $link5_1; ?>" target="_self"><?php echo $menu5_1; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link5_2; ?>" target="_self"><?php echo $menu5_2; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link5_3; ?>" target="_self"><?php echo $menu5_3; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link5_4; ?>" target="_self"><?php echo $menu5_4; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link5_5; ?>" target="_self"><?php echo $menu5_5; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link5_6; ?>" target="_self"><?php echo $menu5_6; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link5_7; ?>" target="_self"><?php echo $menu5_7; ?></a></li>
            <li><a href="<?php echo G5_URL ?><?php echo $link5_8; ?>" target="_self"><?php echo $menu5_8; ?></a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="search">
      <div class="search-icon">
        <!-- font-awesome을 통해서 search svg 하얀색 이미지 삽입 -->
        <i class="fas fa-search"></i>
      </div>

      <!-- search i 클릭시 나타나는 search-form -->
      <!-- search_form.php 불러오기 -->
      <?php include(G5_THEME_PATH.'/search_form.php'); ?>
      <!-- search i 클릭시 나타나는 search-form -->
    </div>
    <div class="mobile-menu">
      <!-- 햄버거 메뉴 -->
      <div class="menu-icon">
        <!-- .menu-icon-bar -->
        <div class="menu-icon-bar"></div>
        <div class="menu-icon-bar"></div>
        <div class="menu-icon-bar"></div>
      </div>

      <!-- 햄버거 메뉴 클릭시 나타나는 mobile-menu -->
      <div class="mobile-menu-wrap">
        <!-- <div class="mobile-menu-logo">
          <img src="<? echo G5_THEME_IMG_URL; ?>/common/logo.svg" alt="">
        </div> -->
        <div class="mobile-search">
          <!-- search_form.php 불러오기 -->
          <?php include(G5_THEME_PATH.'/search_form.php'); ?>
        </div>
        <div class="mobile-menu-list">
          <ul>
            <li>
              <a><?php echo $menu1; ?></a>
              <ul class="mobile-sub-menu">
                <li><a href="<?php echo G5_URL ?><?php echo $link1_1; ?>" target="_self"><?php echo $menu1_1; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link1_2; ?>" target="_self"><?php echo $menu1_2; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link1_3; ?>" target="_self"><?php echo $menu1_3; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link1_4; ?>" target="_self"><?php echo $menu1_4; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link1_5; ?>" target="_self"><?php echo $menu1_5; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link1_6; ?>" target="_self"><?php echo $menu1_6; ?></a></li>
              </ul>
            </li>
            <li>
              <a><?php echo $menu2; ?></a>
              <ul class="mobile-sub-menu">
                <li><a href="<?php echo G5_URL ?><?php echo $link2_1; ?>" target="_self" target="_self"><?php echo $menu2_1; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link2_2; ?>" target="_self" target="_self"><?php echo $menu2_2; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link2_3; ?>" target="_self" target="_self"><?php echo $menu2_3; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link2_4; ?>" target="_self" target="_self"><?php echo $menu2_4; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link2_5; ?>" target="_self" target="_self"><?php echo $menu2_5; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link2_6; ?>" target="_self" target="_self"><?php echo $menu2_6; ?></a></li>
              </ul>
            </li>
            <li>
              <a><?php echo $menu3; ?></a>
              <ul class="mobile-sub-menu">
                <li><a href="<?php echo G5_URL ?><?php echo $link3_1; ?>" target="_self"><?php echo $menu3_1; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link3_2; ?>" target="_self"><?php echo $menu3_2; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link3_3; ?>" target="_self"><?php echo $menu3_3; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link3_4; ?>" target="_self"><?php echo $menu3_4; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link3_5; ?>" target="_self"><?php echo $menu3_5; ?></a></li>
              </ul>
            </li>
            <li>
              <a><?php echo $menu4; ?></a>
              <ul class="mobile-sub-menu">
                <li><a href="<?php echo G5_URL ?><?php echo $link4_1; ?>" target="_self"><?php echo $menu4_1; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link4_2; ?>" target="_self"><?php echo $menu4_2; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link4_3; ?>" target="_self"><?php echo $menu4_3; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link4_4; ?>" target="_self"><?php echo $menu4_4; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link4_5; ?>" target="_self"><?php echo $menu4_5; ?></a></li>
              </ul>
            </li>
            <li>
              <a><?php echo $menu5; ?></a>
              <ul class="mobile-sub-menu">
                <li><a href="<?php echo G5_URL ?><?php echo $link5_1; ?>" target="_self"><?php echo $menu5_1; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link5_2; ?>" target="_self"><?php echo $menu5_2; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link5_3; ?>" target="_self"><?php echo $menu5_3; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link5_4; ?>" target="_self"><?php echo $menu5_4; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link5_5; ?>" target="_self"><?php echo $menu5_5; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link5_6; ?>" target="_self"><?php echo $menu5_6; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link5_7; ?>" target="_self"><?php echo $menu5_7; ?></a></li>
                <li><a href="<?php echo G5_URL ?><?php echo $link5_8; ?>" target="_self"><?php echo $menu5_8; ?></a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>

<?php 
include_once('./_common.php'); 
include_once(G5_LIB_PATH.'/latest.lib.php'); 
?>