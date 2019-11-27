<?php
include '../database.php';
$karyawan = new Karyawan();

$aksi = $_GET['aksi'];

if (isset($_POST['simpan'])) {
    $karyawan_id2 = $_POST['karyawan_id'];
    $karyawan_nama2 = $_POST['karyawan_nama'];

}
if ($aksi == "tambah") {
    $karyawan->create($karyawan_nama2);
    header("location:index.php");
} elseif ($aksi == "update") {
    $karyawan->update($karyawan_id2,$karyawan_nama2);
    header("location:index.php"); 
} elseif ($aksi == "delete") {
    $karyawan->delete($_GET['karyawan_id']);
    header("location:index.php");
}

