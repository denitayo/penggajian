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
                    <th class="bg-warning">No</th>
                    <th class="bg-warning">Nama Karyawan</th>
                    <th class="bg-warning"> Gaji Pokok </th>

                    <th  class="bg-warning" colspan="4">Aksi<center></center>
                    <th>
                </tr>

                <?php
                include '../database.php';
                $gaji = new Gaji();
                $no = 1;
                foreach ($gaji->index() as $data) {
                    ?>
                    <tr>
                        <td ><?php echo  $no++; ?></td>
                        <td ><?php echo $data['karyawan_nama']; ?></td>
                        <td ><?php echo $data['gaji_pokok']; ?></td>
  
                        <td><a href="show.php?gaji_id=<?php echo $data['gaji_id']; ?>"  class="btn btn-primary" >Tampil</a>
                            <a href="edit.php?gaji_id=<?php echo $data['gaji_id']; ?>"   class="btn btn-success">Ubah</a>
                            <a href="proses.php?gaji_id=<?php echo $data['gaji_id']; ?>     
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
