<?php
include("../../../../php/koneksi.php");
$a = $_POST['kode'];
$b = $_POST['nama'];
$c = $_POST['deskripsi'];
$d = $_POST['icon'];

$tambah = "UPDATE jurusan SET nama_jurusan ='$b' ,deskripsi='$c' ,icon='$d' WHERE kode_jurusan=$a ";
$sql = mysqli_query($koneksi, $tambah);

if ($sql) {
    echo "<script>alert('Data Berhasil Diubah !');window.location='../../utama.php'</script>";
} else {
    echo "<script>alert('Data Gagal Diubah !');window.location='../../utama.php'</script>";
}
