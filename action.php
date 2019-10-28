<?php
	$hostname = "localhost";
	$username = "root";
	$password = "";
	$database = "pasar";
	$koneksi = mysqli_connect($hostname, $username, $password, $database);

	if($koneksi->connect_error){
		die('Koneksi Gagal : '.$connect->connect_error);
	}

?>