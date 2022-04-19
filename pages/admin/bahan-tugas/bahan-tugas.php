<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Bahan Tugas</h1>
			</div>
			<!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="?page=home">Home</a></li>
					<li class="breadcrumb-item active">Bahan Tugas</li>
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
			<div class="col-lg-7">
				<div class="card card-data-bahan-tugas shadow-sm">
					<div class="card-header border-0">
						<span class="h5">Data Bahan Tugas</span>
					</div>
					<div class="card-body">
						<table class="table table-sm" id="tabel-data-bahan-tugas">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Mata Pelajaran</th>
									<th>Kelas</th>
									<th>Tanggal</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Abyghail Shiddiq</td>
									<td>Seni Budaya</td>
									<td>X IPA II</td>
									<td>01-01-2022</td>
									<td>
										<button class="btn btn-sm btn-secondary">Menu</button>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="card shadow-sm card-file-bahan">
					<div class="card-header border-0">
						<span class="h5">My Files Upload</span>
					</div>
					<div class="card-body">
						<button type="button" data-toggle="modal" data-target="#modalBahanTugas" class="btn btn-sm btn-primary mb-3">Tambah File</button>
						<table class="table table-sm" id="tabel-my-bahan">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama File</th>
									<th>Kelas</th>
									<th>Tanggal</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Seni-Budaya-mei.pdf</td>
									<td>X IPA II</td>
									<td>01-01-2022</td>
									<td>
										<div class="btn btn-sm btn-info">
											<i class="fas fa-caret-down" aria-hidden="true"></i>
										</div>
									</td>
								</tr>
								<?php include "admin/bahan-tugas/modal/modalBahanTugas.php"; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$("#tabel-data-bahan-tugas").DataTable();
	});
</script>