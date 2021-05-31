<?php 
 	session_start();
 	include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN LOGIN</title>
	<style>
body {
  background-color: lightblue;
}
</style>
</head>
<body>
	<form method="post">
		<label>Username :</label>
		<input type="text" name="fusername"><br>
		<label>Password :</label>
		<input type="password" name="fpassword"><br>
		<button type="submit" name="fmasuk">Login</button>
		<td><a href="http://localhost/dokteronline/registrasi.php"><input type="button"value="REGISTRASI"></td></a>
	</form>

	<?php
	if (isset($_POST['fmasuk'])) {
	 	$username = $_POST['fusername'];
	 	$password = $_POST['fpassword'];
	 	$qry = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username' AND password = '$password'");
	 	$cek = mysqli_num_rows($qry);
	 	if ($cek==1) {
	 		$_SESSION['userweb']=$username;
	 		header("location:tampilan_awal.html");
	 		exit;
	 	}
	 	else{
	 		echo "maaf username dan password ada masukan salah";
	 	}
	 } 
	 ?>
</body>
</html>