<?php session_start();
	unset($_SESSION['chip_behind']);
	unset($_SESSION['ordem']);
	echo'<script language= "JavaScript">location.href="./background.php"</script>';
?>