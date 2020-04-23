<?php
	include "open_db.php";

	$id_user =$_GET['id_user'];
	
	$query = mysqli_query($konek,"DELETE FROM barang WHERE id_user=$id_user");
	header("Location: tampil_user.php");
?>