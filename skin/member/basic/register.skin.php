<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>

<link rel="stylesheet" href="<? echo G5_SKIN_URL; ?>/member/basic/style.css">


<div class="wrapper">

  <div class="banner">
    <div class="banner-img e1-banner"></div>
    <div class="banner-txt">
      <div>
        <h3>회원가입</h3>
        <p><?php echo $dental_name_en; ?></p>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="inner-1200">
      <div class="title">
        <h4>회원가입</h4>
        <p><?php echo $dental_name_en; ?></p>
      </div>
    </div>
  </section>

  <section class="content p0">
    <div class="inner-1200">

      <!-- 회원가입약관 동의 시작 { -->
      <div class="register">
        <form name="fregister" id="fregister" action="<?php echo $register_action_url ?>"
          onsubmit="return fregister_submit(this);" method="POST" autocomplete="off">

          <div class="register-notice">
            <i class="fa fa-check-circle" aria-hidden="true"></i>
            회원가입약관 및 개인정보처리방침안내의 내용에
            동의하셔야 회원가입 하실 수 있습니다.
          </div>

          <?php
          // 소셜로그인 사용시 소셜로그인 버튼
          @include_once(get_social_skin_path().'/social_register.skin.php');
          ?>

          <section id="fregister_term">
            <div class="fregister-wrap">
              <h6>개인정보처리방침안내</h6>
              <fieldset class="fregister_agree">
                <label for="agree11">회원가입약관의 내용에 동의합니다.</label>
                <input type="checkbox" name="agree" value="1" id="agree11" class="selec_chk">
              </fieldset>
            </div>
            <textarea readonly><?php echo get_text($config['cf_stipulation']) ?></textarea>
          </section>

          <section id="fregister_private">
            <div class="fregister-wrap">
              <h6>개인정보처리방침안내</h6>
              <fieldset class="fregister_agree">
                <label for="agree21">개인정보처리방침안내의 내용에 동의합니다.</label>
                <input type="checkbox" name="agree2" value="1" id="agree21" class="selec_chk">
              </fieldset>
            </div>
            <textarea readonly><?php echo get_text($config['cf_privacy']) ?></textarea>
          </section>

          <div id="fregister_chkall" class="chk_all fregister_agree">
            <input type="checkbox" name="chk_all" id="chk_all" class="selec_chk">
            <label for="chk_all"><span></span>회원가입 약관에 모두 동의합니다</label>
          </div>

          <div class="btn_confirm">
            <a href="<?php echo G5_URL ?>" class="btn_close">취소</a>
            <button type="submit" class="btn_submit">회원가입</button>
          </div>
        </form>
      </div>

    </div>
  </section>

</div>



<script>
function fregister_submit(f) {
  if (!f.agree.checked) {
    alert("회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
    f.agree.focus();
    return false;
  }

  if (!f.agree2.checked) {
    alert("개인정보처리방침안내의 내용에 동의하셔야 회원가입 하실 수 있습니다.");
    f.agree2.focus();
    return false;
  }

  return true;
}

window.addEventListener("load", function() {
  var chkAll = document.querySelector("input[name=chk_all]");
  var agreeList = document.querySelectorAll("input[name^=agree]");

  chkAll.addEventListener("click", function() {
    if (chkAll.checked) {
      for (var i = 0; i < agreeList.length; i++) {
        agreeList[i].checked = true;
      }
    } else {
      for (var i = 0; i < agreeList.length; i++) {
        agreeList[i].checked = false;
      }
    }
  });
});


document.querySelector('.btn_submit').addEventListener('click', function(event) {
  event.preventDefault(); // 폼의 submit 동작 취소
  alert('현재 회원가입 서비스는 일시적으로 중단되었습니다. 불편을 드려 죄송합니다. 이용에 불편을 드린 점 양해 부탁드립니다.'); // alert 창 띄우기
});
</script>
</div>
<!-- } 회원가입 약관 동의 끝 -->