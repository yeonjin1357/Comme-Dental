<?php
include_once('./_common.php');
include_once(G5_THEME_PATH.'/menu.php');
?>

<div class="wrapper">

  <div class="banner">
    <div class="banner-img b1-banner"></div>
    <div class="banner-txt">
      <div>
        <h3><?php echo $menu2; ?></h3>
        <p><?php echo $menu2_2; ?></p>
      </div>
      <div class="menu_location">
        <ul>
          <li><i class="fa-sharp fa-solid fa-house"></i></li>
          <li><?php echo $menu2; ?></li>
          <li><?php echo $menu2_2; ?></li>
        </ul>
      </div>
    </div>
  </div>

  <section class="content imp-custom-area1 compare-table">
    <div class="inner-1200">
      <div class="title">
        <h4><?php echo $menu2_2; ?></h4>
        <p><?php echo $dental_name_en; ?></p>
      </div>
      <div class="detail">
        <p class="sub-txt">치아뿌리에 해당하는 <br class="s_br">임플란트 인공치근과 치아머리에 해당하는
          보철물을 이어주는 부분을 <br class="s_br"><span class="ebold">어버트먼트(abutment, 지대주)</span>라고 합니다.

          이 부분은 잇몸과 직접적으로 맞닿아 있어 <br class="s_br">염증이 쉽게 발생하며 가장 많은 힘을 받습니다.
          획일화되어 제작되는 기성지대주로는 환자 개개인의 잇몸과 치아의 형태를 재현하기가 어렵습니다.</p>
      </div>
      <table data-aos="fade-up" data-aos-duration="1500" data-aos-delay="0">
        <thead>
          <tr>
            <td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_01.jpg" alt="기본 임플란트"></td>
            <td></td>
            <td><img src="<? echo G5_THEME_IMG_URL; ?>/sub/imp_custom_02.jpg" alt="맞춤 임플란트"></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>일반 어버트먼트</td>
            <td>종류</td>
            <td>맞춤 어버트먼트</td>
          </tr>
          <tr>

            <td>얇은 지지대로 인해 <br class="m_br">파손 위험이 높음</td>
            <td>파손 위험</td>
            <td>두꺼운 지지대로 인해 <br class="m_br">파손 위험이 낮음</td>
          </tr>
          <tr>
            <td>잇몸과 지대주가 <br class="m_br">맞닿는 부위가 들뜸</td>
            <td>정확도</td>
            <td>잇몸과 지대주가 <br class="m_br">정확히 밀착</td>
          </tr>
          <tr>
            <td>이물질 끼임으로 인한
              염증 발생 가능성 높음
            </td>
            <td>잇몸 염증</td>
            <td>이물질 끼임이 적어
              염증 발생 가능성 낮음
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>


</div>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>