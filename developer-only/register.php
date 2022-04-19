<?php
require_once "../config/koneksi/koneksi.php";
if (isset($_POST["submit"])) {
	$nama = $_POST["nama"];
	$email = $_POST["email"];
	$no_hp = $_POST["no_hp"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$alamat = $_POST["alamat"];
	$password = password_hash($password, PASSWORD_DEFAULT);

	$insert = mysqli_query($koneksi, "INSERT INTO admin VALUES ('', '$nama', '$email', '$username', '$password', 'admin', '$no_hp', '$alamat')");

	if ($insert) {
		header("location: ../index.php");
		exit;
	} else {
		header("location: register.php");
		exit;
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
	<link rel="stylesheet" href="../libraries/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../libraries/fontawesome/css/all.min.css" />
	<link rel="stylesheet" href="../styles/main.css" />
	<title>Register (developer)</title>
</head>

<body>
	<main>
		<section class="section-title">
			<a href="#">
				<h2 class="text-center text-uppercase fw-bold">Sistem Informasi</h2>
				<h5 class="text-center text-uppercase">Akademik</h5>
			</a>
		</section>
		<section class="form">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-4">
						<div class="card card-login text-center">
							<div class="card-body">
								<span class="title">
									Silahkan regis
								</span>
								<form action="" method="post">
									<div class="login">
										<div class="form-group">
											<input type="text" class="form-control h-25 border-1" name="nama" placeholder="Masukkan Nama" required autocomplete="off" />
										</div>
										<div class="form-group">
											<input type="email" class="form-control h-25 border-1" name="email" placeholder="Masukkan Email" required autocomplete="off" />
										</div>
										<div class="form-group">
											<input type="text" class="form-control h-25 border-1" name="no_hp" placeholder="Nomor HP" required autocomplete="off" />
										</div>
										<div class="form-group">
											<input type="text" class="form-control h-25 border-1" name="username" placeholder="Masukkan Username" required autocomplete="off" />
											<div class="tombol-login d-none d-md-block">
												<span><i class="fas fa-user"></i></span>
											</div>
										</div>
										<div class="form-group">
											<input type="password" class="form-control h-25 border-1" name="password" placeholder="Masukkan Password" required autocomplete="off" />
											<div class="tombol-login d-none d-md-block">
												<span><i class="fas fa-lock"></i></span>
											</div>
										</div>
										<div class="form-group">
											<textarea name="alamat" id="alamat" rows="2" class="form-control" placeholder="Masukkan Alamat" required autocomplete="off"></textarea>
										</div>
										<span class="d-flex mt-2"><a href="../index.php">Login</a></span>
										<button type="submit" name="submit" class="btn d-md-block float-end btn-login mt-3 px-4 py-1">
											Register
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<script src="../libraries/jquery/jquery-3.4.1.min.js"></script>
	<!-- <script src="libraries/bootstrap/js/bootstrap.bundle.min.js"></script> -->
	<script src="../libraries/bootstrap/js/bootstrap.min.js"></script>
	<script src="../libraries/fontawesome/js/all.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
	<script src="../script/main.js"></script>
</body>

</html>