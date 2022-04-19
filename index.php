<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
	<link rel="stylesheet" href="libraries/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="libraries/fontawesome/css/all.min.css" />
	<link rel="stylesheet" href="styles/main.css" />

	<title>SIAKAD | Log in</title>
</head>

<body>
	<main>
		<section class="section-title">
			<a href="index.php">
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
									Silahkan login pada form di bawah ini
								</span>
								<form action="config/login/cek_login.php" method="post">
									<div class="login">
										<div class="form-group">
											<input type="text" name="username" class="form-control h-25 border-1" placeholder="Masukkan Username" />
											<div class="tombol-login d-none d-md-block">
												<span><i class="fas fa-user"></i></span>
											</div>
										</div>
										<div class="form-group">
											<input type="password" name="password" class="form-control h-25 border-1" placeholder="Masukkan Password" />
											<div class="tombol-login d-none d-md-block">
												<span><i class="fas fa-lock"></i></span>
											</div>
										</div>
										<button type="submit" class="btn d-md-block float-end btn-login mt-3 px-4 py-1">
											Login
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
	<script src="libraries/jquery/jquery-3.4.1.min.js"></script>
	<!-- <script src="libraries/bootstrap/js/bootstrap.bundle.min.js"></script> -->
	<script src="libraries/bootstrap/js/bootstrap.min.js"></script>
	<script src="libraries/fontawesome/js/all.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
		AOS.init();
	</script>
	<script src="script/main.js"></script>
</body>

</html>