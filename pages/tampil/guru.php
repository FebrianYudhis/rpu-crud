<?php $data['judul'] = "Data Guru";
$data['ajax'] = "guru";
include('templates/header.php');
$sql = mysqli_query($koneksi, "SELECT * FROM guru");
?>
<!-- Main content -->
<section class="content mb-5">
    <div class="container-fluid">
        <table class="table table-bordered table-striped" id="datatabel">
            <thead class="thead-dark">
                <tr>
                    <th>Nip</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($guru = mysqli_fetch_array($sql)) { ?>
                    <tr>
                        <td><?= $guru['nip']; ?></td>
                        <td><?= $guru['nama']; ?></td>
                        <td><?= $guru['jenis_kelamin']; ?></td>
                        <td><?= $guru['alamat']; ?></td>
                        <td><?= $guru['tempat_lahir']; ?></td>
                        <td><?= $guru['tanggal_lahir']; ?></td>
                        <td><img src="../../assets/img/profil/<?= $guru['gambar']; ?>" alt="Tidak Ada Gambar" class="img-thumbnail"></td>
                        <td>
                            <a class="btn btn-info" href="edit/guru.php?nip=<?= $guru['nip']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus/guru.php?nip=<?= $guru['nip']; ?>">Hapus</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>

<?php include('templates/footer.php'); ?>