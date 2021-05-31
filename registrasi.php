<?php  
		session_start();
	 	include "koneksi.php";
 	if (isset($_POST['daftar'])){
  		$username = $_POST['username'];
 		$password = $_POST['password'];
 		$umur = $_POST['umur'];
 		$alamat = $_POST['alamat'];

 		$simpan="INSERT INTO user(username,password,umur,alamat) VALUES ('$username','$password','$umur','$alamat')";
 		
 		$result = mysqli_query($koneksi,$simpan);
 		if ($result){
 			echo "<script>alter('berhasil daftar')</script";
 			header('location:index.php');
 		}
 		
 		 	}

 	
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>registrasi</title>
	<style>
body {
  background-color: lightblue;
}
</style>
</head>
<body>
	<h1>REGISTRASI</h1>
	<form action="registrasi.php" method="POST">

		
		<label> Username :</label>
		<input type="text" name="username"><br>
		<label> Password :</label>
		<input type="text" name="password"><br>
		<label> Umur :</label>
		<input type="text" name="umur"><br>
		<label>Alamat</label>
		<input type="text" name="alamat"><br>
		<tr>
			<td><input type="submit" name="daftar" value="DAFTARH"></td>
		</tr>

</body>
</html>