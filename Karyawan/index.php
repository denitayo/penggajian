<html>

<body>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <center>
        <h2><b>Data Karyawan</h2></b>
        <center>
            <a href="tambah.php" class="btn btn-dark" >Tambah</a>
            <table border="2">
            <br><br>
                <tr>
                    <th class="bg-warning">NO</th>
                    <th class="bg-warning">NAMA KARYAWAN</th>
                    <th class="bg-warning"> AKSI </th>
                  
                </tr>

                <?php
                include '../database.php';
                $karyawan = new Karyawan();
                $no = 1;
                foreach ($karyawan->index() as $data) {
                    ?>
                    <tr>
                        <td ><?php echo  $no++; ?></td>
                        <td ><?php echo $data['karyawan_nama']; ?></td>
  
                        <td><a href="show.php?karyawan_id=<?php echo $data['karyawan_id']; ?>"  class="btn btn-primary" >Tampil</a>
                            <a href="edit.php?karyawan_id=<?php echo $data['karyawan_id']; ?>"   class="btn btn-success">Ubah</a>
                            <a href="proses.php?karyawan_id=<?php echo $data['karyawan_id']; ?>     
                    & aksi=delete" onclick="return confirm('Apakah Anda 
                    Yakin Mau Menghapus Data Ini?')"class="btn btn-danger" >Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
</body>

</html>
