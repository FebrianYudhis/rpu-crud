<?php
session_start();
include("koneksi.php");
$menu = $_POST['menu'];
$username = $_POST['username'];
$password = $_POST['password'];
$data = mysqli_query($koneksi, "select * from akun where username='$username' and password='$password'");
$status = mysqli_query($koneksi, "SELECT * FROM AKUN where username = '$username'");
$liatstatus = mysqli_fetch_array($status);
$cek = mysqli_num_rows($data);
if ($cek > 0) {
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    if ($liatstatus['hak'] == "Admin") {
        $_SESSION['hak'] = "Admin";
        echo "<script>alert('Login Berhasil Sebagai Admin!');window.location='../pages/tampil/utama.php';</script>";
    } else {
        $_SESSION['hak'] = "User";
        if ($menu == "admin") {
            echo "<script>alert('Login Berhasil Sebagai User,Anda Tidak Dapat Mengakses Halaman Ini !');window.location='../index.php';</script>";
        } else {
            echo "<script>alert('Login Berhasil Sebagai User !');window.location='../pages/tampil/user/" . $menu . ".php';</script>";
        }
    }
} else {
    echo "<script>alert('Login Gagal,Pastikan Username Atau Password benar !');window.location='../pages/login.php?menu=" . $menu . "';</script>";
}
