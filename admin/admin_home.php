<?php 
	session_start();
		
		if (!isset($_SESSION["status"])) {
		header("location:login.php?pesan=belum_login");
		exit;
	}
	$session_admin=$_SESSION['username_admin'];
	

	
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

  			<a href="admin_formregis.php">RECRUITMENT</a>
  			<a href="admin_logout.php">LOGOUT</a>
  			<a href="tampil_iklan.php">AKSES IKLAN</a>
  			<a href="tampil_user.php">AKSES USER</a>

  			<h3>DATA LIST Iklan</h3>

     		<table class="table table-striped"> 
		<thead>
			<tr>
				<th>no</th>
				
				<th>ID Admin</th>
				<th>NAMA </th>
				<th>email</th>
				<th>TELPON</th>
				<th>BAGIAN</th>
				<th>USERNAME</th>
				<th>PASSWORD</th>
				<th>GAMBAR</th>
			</tr>
			</thead>
			<tbody>
		<?php

		include "open_db.php";

			
 			$i = 1;
			$query = mysqli_query($conn,"SELECT * FROM admin WHERE username_admin='$session_admin'");

			while ($data =mysqli_fetch_array($query)) {
				?>

				<tr>
					<td><?= $i++; ?></td>
					<td> <?php echo $data['id_admin']; ?></td>
					<td> <?php echo $data['nama_admin']; ?></td>
					<td> <?php echo $data['email_admin']; ?></td>
					<td> <?php echo $data['telp_admin']; ?></td>
					<td> <?php echo $data['bagian']; ?></td>
					<td> <?php echo $data['username_admin']; ?></td>
					<td> <?php echo $data['pass_admin']; ?></td>
					<td><img src="img/<?= $data["gambar"]; ?>" width="100px"></td>					

					


				</tr>
				<?php } ?>

			</tbody>
		</table>
 

 </body>

</html>