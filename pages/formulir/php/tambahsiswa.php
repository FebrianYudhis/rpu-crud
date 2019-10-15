<?php
include("../../../php/koneksi.php");
$a = $_POST['nis'];
$b = $_POST['nama'];
$c = $_POST['jk'];
$d = $_POST['tlahir'];
$e = $_POST['tanggall'];
$f = $_POST['alamat'];
$g = $_POST['kelas'];
$h = $_POST['jurusan'];

if ($_FILES['file']) {
    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $nama = $_FILES['file']['name'];
    $x = explode('.', $nama);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 5120000) {
            move_uploaded_file($file_tmp, '../../../assets/img/profil/' . $nama);
            $tambah = "INSERT INTO siswa VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$nama')";
            $sql = mysqli_query($koneksi, $tambah);
            if ($sql) {
                echo "<script>alert('Data Berhasil Disimpan !');window.location='../../tampil/utama.php'</script>";
            } else {
                echo "<script>alert('Data Gagal Disimpan !');window.location='../../tampil/utama.php'</script>";
            }
        }
    } else {
        echo "<script>alert('Hanya Gambar Dengan Ekstensi JPG Dan PNG Yang Boleh Di Upload !');window.location='../../tampil/utama.php'</script>";
    }
} else {
    echo "<script>alert('Foto Tidak Dipilih !');window.location='../../tampil/utama.php'</script>";
}
