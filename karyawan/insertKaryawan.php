<?php
include "koneksi.php";

$idKaryawan = $_GET['idKaryawan'];
$namaKaryawan = $_GET['namaKaryawan'];
$nikKaryawan = $_GET['nikKaryawan'];
$statusKaryawan = $_GET['statusKaryawan'];

$sql = "INSERT INTO karyawan (idKaryawan, namaKaryawan, nikKaryawan, statusKaryawan) VALUES ('$idKaryawan', '$namaKaryawan', '$nikKaryawan', '$statusKaryawan')";

if (mysqli_query($connect, $sql)) {
    echo "Sukses menambahkan Data Baru";
    header("location: karyawan.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}
