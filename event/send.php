<meta charset="utf-8">
<?php
$email_to = "yonseimain@kakao.com";
$email_from = "yonseimain@kakao.com";
$email_subject = "[연세메인치과 이벤트]이벤트상담문의";
$email_subject = '=?UTF-8?B?'.base64_encode($email_subject).'?=';
 
function died($error) {
 // your error code can go here
 echo "<script> alert('개인정보취급방침동의 체크를 해주세요.');";
 echo "history.go(-1);";
 echo "</script>";
 die();
}
 
// validation expected data exists
if(!isset($_POST['subject']) ||
 !isset($_POST['first_name']) ||	
 !isset($_POST['telephone']) ||	
  !isset($_POST['kind']) ||
 !isset($_POST['sns_ok'])) {
 died('We are sorry, but there appears to be a problem with the form you submitted.');      
}
 
$subject = $_POST['subject']; // required
$first_name = $_POST['first_name']; // not required
$telephone = $_POST['telephone']; // not required
$kind = $_POST['kind']; // not required
$sns_ok = $_POST['sns_ok']; // not required
 
$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,4}$/';
if(!preg_match($email_exp,$email_from)) {
 $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
}
if(strlen($error_message) > 0) {
 died($error_message);
}
$email_message = "";
 
function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}

$email_message .= "신청종류 : ".clean_string($subject)."\n\n";
$email_message .= "이름 : ".clean_string($first_name)."\n\n";
$email_message .= "연락처 : ".clean_string($telephone)."\n\n";
$email_message .= "상담내용 : ".clean_string($kind)."\n\n";
$email_message .= "개인정보취급방침동의 : ".clean_string($sns_ok)."\n\n";
    
// create email headers
$headers = 'From: '.$email_from;
// 제목이 깨질경우 아래 캐릭터셋 적용
@mail($email_to, $email_subject, $email_message, $headers); 
?>
 
<!-- include your own success html here -->
 
<script>
alert ("메일이 발송되었습니다.\n빠른 시일안에 답변드리겠습니다.");
location.href='event.html';
</script>