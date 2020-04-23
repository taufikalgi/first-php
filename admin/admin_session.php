<?php 
	session_start();
	if(empty($_SESSION['username_admin']))
	{
		header("location:login.php?pesan=belum_login");
	}
 ?>

 <?php 
 		echo $_SESSION['username_admin'];
 		header("location:admin_home.php");
  ?>