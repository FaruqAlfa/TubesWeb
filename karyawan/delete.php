<?php 
    include 'koneksi.php';
    $idKaryawan = $_GET['idKaryawan'];
    $sql = "DELETE FROM karyawan WHERE idKaryawan = $idKaryawan";
    if (mysqli_query($connect, $sql)) {
        header("location: karyawan.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
