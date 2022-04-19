<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Data Guru</h1>
			</div>
			<!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="?page=home">Home</a></li>
					<li class="breadcrumb-item active">Data Guru</li>
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
			<div class="col-12">
				<div class="card card-data-guru">
					<div class="card-body">
						<p class="h5 ">Semua Data Siswa</p>
						<div class="d-flex justify-content-start">
							<a href="?page=tambah-guru" class="btn btn-sm btn-success mt-4">Tambah Data Guru</a>
						</div>
						<div class="row justify-content-center mt-3">
							<div class="col-sm-12">
								<div class="tabel-data-guru">
									<div class="d-flex justify-content-end">
										<a href="#" class="btn btn-primary btn-sm mb-3 px-3">Print</a>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered table-sm" id="tabel-data-guru">
											<thead>
												<tr>
													<th>No</th>
													<th>NIP</th>
													<th>Nama Lengkap</th>
													<th>Jenis Kelamin</th>
													<th>No Telpon</th>
													<th>Status Pegawai</th>
													<th>Jenis PTK</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>2016141739</td>
													<td>Abyghail Shiddiq</td>
													<td>Pria</td>
													<td>08212231412</td>
													<td>PNS</td>
													<td>Guru Mapel</td>
													<td>
														<div class="d-flex justify-content-center">
															<a href="?page=detail-guru" class="btn btn-sm btn-info mr-1"><i class="fas fa-search"></i></a>
															<a href="?page=edit-guru" class="btn btn-sm btn-success mr-1"><i class="fas fa-edit"></i></a>
															<button type="button" data-toggle="modal" data-target="#modalHapus" class="btn btn-sm btn-danger"><i class="fas fa-times"></i></button>
														</div>
													</td>
													<?php include_once "admin/data-guru/modal/modal-hapus.php"; ?>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {
		$("#tabel-data-guru").DataTable({
			responsive: true,
			lengthMenu: [10, 15, 25, 50]
		});
	});
</script>