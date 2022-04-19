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
					<li class="breadcrumb-item"><a href="?page=data-guru">Data Guru</a></li>
					<li class="breadcrumb-item active">Edit Guru</li>
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
	<div class="row">
		<div class="col-12">
			<div class="card card-edit-guru">
				<div class="card-header">
					<span class="h6">Edit Guru</span>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="table-responsive table-detail-guru">
								<table class="table table-bordered table-sm">
									<tr>
										<td width="160" class="bg-light" rowspan="8">
											<img src="components/assets/images/default-icon.jpg" alt="default icon" class="img-thumbnail" style="width: 160px; height: 160px;">
										</td>
										<td style="font-size: 14px;"><b>Nip</b></td>
										<td>
											<input type="text" class="form-control" value="3918123123" required>
										</td>
									</tr>
									<tr>
										<td><b>Password</b></td>
										<td>
											<input type="text" class="form-control" value="2123123" required>
										</td>
									</tr>
									<tr>
										<td><b>Nama Lengkap</b></td>
										<td>
											<input type="text" class="form-control" value="Abyghail Shiddiq" required>
										</td>
									</tr>
									<tr>
										<td><b>Tempat Lahir</b></td>
										<td>
											<input type="text" class="form-control" value="Bogor" required>
										</td>
									</tr>
									<tr>
										<td><b>Tanggal Lahir</b></td>
										<td>
											<input type="date" class="form-control" value="1987-01-02" required>
										</td>
									</tr>
									<tr>
										<td><b>Jenis Kelamin</b></td>
										<td>
											<input type="text" class="form-control" value="Pria" required>
										</td>
									</tr>
									<tr>
										<td><b>Alamat Email</b></td>
										<td>
											<input type="text" class="form-control" value="abyghail10@gmail.com" required>
										</td>
									</tr>
									<tr>
										<td><b>Ganti Foto</b></td>
										<td>
											<input type="file" id="foto" name="foto" class="d-none" onchange="$('.label-info').html($(this).val())" autocomplete="off">
											<button type="button" class="btn btn-primary btn-sm" onclick="browse()"><i class="fas fa-search"></i> Browse</button>
											<span class="label label-info badge badge-info mt-1" style="font-size: 14px; font-weight:600;"></span>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div class="col-md-6">
							<div class="table-responsive">
								<table class="table table-bordered table-sm">
									<tr>
										<td><b>NIK</b></td>
										<td>
											<input type="text" class="form-control" value="1002010237812" required>
										</td>
									</tr>
									<tr>
										<td><b>Bidang Studi</b></td>
										<td>
											<input type="text" class="form-control" value="Seni Budaya" required>
										</td>
									</tr>
									<tr>
										<td><b>Jenis PTK</b></td>
										<td>
											<input type="text" class="form-control" value="Guru Mapel" required>
										</td>
									</tr>
									<tr>
										<td><b>Status Pegawai</b></td>
										<td>
											<input type="text" class="form-control" value="PNS" required>
										</td>
									</tr>
									<tr>
										<td><b>Status Keaktifan</b></td>
										<td>
											<input type="text" class="form-control" value="Aktif" required>
										</td>
									</tr>
									<tr>
										<td><b>NPWP</b></td>
										<td>
											<input type="text" class="form-control" value="4899918239712" required>
										</td>
									</tr>
									<tr>
										<td><b>Agama</b></td>
										<td>
											<input type="text" class="form-control" value="Islam" required>
										</td>
									</tr>
									<tr>
										<td><b>Alamat</b></td>
										<td>
											<textarea name="alamat" id="alamat" cols="30" rows="2" class="form-control" placeholder="Tangerang Selatang">Tangerang Selatan</textarea>
										</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<hr>
					<div class="d-flex justify-content-between">
						<button class="btn btn-success">Update</button>
						<a href="?page=data-guru" class="btn btn-secondary">Kembali</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	function browse() {
		$("#foto").click();
	}
</script>