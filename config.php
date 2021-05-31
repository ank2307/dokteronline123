<?php 
	$user = 'localhost';
	$name = 'root';
	$pass = '';
	$db = 'dokter';

	$con = mysqli_connect($user,$name,$pass,$db);
	if (!$con){
		die("databases tidak ditemukan" . mysqli_connect_error());
	}

 ?>