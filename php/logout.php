<?php
session_start();
$_SESSION['username'] = '';
$_SESSION['status'] = '';
unset($_SESSION['username']);
unset($_SESSION['username']);
session_destroy();
echo "<script>alert('Berhasil Keluar !');window.location='http://localhost/crud/index.php'</script>";
