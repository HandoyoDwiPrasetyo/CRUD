<?php
   $koneksi = mysqli_connect('localhost', 'root', '', 'pasar');
   

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $berat = $_POST['berat'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $tanggal = $_POST['tanggal'];

   $query = mysqli_query($koneksi, "UPDATE sayuran SET nama='$nama', berat='$berat', jumlah='$jumlah', harga='$harga', tanggal='$tanggal' WHERE id='$id'");
    
   if ($query) {
       header('Location: index.php');
   }
    
?>