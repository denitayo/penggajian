<!DOCTYPE html>
	<html>
	<head>
		<title>CRUD</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	</head>
	<body>
			<!-- Header -->
			<nav class="navbar navbar-expand-lg navbar-light bg-light" >
	  <a class="navbar-brand" href="#">Karyawan</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
	
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		  <li class="nav-item active">
			<a class="nav-link" href="#">Ujang<span class="sr-only"></span></a>
		  </li>
	 
		  </li>
	
	
		</ul>
		
	  </div>
	</nav>
			<!-- End Header -->
	
			<!-- Content -->

			<?php
    include '../database.php';
    $karyawan= new Karyawan();
    foreach ($karyawan->edit($_GET['karyawan_id']) as $data){
        $karyawan_id2=$data['karyawan_id'];
        $karyawan_nama2=$data['karyawan_nama'];
	}
	?>
	
	
			<div class="container">
				<div class="row">
					<div class="col-md-12" style="padding:20px">
						<div class="card">
							<div class="card-header"><center><b>KARYAWAN ANDA !!!</b></center></div>
	
							<div class="card-body">
								<form action="index.php" method="post">
									<div class="form-group">
										<label ><b>Karyawan </b></label>
										<input type="text" name="karyawan_nama" class="form-control" value="<?php echo $karyawan_nama2?>">
									</div>
								
								<button class="btn btn-primary btn-block">Kembali</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!-- End Content-->
	
			<!-- footer -->
			<footer>
				<center><b>&copy; Copyright</b></center>
	
			</footer>
			<!--  End Footer-->
	
			<!-- Js -->
			<script  src="assets/js/jquery-3.4.1.min.js"></script>
			<script src=" assets/js/bootstrap.bundle.min.js"></script>
			<script src=" assets/js/bootstrap.bundle.js"></script>
	
			<!-- End Js -->
	
	</body>
	</html>