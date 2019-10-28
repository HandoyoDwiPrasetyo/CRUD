<?php
	$koneksi = mysqli_connect('localhost', 'root', '', 'pasar');

	$nama = $_POST['nama'];
	$berat = $_POST['berat'];
	$jumlah = $_POST['jumlah'];
	$harga = $_POST['harga'];
	$tanggal = $_POST['tanggal'];

	$query = mysqli_query($koneksi, "INSERT INTO sayuran VALUES('', '$nama', '$berat', '$jumlah', '$harga', '$tanggal')" ) or die(mysqli_error($koneksi));

	if ($query) {
        header('Location: index.php');
    }
?>