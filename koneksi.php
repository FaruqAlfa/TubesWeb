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
