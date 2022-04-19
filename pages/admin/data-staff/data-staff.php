<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Data Staff</h1>
			</div>
			<!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="?page=home">Home</a></li>
					<li class="breadcrumb-item active">Data Staff</li>
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
				<div class="card card-data-siswa">
					<div class="card-body">
						<p class="h5 ">Semua Data Staff</p>
						<div class="d-flex justify-content-between mt-4">
							<a href="?page=tambah-staff" class="btn btn-success btn-sm">Tambah Data Staff</a>
							<a href="#" class="btn btn-primary btn-sm">Print</a>
						</div>
						<div class="row d-flex justify-content-center mt-3">
							<div class="col-md-12">
								<table class="table table-bordered table-sm" id="tabel-data-staff">
									<thead>
										<tr>
											<th>No</th>
											<th>NIP</th>
											<th>Nama Staff</th>
											<th>Jenis Kelamin</th>
											<th>Tanggal Lahir</th>
											<th>Jabatan</th>
											<th>Status</th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>1200019283612</td>
											<td>Abyghail Shiddiq</td>
											<td>Pria</td>
											<td>24-12-1998</td>
											<td>IT Staff</td>
											<td>Aktif</td>
											<td>
												<div class="dropdown d-flex justify-content-center">
													<button class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuStaff" data-toggle="dropdown" aria-expanded="false">
														Menu
													</button>
													<div class="dropdown-menu">
														<a href="?page=detail-staff" class="dropdown-item">
															<i class="fas fa-search"></i>
															Details
														</a>
														<a href="?page=edit-staff" class="dropdown-item">
															<i class="fas fa-edit"></i>
															Edit
														</a>
														<div class="dropdown-divider"></div>
														<a href="#" class="dropdown-item">
															<i class="fas fa-trash"></i>
															Hapus
														</a>
													</div>
												</div>
											</td>
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

<script>
	$(document).ready(function() {
		$("#tabel-data-staff").DataTable({
			responsive: true,
			lengthMenu: [10, 15, 25, 50]
		});
	});
</script>