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
				<th>ID USER</th>
				<th>Username User</th>
				<th>Password</th>
				<th>nama</th>
				<th>email</th>
				<th>alamat</th>
				<th>telp</th>
				<th></th>
			</tr>
			</thead>
			<tbody>
		<?php

		include "open_db.php";
 			$i = 1;
			$query = mysqli_query($conn,"SELECT * FROM user");

			while ($data =mysqli_fetch_array($query)) {
				?>

				<tr>
					<td><?= $i++; ?></td>
					
					<td> <?php echo $data['id_user']; ?></td>
					<td> <?php echo $data['username_user']; ?></td>
					<td> <?php echo $data['pass_user']; ?></td>
					<td> <?php echo $data['nama']; ?></td>
					<td> <?php echo $data['email']; ?></td>
					<td> <?php echo $data['alamat']; ?></td>
					<td> <?php echo $data['telp']; ?></td>
					


					<td><a href="hapus_user.php?id_user=<?php echo $data['id_iklan'];?>" >BANNED</a></td>
					

					


				</tr>
				<?php } ?>

			</tbody>
		</table>

  			

 

 </body>

</html>