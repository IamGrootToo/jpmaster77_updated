<?php
require ("rand.php");
// Begin a new session
session_start();
$_SESSION['captcha_id'] = $str;
$time = time();
// Echo the image - timestamp appended to prevent caching
echo '<a href="" onclick="CaptchaImage.refreshimg(); return false;" title="Click to refresh image"><img src="../../images/captcha/captcha.png?' . $time . ' " width="111" height="46" alt="Captcha image" /></a>';
?>