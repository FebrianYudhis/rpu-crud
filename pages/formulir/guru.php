<?php $data['judul'] = "Tambah Data Guru";
include('templates/header.php'); ?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form enctype="multipart/form-data" method="POST" action="php/tambahguru.php">
            <div class="row">
                <table border="1" class="table">
                    <tbody>
                        <tr>
                            <td colspan="2" align="center" class="header">Masukkan Data Guru</td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Nip :</p>
                            </td>
                            <td align="center"><input type="number" name="nip" required placeholder="Masukkan Nip"></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Nama :</p>
                            </td>
                            <td align="center"><input type="text" name="nama" required placeholder="Masukkan Nama"></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Gambar :</p>
                            </td>
                            <td align="center"><input type="file" name="file"></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Jenis Kelamin :</p>
                            </td>
                            <td align="center"><select name="jk" required>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Tempat Lahir :</p>
                            </td>
                            <td align="center"><input type="text" name="tlahir" required placeholder="Masukkan Tempat Lahir"></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Tanggal Lahir : </p>
                            </td>
                            <td align="center"><input type="date" name="tanggall" required placeholder="Masukkan Tanggal Lahir"></td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Alamat :</p>
                            </td>
                            <td align="center"><input type="text" name="alamat" required placeholder="Masukkan Alamat"></td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2"><button type="submit" class="kirim" id="kirim">Tambah</button> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</section>
<?php include('templates/footer.php'); ?>