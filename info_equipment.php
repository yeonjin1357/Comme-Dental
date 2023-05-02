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
        <p><?php echo $menu1_3; ?></p>
      </div>
      <div class="menu_location">
        <ul>
          <li><i class="fa-sharp fa-solid fa-house"></i></li>
          <li><?php echo $menu1; ?></li>
          <li><?php echo $menu1_3; ?></li>
        </ul>
      </div>
    </div>
  </div>

  <section class="content equipment">
    <div class="inner-1200">
      <div class="title">
        <h4><?php echo $menu1_3; ?></h4>
        <p><?php echo $dental_name_en; ?></p>
      </div>
    </div>
  </section>

</div>

<?php 
include_once(G5_THEME_PATH.'/tail.php');
?>