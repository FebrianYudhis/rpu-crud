<?php
session_start();
$base = "http://killersvteam.com/";
$_SESSION['username'] = '';
$_SESSION['status'] = '';
unset($_SESSION['username']);
unset($_SESSION['username']);
session_destroy();
echo "<script>alert('Berhasil Keluar !');window.location='" . $base . "crud/index.php'</script>";
