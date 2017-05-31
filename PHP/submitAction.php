<?php 
	
	if ($_POST['textOk'] == 'ok') {
		if (empty($_POST['userName'])) {
			$error = "输入字符为空";
		}else{
			$error = "";
		} 
	}
	include_once 'submit.php';
	include_once 'base.php';
	
?>


