<?php  

	session_start();
	if($_SESSION['name']!=null){
		header('location:login.php');
		unset($_SESSION['name']);
	}else{
		header('location:login.php');
	}

?>