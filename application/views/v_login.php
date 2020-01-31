

<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<head>
		<title>Login - Sistem Informasi Perpustakaan Malas Ngoding</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.css">
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
	</head>
	<body class="bg-dark">
		
		<div class="container">
			<div class="form-group">
				<h3 class="font-weight-normal text-center text-white"> SISTEM INFORMASI</h3>
				<h2 class="font-weight-normal text-center text-white mb-5"> PERPUSTAKAAN </h2>

				<div class="col-md-4 offset-md-4">
					<div class="card">
						<div class="card-body">
							<?php
							if (isset($_GET['alert'])) {
								if ($_GET['alert'] == "gagal") {
									echo "<div class='alert alert-danger font-weight-bold text-center'>LOGIN GAGAL !</div>";
								}else if($_GET['alert']== "belum login"){
									echo "<div class='alert alert-danger font-weight-bold text-center'>SILAHKAN LOGIN TERLEBIH DAHULU</div>";
								}else if($_GET['alert']=="logout"){
									echo "<div class='alert alert-success font-weight-bold text-center'></div>";
								}
							}   
							?>

							<h4 class="font-weight-bold text-center mb-3 mt-3"  >LOGIN</h4>

							<!-- validasi error -->
							<?php echo validation_errors(); ?>
							<form method="post" action="<?php echo base_url(); ?>login/login_aksi">

								<div class="form-group">
									<label for="username">Username</label>
									<input type="text" name="username" class="form-control" placeholder="Masukkan Username">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="form-control" placeholder="Masukkan Password">
								</div>
								<div class="form-group">
									<label for="sebagai">Login Sebagai</label>
									<select name="sebagai" class="form-control">
										<option value="admin">Admin</option>
										<option value="petugas">Petugas</option>
									</select>
								</div>
								<button type="submit" class="btn btn-primary">Login</button>
							</form>
						</div>
					</div>
				</div>

			</div>

		</body>
		</html>












