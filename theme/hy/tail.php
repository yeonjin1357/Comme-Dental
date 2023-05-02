<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

?>

<footer id="footer">
  <div class="footer-1">
    <div class="inner-1400">
      <ul>
        <li><a href="<?php echo G5_URL ?>/privacy.php">
            <p class="nanumsq">개인정보 처리방침</p>
          </a></li>
        <li><a href="<?php echo G5_URL ?>/price1.php">
            <p class="nanumsq">비급여 진료비</p>
          </a></li>
        <li><a href="<?php echo G5_URL ?>/price2.php">
            <p class="nanumsq">제증명 수수료</p>
          </a></li>
      </ul>
    </div>
  </div>
  <div class="footer-2">
    <div class="inner-1400">
      <ul>
        <li>
          <div>
            <p class="nanumsq">꼼꼼치과의원 ㅣ
              대표 : 유경인 ㅣ 사업자등록번호 : 799-58-00514<br />
              주소 : 서울시 양천구 목동서로 383, 201호 ㅣ <br class="m_br">전화 : 02-2643-2879</p>
            <p class="copyright nanumsq mt20">Copyright ⓒ 2023 꼼꼼치과의원.<br class="m_br425">
              Design by 혜윰앤컴퍼니 All rights reserved</p>
          </div>
        </li>
        <li>
          <div class="footer-gnb">
            <ul>
              <?php if ($is_member) {  ?>
              <li>
                <!-- <a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php"> -->
                <a href="javascript:alert('현재 사용자 정보는 일시적으로 중단되었습니다. 불편을 드려 죄송합니다. 이용에 불편을 드린 점 양해 부탁드립니다.')">
                  <img src="<?php echo G5_THEME_IMG_URL ?>/common/member.svg" alt="멤버">
                  사용자
                </a>
              </li>
              <li><a href="<?php echo G5_BBS_URL ?>/logout.php">
                  <img src="<?php echo G5_THEME_IMG_URL ?>/common/logout.svg" alt="로그아웃">
                  로그아웃
                </a></li>
              <?php if ($is_admin) {  ?>
              <li class="tnb_admin"><a href="<?php echo G5_ADMIN_URL ?>">
                  <img src="<?php echo G5_THEME_IMG_URL ?>/common/setting.svg" alt="어드민">
                  관리자
                </a></li>
              <?php }  ?>
              <?php } else {  ?>
              <li><a href="<?php echo G5_BBS_URL ?>/login.php">
                  <img src="<?php echo G5_THEME_IMG_URL ?>/common/login.svg" alt="로그인">
                  로그인
                </a></li>
              <li><a href="<?php echo G5_BBS_URL ?>/register.php">
                  <img src="<?php echo G5_THEME_IMG_URL ?>/common/user.svg" alt="회원가입">
                  회원가입
                </a></li>
              <?php }  ?>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</footer>



<!-- 하단 끝 -->
<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>