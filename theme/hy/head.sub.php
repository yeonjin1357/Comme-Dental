<?php
// 이 파일은 새로운 파일 생성시 반드시 포함되어야 함
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

$begin_time = get_microtime();

if (!isset($g5['title'])) {
    $g5['title'] = $config['cf_title'];
    $g5_head_title = $g5['title'];
}
else {
    $g5_head_title = $g5['title']; // 상태바에 표시될 제목
    $g5_head_title .= " | ".$config['cf_title'];
}

// 현재 접속자
// 게시판 제목에 ' 포함되면 오류 발생
$g5['lo_location'] = addslashes($g5['title']);
if (!$g5['lo_location'])
    $g5['lo_location'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
$g5['lo_url'] = addslashes(clean_xss_tags($_SERVER['REQUEST_URI']));
if (strstr($g5['lo_url'], '/'.G5_ADMIN_DIR.'/') || $is_admin == 'super') $g5['lo_url'] = '';

?>
<!doctype html>
<html lang="ko">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- BORAWARE LOG SCRIPT. -->

  <!-- 페이지 설명 -->
  <meta name="description" content="혜윰 풀페이지 템플릿">
  <meta name="keywords" content="혜윰 풀페이지 템플릿">
  <link rel="shortcut icon" href="<?php echo G5_URL?>/favicon.ico" />
  <!-- 오픈그래프 태그, 소셜 미디어로 공유될 때 우선적으로 활용 -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="혜윰 풀페이지 템플릿">
  <meta property="og:site_name" content="혜윰 풀페이지 템플릿" />
  <meta property="og:description" content="혜윰 풀페이지 템플릿">
  <meta property="og:image" content="<?php echo G5_URL?>/cover.jpg?v=1.0">
  <meta property="og:url" content="<?php echo G5_URL?>">
  <!-- 대표 url -->
  <link rel="canonical" href="<?php echo G5_URL?>">
  <?php
if($config['cf_add_meta'])
    echo $config['cf_add_meta'].PHP_EOL;
?>
  <title><?php echo $g5_head_title; ?></title>

  <?php if(defined('_INDEX_')) { ?>
  <!-- 메인페이지만 설정만 파일 -->
  <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/main.css">
  <?php } else { ?>
  <!-- 그외 나머지 페이지 설정만 파일 -->
  <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/sub.css">
  <?php } ?>

  <!-- 스타일 정리 -->
  <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/reset.css">
  <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/font.css">
  <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/common.css">
  <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/menu.css">
  <link rel="stylesheet" href="<?php echo G5_THEME_CSS_URL; ?>/footer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.17/fullpage.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.1.0/swiper-bundle.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
  <!-- 스타일 정리 -->



  <script>
  // 자바스크립트에서 사용하는 전역변수 선언
  var g5_url = "<?php echo G5_URL ?>";
  var g5_bbs_url = "<?php echo G5_BBS_URL ?>";
  var g5_is_member = "<?php echo isset($is_member)?$is_member:''; ?>";
  var g5_is_admin = "<?php echo isset($is_admin)?$is_admin:''; ?>";
  var g5_is_mobile = "<?php echo G5_IS_MOBILE ?>";
  var g5_bo_table = "<?php echo isset($bo_table)?$bo_table:''; ?>";
  var g5_sca = "<?php echo isset($sca)?$sca:''; ?>";
  var g5_editor = "<?php echo ($config['cf_editor'] && $board['bo_use_dhtml_editor'])?$config['cf_editor']:''; ?>";
  var g5_cookie_domain = "<?php echo G5_COOKIE_DOMAIN ?>";
  <?php
if ($is_admin) {
    echo 'var g5_admin_url = "'.G5_ADMIN_URL.'";'.PHP_EOL;
}
?>
  </script>
</head>

<?php
include_once(G5_THEME_PATH."/php_var.php");
?>

<body data-spy="scroll" data-target=".navbar-fixed-top">
  <?php
if ($is_member) { // 회원이라면 로그인 중이라는 메세지를 출력해준다.
    $sr_admin_msg = '';
    if ($is_admin == 'super') $sr_admin_msg = "최고관리자 ";
    else if ($is_admin == 'group') $sr_admin_msg = "그룹관리자 ";
    else if ($is_admin == 'board') $sr_admin_msg = "게시판관리자 ";

    echo '<div id="hd_login_msg">'.$sr_admin_msg.$member['mb_nick'].'님 로그인 중 ';
    echo '<a href="'.G5_BBS_URL.'/logout.php">로그아웃</a></div>';
}
?>