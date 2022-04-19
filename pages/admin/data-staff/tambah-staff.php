<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Tambah Staff</h1>
			</div>
			<!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="?page=home">Home</a></li>
					<li class="breadcrumb-item"><a href="?page=home">Data Staff</a></li>
					<li class="breadcrumb-item active">Tambah Staff</li>
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
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="card card-tambah-staff">
					<div class="card-header">
						<span class="h5">Tambah Data Staff</span>
					</div>
					<div class="card-body">
						<form action="" class="form-tambah-staff">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group row">
										<label for="NIP" class="col-sm-4 col-form-label">NIP</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="Nama" class="col-sm-4 col-form-label">Nama Lengkap</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="Email" class="col-sm-4 col-form-label">Email</label>
										<div class="col-sm-8">
											<input type="email" class="form-control" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="Password" class="col-sm-4 col-form-label">Password</label>
										<div class="col-sm-8">
											<input type="password" class="form-control" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="Password2" class="col-sm-4 col-form-label">Confirm Password</label>
										<div class="col-sm-8">
											<input type="password" class="form-control" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="Jenis Kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
										<div class="col-sm-8">
											<select name="jenis_kelamin" id="Jenis Kelamin" class="form-control" required>
												<option value="null">- Pilih Jenis Kelamin -</option>
												<option value="Pria">Pria</option>
												<option value="Wanita">Wanita</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="Agama" class="col-sm-4 col-form-label">Agama</label>
										<div class="col-sm-8">
											<select name="agama" id="Agama" class="form-control" required>
												<option value="null">- Pilih Agama -</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group row">
										<label for="nik" class="col-sm-4 col-form-label">NIK</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="Jabatan" class="col-sm-4 col-form-label">Jabatan</label>
										<div class="col-sm-8">
											<select name="jabatan" id="Jabatan" class="form-control" required>
												<option value="null">- Pilih Jabatan -</option>
												<option value="Security">Security</option>
												<option value="Office Boy">Office Boy</option>
												<option value="Staff TU">Staff TU</option>
												<option value="Staff Administrator">Staff Administrator</option>
												<option value="IT Staff">IT Staff</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
										<div class="col-sm-8">
											<input type="text" class="form-control" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="tempat_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
										<div class="col-sm-8">
											<input type="date" class="form-control" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
										<div class="col-sm-8">
											<textarea name="alamat" id="alamat" cols="30" rows="2" class="form-control"></textarea>
										</div>
									</div>
									<div class="form-group row">
										<label for="tempat_lahir" class="col-sm-4 col-form-label">Foto</label>
										<div class="col-sm-8">
											<input type="file" id="foto" name="foto" class="d-none" onchange="$('.label-info').html($(this).val())" autocomplete="off">
											<button type="button" class="btn btn-primary btn-sm" onclick="browse()"><i class="fas fa-search"></i> Browse</button>
											<span class="label label-info badge badge-info mt-1" style="font-size: 14px; font-weight:600;"></span>
										</div>
									</div>
								</div>
							</div>
						</form>
						<hr>
						<div class="d-flex justify-content-between">
							<button class="btn btn-primary">Tambah</button>
							<a href="?page=data-staff" class="btn btn-secondary">Kembali</a>
						</div>
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