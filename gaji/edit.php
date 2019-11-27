	<?php
	include '../database.php';
    $gaji = new Gaji();
    $karyawan = new Karyawan();
	foreach ($gaji->edit($_GET['gaji_id']) as $data) {
		$gaji_id2 = $data['gaji_id'];
        $karyawan_id2 = $data['karyawan_id'];
        $gaji_pokok2 = $data['gaji_pokok'];
		$karyawan_nama2 = $data['karyawan_nama'];
    }

	?>

<html>

<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>

<body>
<div class="container">
				<div class="row">
					<div class="col-md-12" style="padding:20px">
						<div class="card">
	<center><b>ubah!!!</b></center>
	<div class="card-body">
	<form action="proses.php?aksi=update" method="post">

    	<div class="form-group">
		<label ><b class="table-warning">Nama</b> </label>
		<select name="karyawan_id" class="form-control" selected>
        <?php foreach ($karyawan->index() as $xx ) { ?>

        <option value="<?php echo $xx['karyawan_id'] ?>"<?php if ($xx['karyawan_id'] == $karyawan_id2) echo "selected"; ?>><?php echo $xx['karyawan_nama'] ?> </option>
        <?php
        }
        ?>
		</select>
		</div>	

       <label><b class="table-danger" >Gaji pokok</b></label>
		<input type="text" class="form-control" name="gaji_pokok" value="<?php echo $gaji_pokok2 ?>">
		<br>
		
		
		<button type="submit" img src="30" alt="30" class="rounded-circle" class="table-dark" name="simpan">Simpan</button>

	</form>
</body>

</html>
              

        