<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Sistem Akademik</title>
	<?php include "layouts/style.php" ?>
</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<?php if ($_SESSION["role"] == "admin") { ?>
			<?php include "layouts/navbar/admin/navbar-admin.php" ?>
		<?php } ?>

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->
			<a href="#" class="brand-link text-center">
				<span class="brand-text font-weight-light font-weight-bold">SIAKAD</span>
			</a>

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user panel (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="components/assets/vendor/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
					</div>
					<div class="info">
						<a href="#" class="d-block"><?= $_SESSION['nama']; ?></a>
						<span class="text-info"><?= $_SESSION['role']; ?></span>
					</div>
				</div>

				<?php if ($_SESSION["role"] == "admin") { ?>
					<!-- Sidebar Menu admin -->
					<?php include "layouts/sidebar/admin/sidebar-admin.php"; ?>
					<!-- /.sidebar-menu admin -->
				<?php } ?>
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Main content -->
			<?php
			if ($_SESSION["role"] == "admin") {
			?>
				<?php
				if (isset($_GET["page"])) {
					$page = $_GET["page"];
					switch ($page) {
						case 'home':
							include "layouts/dashboard/home.php";
							break;

							// data-siswa
						case 'data-siswa':
							include "admin/data-siswa/data-siswa.php";
							break;

						case 'tambah-siswa':
							include "admin/data-siswa/tambah-siswa.php";
							break;

						case 'detail-siswa':
							include "admin/data-siswa/detail-siswa.php";
							break;

						case 'edit-siswa':
							include "admin/data-siswa/edit-siswa.php";
							break;

							// data-guru 
						case 'data-guru':
							include "admin/data-guru/data-guru.php";
							break;

						case 'tambah-guru':
							include "admin/data-guru/tambah-guru.php";
							break;

						case 'detail-guru':
							include "admin/data-guru/detail-guru.php";
							break;

						case 'edit-guru':
							include "admin/data-guru/edit-guru.php";
							break;

							//data staff
						case 'data-staff':
							include "admin/data-staff/data-staff.php";
							break;

						case 'tambah-staff':
							include "admin/data-staff/tambah-staff.php";
							break;

						case 'detail-staff':
							include "admin/data-staff/detail-staff.php";
							break;

						case 'edit-staff':
							include "admin/data-staff/edit-staff.php";
							break;

							// absensi guru
						case 'absensi-guru':
							include "admin/absensi-guru/absensi-guru.php";
							break;

							// bahan tugas
						case 'bahan-tugas':
							include "admin/bahan-tugas/bahan-tugas.php";
							break;

							// keuangan
						case 'keuangan':
							include "admin/keuangan/keuangan.php";
							break;

							// document
						case 'dokumen':
							include "admin/dokumen/dokumen.php";
							break;

						default:
							echo "<h2 class='text-center font-weight-bold'>Halaman Tidak Ada</h2>";
							break;
					}
				} else {
					include "layouts/dashboard/home.php";
				}
				?>
			<?php } ?>
			<!-- /.content -->
		</div>

		<!-- modal-logout -->
		<div class="modal fade" id="modalLogout" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Hallo
							<span class="font-weight-bold"><?= $_SESSION["nama"]; ?></span>
						</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p class="h5">Apakah anda ingin logout dan mengakhiri sesi?</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger px-4" data-dismiss="modal">Tidak!</button>
						<a href="../config/logout/logout.php" class="btn btn-primary px-4">Ya!</a>
					</div>
				</div>
			</div>
		</div>

		<!-- end modal logout -->

		<!-- Control Sidebar -->
		<aside class="control-sidebar control-sidebar-dark">
			<!-- Control sidebar content goes here -->
			<div class="p-3">
				<h5>Title</h5>
				<p>Sidebar content</p>
			</div>
		</aside>
		<!-- /.control-sidebar -->

		<!-- Main Footer -->
		<?php include "layouts/footer.php"; ?>
	</div>
	<!-- ./wrapper -->

	<?php include "layouts/script.php"; ?>
</body>

</html>