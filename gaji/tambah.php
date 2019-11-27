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
	<center><b>TAM BAH HHH !!!</b></center>
	<div class="card-body">
	<form action="proses.php?aksi=tambah" method="post">

    	<div class="form-group">
		<label ><b class="table-warning">Nama</b> </label>
		<select name="karyawan_id" class="form-control">
        
        <?php
                include '../database.php';
                $karyawan = new Karyawan();
                $no = 1;
                foreach ($karyawan->index() as $data) {
                    ?>

	    <option value="<?php echo $data['karyawan_id']; ?>"><?php echo $data['karyawan_nama']; }?></option>
	
		</select>
		</div>	

		<label><b class="table-danger" >Gaji pokok</b></label>
		<input type="text"  class="form-control" name="gaji_pokok">
		<br>
		
		
		<button type="submit" img src="30" alt="30" class="rounded-circle" class="table-dark" name="simpan">Simpan</button>

	</form>
</body>

</html>
                