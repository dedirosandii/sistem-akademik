<?php
// session_start();
require_once "../config/koneksi/koneksi.php";
?>
<?php
$role = $_SESSION["role"];
?>
<?php if ($_SESSION["role"] == "admin") { ?>
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dashboard</h1>
				</div>
				<!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item active">Home</li>
						<!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
					</ol>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<?php include "layouts/info-box/info-box-admin.php"; ?>
				<!-- info box -->
			</div>
			<?php include "admin/dashboard/dashboard-admin.php"; ?>
		</div>
	</div>
<?php } ?>