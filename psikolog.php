
<?php 
include ('config.php');
if (isset($_POST['kirim'])){
	$dokter = implode(', ', $_POST['dokter']);
	$umur = implode(', ', $_POST['umur']);
	$keluhan = $_POST['keluhan'];
	mysql_query($con, "INSERT INTO implode VALUES('','$dokter','$umur',$keluhan')");
	header('location:umum.php');
}
$sql = mysqli_query ($con, "SELECT * FROM implode ORDER BY id DESC");
 ?>
<!DOCTYPE html>
<html>
<head> <mate cherset="utf-8">
	<title>psikologi</title>
	<style>
body {
  background-color: lightblue;
}
</style>
</head>
<body>
	<div>
		<a href="tampilan_awal.html">HOME</a>
		<a href="pengaturan.php">PENGATURAN</a>
	</div>
	<h1>PSIKOLOGI</h1>
	<tr>
		<td>NAMA DOKTER</td>
		<td>:</td>
		<td><br/>
			<input type="radio" name="dokter[]" value="dr.ahmad wahid">dr.muhammad ali <br/>
			<input type="radio" name="dokter[]" value="dr.toni geo">dr.supratman <br/>
			<input type="radio" name="dokter[]" value="dr.nunung">dr.habibi <br/>
		</td>
		<td>UMUR PASIEN</td>
		<td>:</td>
		<td><br/>
			<input type="radio" name="umur[]" value="ANAK-ANAK">ANAK-ANAK (10-18) <br/>
			<input type="radio" name="umur[]" value="DEWASA">DEWASA (19-35) <br/>
			<input type="radio" name="umur[]" value="LANSIA">LANSIA (35-70) <br/>
		</td>
		<label> KELUHAN :</label>
		<input type="text" name="keluhan">
	</tr>
	<tr>
		<td></td>
		<td><a href="https://web.whatsapp.com/"><input type="button"value="PESAN"></td></a>


	</tr>
	
	


</body>
</html>