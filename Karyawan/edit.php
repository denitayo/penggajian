<html>

<head>
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<title>CRUD</title>
</head>

<body>
<div class="container">


	<?php
	include '../database.php';
	$karyawan = new Karyawan();
	foreach ($karyawan->edit($_GET['id']) as $data) {
		$id2 = $data['karyawan_id'];
		$nama2 = $data['karyawan_nama'];

	}
	?>

	<center><b>SILAHKAN UBAH BIODATA !!!</b></center>
	<form action="proses.php?aksi=update" method="post">

		<input type="hidden" name="karyawan_id" value="<?php echo $id2 ?>">

		<label ><b class="table-danger"  >Nama </b></label>
		<input  type="text"  class="form-control" name="karyawan_nama" value="<?php echo $nama2 ?>">

		<button type="submit" class="table-dark" name="simpan">Simpan</button>

	</form>

</body>

</html>