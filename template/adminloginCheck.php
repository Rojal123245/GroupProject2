<?php 
session_start();
require '../classes/databaseQuery.php';
	require '../databaseConnect/connectSQL.php';
	require '../functions/load-Template-Function.php';
	if(isset($_POST['login'])){
		if($_POST['username'] == 'Admin@woodland.com' && $_POST['password'] == 'admin'){
			$_SESSION['admin'] = true;
		}
	}
	else
	{
		echo '<script>alert("login failed")</script>';
	}
	header('location:../public_html/admin/index.php');
?>