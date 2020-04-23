<?php
	include "open_db.php";

	$id_iklan =$_GET['id_iklan'];
	
	$query = mysqli_query($konek,"DELETE FROM barang WHERE id_iklan=$id_iklan");
	header("Location: tampil_iklan.php");
?>