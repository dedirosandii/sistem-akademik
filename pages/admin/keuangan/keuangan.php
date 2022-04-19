<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Keuangan</h1>
			</div>
			<!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="?page=home">Home</a></li>
					<li class="breadcrumb-item active">Keuangan</li>
				</ol>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="card card-absensi-guru">
				<div class="card-header border-bottom-0">
					<span class="h5">Keuangan</span>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group row">
								<div class="col-sm-4">
									<select name="namaSiswa" id="NamaSiswa" class="select-nama-siswa form-control mt-3">
										<option value=""></option>
										<option value="aby">aby</option>
									</select>
								</div>
								<div class="col-sm-4">
									<select name="tahunAjaran" id="tahunAjaran" class="select-tahun form-control mt-3">
										<option value=""></option>
										<option value="2022">2022</option>
									</select>
								</div>
								<div class="col-sm-4">
									<button type="button" class="btn btn-sm btn-primary">Tampilkan</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="card card-tagihan-umum">
				<div class="card-header border-bottom-0">
					<span class="h5">Data Tagihan Semester</span>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-sm">
							<thead>
								<tr>
									<th>No Tagihan</th>
									<th>Pembayaran</th>
									<th>Jumlah Bayar</th>
									<th>Status Bayar</th>
									<th>Tanggal Bayar</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1161523121</td>
									<td>Januari</td>
									<td>Rp. 200.000</td>
									<td>
										<div class="badge badge-success">
											<span>Lunas</span>
										</div>
									</td>
									<td>01-11-2021</td>
									<td>
										<div class="d-flex justify-content-start align-items-center">
											<button type="button" data-toggle="modal" data-target="#modalDetailKeuangan" class="btn btn-warning btn-sm text-white">Lihat</button>
											<button type="button" data-toggle="modal" data-target="#modalEditKeuangan" class="btn btn-info btn-sm mx-2 text-white">Edit</button>
											<button type="button" data-toggle="modal" data-target="#modalHapusKeuangan" class="btn btn-danger btn-sm text-white">Hapus</button>
										</div>
									</td>
									<?php
									include_once "admin/keuangan/modal/modal_details.php";
									include_once "admin/keuangan/modal/modal_edit.php";
									include_once "admin/keuangan/modal/modal_hapus.php";
									?>
								</tr>
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
		$(".select-nama-siswa").select2({
			theme: "classic",
			width: "100%",
			placeholder: "Nama Siswa",
			closeOnSelect: true,
			allowClear: true
		});
		$(".select-tahun").select2({
			theme: "classic",
			width: "100%",
			placeholder: "Pilih Tahun",
			closeOnSelect: true,
			allowClear: true
		});
	});
</script>