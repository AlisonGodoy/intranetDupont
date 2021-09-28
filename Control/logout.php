<?php
	session_start();
	
	$_SESSION['controleLogin'] == false;
	unset($_SESSION['controleLogin']);
	header('Location: ../View/LoginUser.php');

?>