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
        <p><?php echo $menu1_1; ?></p>
      </div>
      <div class="menu_location">
        <ul>
          <li><i class="fa-sharp fa-solid fa-house"></i></li>
          <li><?php echo $menu1; ?></li>
          <li><?php echo $menu1_1; ?></li>
        </ul>
      </div>
    </div>
  </div>

  <section class="content greeting">
    <div class="inner-1200">
      <div class="title">
        <h4><?php echo $menu1_1; ?></h4>
        <p><?php echo $dental_name_en; ?></p>
      </div>
      <div class="greeting-img">
        <img src="<? echo G5_THEME_IMG_URL; ?>/sub/greeting_01.jpg" alt="대표원장 이미지">
      </div>
      <div class="detail" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
        <h6>MESSAGE</h6>
        <h4><span class="ebold">안녕하세요.
            홈페이지를 찾아 주신 고객 여러분께 감사드립니다.</span></h4>
        <p class="sub-txt">꼼꼼치과는 환자분들의 입 안 건강을 완벽하게 유지하기 위해 최선을 다하고 있습니다.
          매일 빛나는 건강한 미소를 유지하기 위해
          꼼꼼한 검진과 정밀한 치료를 통해 환자분들의 구강 건강 관리를 전문적으로 해드리며,
          항상 환자분들의 입장에서 생각하여 정성스런 서비스를 제공합니다.

          또한, 최신 치과 장비와 최고의 의료진을 통해 최상의 결과를 얻을 수 있도록 노력하고 있습니다.
          환자분들이 치료를 받는 과정에서 불안감을 느끼지 않도록 친절하고 따뜻한 서비스를 제공하며,
          치료 후에도 장기간 건강한 입 안을 유지할 수 있도록 관리해드립니다.

          저희와 함께 건강한 미소를 유지하고, 행복한 인생을 살아가기 위해 꼼꼼치과가 항상 곁에 있겠습니다.
          언제든지 치과 건강에 관한 문의나 상담을 환영합니다.

          우리 가족 주치의로써 장기적인 예후를 생각하는 치료를 약속드리겠습니다.

          감사합니다.

        <div class="name">
          <article>꼼꼼치과 대표원장</article> <span class="loveletter">최연진</span>
        </div>

        </p>
      </div>
    </div>
  </section>



</div>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>