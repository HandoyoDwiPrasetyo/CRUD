<?php
    $connect = mysqli_connect('localhost', 'root', '', 'pasar');

    $nama = $_GET['nama'];

    $query = mysqli_query($connect, "DELETE FROM sayuran WHERE nama='$nama'");

    if ($query) {
        header('Location: index.php');
    }
?>