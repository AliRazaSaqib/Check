<?php session_start();
if(strtolower($_GET['captcha']) == $_SESSION['security_code'])
	echo 'true';
else
	echo 'false';
?>