<?php $data['judul'] = "Tambah Data Jurusan";
include('templates/header.php'); ?>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <form method="POST" action="php/tambahjurusan.php">
            <div class="row">
                <table border="1" width="70%" class="table">
                    <tbody>
                        <tr>
                            <td colspan="2" align="center" class="header">Masukkan Data Jurusan</td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Jurusan :</p>
                            </td>
                            <td align="center"><input type="text" name="jurusan" required placeholder="Masukkan Nama Jurusan"> </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Deskripsi :</p>
                            </td>
                            <td align="center"><input type="text" name="deskripsi" required placeholder="Masukkan Deskripsi Jurusan"> </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <p class="tulisan">Icon :</p>
                            </td>
                            <td align="center"><input type="text" name="icon" required placeholder="Masukkan Class Icon"> </td>
                        </tr>
                        <tr>
                            <td align="center" colspan="2"><button type="submit" class="kirim">Tambah</button> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</section>
<?php include('templates/footer.php'); ?>