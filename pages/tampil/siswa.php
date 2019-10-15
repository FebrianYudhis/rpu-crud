<?php $data['judul'] = "Data Siswa";
include('templates/header.php');
$sql = mysqli_query($koneksi, "SELECT * FROM siswa");
?>
<!-- Main content -->
<section class="content mb-5">
    <div class="container-fluid">
        <table class="table table-bordered" id="datatabel">
            <thead>
                <tr>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Kelas</th>
                    <th>Jurusan</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($siswa = mysqli_fetch_array($sql)) {
                    $a = $siswa['kode_jurusan'];
                    $jurusan = mysqli_query($koneksi, "SELECT * FROM JURUSAN WHERE kode_jurusan=$a");
                    $j = mysqli_fetch_array($jurusan); ?>
                    <tr>
                        <td><?= $siswa['nis']; ?></td>
                        <td><?= $siswa['nama']; ?></td>
                        <td><?= $siswa['jenis_kelamin']; ?></td>
                        <td><?= $siswa['tempat_lahir']; ?></td>
                        <td><?= $siswa['tanggal_lahir']; ?></td>
                        <td><?= $siswa['alamat']; ?></td>
                        <td><?= $siswa['kelas']; ?></td>
                        <td><?= $j['nama_jurusan']; ?></td>
                        <td><img src="../../assets/img/profil/<?= $siswa['gambar']; ?>" alt="Tidak Ada Gambar" class="img-thumbnail"></td>
                        <td>
                            <a class="btn btn-info" href="edit/siswa.php?nis=<?= $siswa['nis']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus/siswa.php?nis=<?= $siswa['nis']; ?>">Hapus</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>

<?php include('templates/footer.php'); ?>