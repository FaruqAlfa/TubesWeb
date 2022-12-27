<?php
include 'koneksi.php';
if (isset($_POST['btnLogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($connect, "SELECT * FROM users WHERE username='$username'");
    $data = mysqli_fetch_array($query);


    if (mysqli_num_rows($query) == 1) {
        if (password_verify($password, $data['password'])) {
            if ($data['level'] == 1) {
                session_start();
                $_SESSION['username'] = $data['username'];
                $_SESSION['level'] = "admin";
                header('location:indexAdmin.php');
            } else if ($data['level'] == 2) {
                session_start();
                $_SESSION['username'] = $data['username'];
                $_SESSION['level'] = "user";
                header('location:index.php');
            }
            //login valid
            // session_start();
            // $_SESSION['username'] = $data['username'];
            // header('location:index.php');
        } else {
            //password salah
            header('location:login.php?pesan=Password Salah');
        }
    } else {
        //username salah
        header('location:login.php?pesan=Username Salah');
    }
}
