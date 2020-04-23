<?php 
	session_start();
	//menghubungkan dengan koneksi
	$query = new mysqli('localhost','root','','new_olx2');

	//menangkap data yang dikirim oleh form
	$username_admin = $_POST['username_admin'];
	$pass_admin = $_POST['pass_admin'];
	
	//menyeleksi data admin dengan username dan password yang sesuai
	$data = mysqli_query($query, "SELECT * FROM admin where username_admin='$username_admin' and pass_admin='$pass_admin'")
						OR die(mysqli_error($query));

	//menghitung jumlah data yang ditemukan 
	$cek = mysqli_num_rows($data);

	if ($cek > 0) {

		$_SESSION['username_admin'] = $username_admin;
		$_SESSION['status'] = "login";

		header("location:admin_session.php");
	}

	else {
		header ("location:admin_login.php?pesan=gagal");

	}
 ?>