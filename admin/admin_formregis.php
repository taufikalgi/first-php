<?php
  include "open_db.php";

  session_start();
  if(empty($_SESSION['username_admin']))
  {
    header("location:admin_login.php?pesan=belum_login");
  }
  $session_admin=$_SESSION['username_admin'];
  $sql = "SELECT * FROM admin WHERE username_admin='$session_admin'";

  $query = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html>
<head>
  
  <title>RECRUITMENT</title>
  
</head>


<body> 

      <h1> FORM RECRUITMENT</h1>


  <form  method="POST" action="admin_inputregis.php" enctype="multipart/form-data">
  
    <table>

      <tr>
        <td>id_admin</td>
        <td>:</td>
        <td><input type="text" name="id_admin" value="<?php echo rand(100000000,999999999)?>"></td>
      </tr>

      <tr>
        <td>nama_admin</td>
        <td>:</td>
        <td><input type="text" name="nama_admin"></td>
      </tr>

      <tr>
        <td>Email Admin</td>
        <td>:</td>
        <td><input type="text" name="email_admin"></td>
      </tr>

      <tr>
        <td>telp_admin</td>
        <td>:</td>
        <td><input type="text" name="telp_admin"></td>
      </tr>

      <tr>
        <td>bagian</td>
        <td>:</td>
        <td>
                <select name="bagian">
                <option>Database</option>
                <option>FrontEnd</option>  
                <option>BackEnd</option>    
                </select>
      </td>
      </tr>

      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username_admin"></td>
      </tr>

      <tr>
        <td>password</td>
        <td>:</td>
        <td><input type="password" name="pass_admin"></td>
      </tr>

      <tr>
        <td>foto</td>
        <td>:</td>
        <td><input type="file" name="gambar"></td>
      </tr>



      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="RECRUIT"></td>
      </tr>
    </table>
   </form>

</div>

</div>

</body>
</html>



