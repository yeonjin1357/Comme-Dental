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
        <p><?php echo $menu1_2; ?></p>
      </div>
      <div class="menu_location">
        <ul>
          <li><i class="fa-sharp fa-solid fa-house"></i></li>
          <li><?php echo $menu1; ?></li>
          <li><?php echo $menu1_2; ?></li>
        </ul>
      </div>
    </div>
  </div>

  <section class="content dentist dentist1">
    <div class="inner-1200">
      <div class="title">
        <h4><?php echo $menu1_2; ?></h4>
        <p><?php echo $dental_name_en; ?></p>
      </div>
      <ul class="dentist-box flex">
        <li class="block-2 dentist-img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
          <div>
            <img src="<? echo G5_THEME_IMG_URL; ?>/sub/doctor_01.png" alt="의료진 이미지 1">
          </div>
        </li>
        <li class="block-2 dentist-txt" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="500">
          <div>
            <div class="tit">
              <h5><span class="x1_6">최연진</span> 대표원장</h5>
              <p>"환자를 진심으로 이해하고 결과로 책임집니다."</p>
            </div>
            <ul class="profile">
              <li>보건복지부 인증 치과보존과 전문의</li><br>

              <li>연세대학교 치과대학 석사</li>
              <li>연세대학교 치과병원 치과보철과 전공의</li><br>

              <li>대한치과보존학회 정회원</li>
              <li>대한근관치료학회 정회원</li>
              <li>대한통합치과학회 정회원</li>
              <li>대한턱관절교합학회 정회원</li><br>

              <li>現) 연세대학교 치과대학 외래교수</li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="content dentist dentist2">
    <div class="inner-1200">
      <ul class="dentist-box flex">
        <li class="block-2 dentist-img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
          <div>
            <img src="<? echo G5_THEME_IMG_URL; ?>/sub/doctor_02.png" alt="의료진 이미지 2">
          </div>
        </li>
        <li class="block-2 dentist-txt" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="500">
          <div>
            <div class="tit">
              <h5><span class="x1_6">박준희</span> 대표원장</h5>
              <p>"누구보다 섬세한 시술로 편안하게 치료해드리겠습니다."</p>
            </div>
            <ul class="profile">
              <li>보건복지부 인증 치과보존과 전문의</li><br>

              <li>연세대학교 치과대학 석사</li>
              <li>연세대학교 치과병원 치과보철과 전공의</li><br>

              <li>대한치과보존학회 정회원</li>
              <li>대한근관치료학회 정회원</li>
              <li>대한통합치과학회 정회원</li>
              <li>대한턱관절교합학회 정회원</li><br>

              <li>現) 연세대학교 치과대학 외래교수</li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </section>

  <section class="content dentist dentist3">
    <div class="inner-1200">
      <ul class="dentist-box flex">
        <li class="block-2 dentist-img" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
          <div>
            <img src="<? echo G5_THEME_IMG_URL; ?>/sub/doctor_03.png" alt="의료진 이미지 1">
          </div>
        </li>
        <li class="block-2 dentist-txt" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="500">
          <div>
            <div class="tit">
              <h5><span class="x1_6">이주환</span> 원장</h5>
              <p>"진심을 다하는 진료로 당신의 미소를 책임집니다."</p>
            </div>
            <ul class="profile">
              <li>보건복지부 인증 치과보존과 전문의</li><br>

              <li>연세대학교 치과대학 석사</li>
              <li>연세대학교 치과병원 치과보철과 전공의</li><br>

              <li>대한치과보존학회 정회원</li>
              <li>대한근관치료학회 정회원</li>
              <li>대한통합치과학회 정회원</li>
              <li>대한턱관절교합학회 정회원</li><br>

              <li>現) 연세대학교 치과대학 외래교수</li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </section>

</div>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>