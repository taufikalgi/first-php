<?php 
	session_start();
		
		if (!isset($_SESSION["status"])) {
		header("location:login.php?pesan=belum_login");
		exit;
	}

	
?>

<?php
  include "open_db.php";

  $query = mysqli_query($conn,"SELECT * FROM barang");
?>


<!DOCTYPE html>
<html>
<head>
	<title>HOME USER</title>
	
</head>

<body>

  			<a href="admin_home.php">HOME</a>
  			<h3>DATA LIST Iklan</h3>

     		<table class="table table-striped"> 
		<thead>
			<tr>
				<th>no</th>
				<th>ID IKLAN</th>
				<th>ID USER</th>
				<th>NAMA BARANG</th>
				<th>KATEGORI</th>
				<th>HARGA</th>
				<th>LOKASI</th>
				<th>GAMBAR</th>
			</tr>
			</thead>
			<tbody>
		<?php

		include "open_db.php";
 			$i = 1;
			$query = mysqli_query($conn,"SELECT * FROM barang");

			while ($data =mysqli_fetch_array($query)) {
				?>

				<tr>
					<td><?= $i++; ?></td>
					<td> <?php echo $data['id_iklan']; ?></td>
					<td> <?php echo $data['id_user']; ?></td>
					<td> <?php echo $data['nama_barang']; ?></td>
					<td> <?php echo $data['kategori']; ?></td>
					<td> <?php echo $data['harga']; ?></td>
					<td> <?php echo $data['lokasi']; ?></td>
					<td><img src="../img/<?= $data["gambar"]; ?>" width="100px"></td>
					<td><a href="hapus_iklan.php?id_iklan=<?php echo $data['id_iklan'];?>" >HAPUS IKLAN</a></td>
					

					


				</tr>
				<?php } ?>

			</tbody>
		</table>

  			

 

 </body>

</html>