<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Data Siswa</h1>
			</div>
			<!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="?page=home">Home</a></li>
					<li class="breadcrumb-item active">Data Siswa</li>
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
						<p class="h5 ">Semua Data Siswa</p>
						<div class="row justify-content-end align-content-center">
							<div class="col-sm-2">
								<div class="form-group">
									<input type="number" class="form-control" placeholder="Angkatan" autocomplete="off">
								</div>
							</div>
							<div class="col-sm-2">
								<div class="form-group">
									<select name="kelas" id="kelas" class="form-control" autocomplete="off">
										<option value="pilih">pilih</option>
									</select>
								</div>
							</div>
							<div class="col-auto">
								<button class="btn btn-info">Tampilkan</button>
							</div>
							<div class="col-auto">
								<a href="?page=tambah-siswa" class="btn btn-success">Tambah Data</a>
							</div>
						</div>

						<div class="row justify-content-center mt-3">
							<div class="col-sm-12">
								<div class="tabel-data-siswa">
									<div class="d-flex justify-content-end">
										<a href="#" class="btn btn-primary btn-sm my-3 px-3">Print</a>
									</div>
									<div class="table-responsive">
										<table class="table table-bordered table-sm" id="tabel-data-siswa">
											<thead>
												<tr>
													<th>No</th>
													<th>NIS</th>
													<th>Nama</th>
													<th>Tanggal Lahir</th>
													<th>Kelas</th>
													<th>Wali Kelas</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>2016141739</td>
													<td>Abyghail Shiddiq</td>
													<td>01-01-01</td>
													<td>IX</td>
													<td>Sri Wahyuni</td>
													<td>
														<div class="dropdown d-flex justify-content-center">
															<button type="button" class="btn btn-secondary dropdown-toggle btn-sm" id="dropdownMenuSiswa" data-toggle="dropdown" aria-expanded="false">
																Menu
															</button>
															<div class="dropdown-menu " aria-labelledby="dropdownMenuSiswa">
																<a href="?page=detail-siswa" class="dropdown-item ">
																	<i class="fas fa-search-plus"></i>
																	<span class="">Detail</span>
																</a>
																<a href="?page=edit-siswa" class="dropdown-item ">
																	<i class="fas fa-edit"></i>
																	<span class="">Edit</span>
																</a>
																<div class="dropdown-divider"></div>
																<a href="" class="dropdown-item ">
																	<i class="fas fa-trash"></i>
																	<span class="">Hapus</span>
																</a>
															</div>
														</div>
														<div class="justify-content-center d-none">
															<a href="#" class="btn btn-sm btn-warning mr-2">Edit</a>
															<button type="button" data-toggle="modal" data-target="#modalHapus" class="btn btn-sm btn-danger">Hapus</button>
														</div>
													</td>
													<?php include_once "admin/data-siswa/modal/modal-hapus.php"; ?>
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
		$("#tabel-data-siswa").DataTable({
			responsive: true,
			lengthMenu: [10, 15, 25, 50]
		});
	});
</script>