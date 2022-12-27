<?php
//koneksi

$host = "localhost";
$user = "root";
$pass = "";
$db = "tubes_Web";

$connect = mysqli_connect($host, $user, $pass, $db);


if ($connect) {
    //echo 'berhasil koneksi ke database';
} else {
    echo "gagal koneknsi ke database <br>" . mysqli_connect_error();
}

$sql = "SELECT * FROM danakeluar";

//ambil data karyawan dari object result
if (mysqli_query($connect, $sql)) {
    //echo "<br> Berhasil ambil data";
} else {
    echo "<br> gagal " . mysqli_error($connect);
}
