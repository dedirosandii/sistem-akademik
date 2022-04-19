<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Tambah Siswa</h1>
			</div>
			<!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="?page=home">Home</a></li>
					<li class="breadcrumb-item"><a href="?page=data-siswa">Data Siswa</a></li>
					<li class="breadcrumb-item active">Tambah Siswa</li>
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
		<a href="?page=data-siswa" class="btn-back-tambah-siswa"><i class="fas fa-arrow-circle-left"></i></a>
		<div class="row">
			<div class="col-12">
				<div class="card card-data-siswa">
					<div class="card-header">
						<span class="h6">Tambah Data Siswa</span>
					</div>
					<div class="card-body">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Siswa</a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Data Orang Tua / Wali</a>
							</li>
						</ul>
						<form action="#" method="post" enctype="multipart/form-data">
							<div class="tab-content px-2" id="myTabContent">
								<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
									<div class="row form-tambah-siswa">
										<div class="col-md-6">
											<div class="form-group row mt-4">
												<label for="nis" class="col-sm-4 col-form-label">NIS</label>
												<div class="col-sm-8">
													<input type="text" name="nis" class="form-control" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="password" class="col-sm-4 col-form-label">Password</label>
												<div class="col-sm-8">
													<input type="Password" name="password" id="password" class="form-control" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="password_confirm" class="col-sm-4 col-form-label">Confirm Password</label>
												<div class="col-sm-8">
													<input type="Password" name="password_confirm" id="password_confirm" class="form-control" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="nama_siswa" class="col-sm-4 col-form-label">Nama Siswa</label>
												<div class="col-sm-8">
													<input type="text" id="nama_siswa" name="nama_siswa" class="form-control" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="kelas" class="col-sm-4 col-form-label">Kelas</label>
												<div class="col-sm-8">
													<select name="kelas" id="kelas" class="form-control" required>
														<option value="pilih">- Pilih Kelas -</option>
														<option value="X IPA 1">Kelas X IPA 1</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label for="angkatan" class="col-sm-4 col-form-label">Angkatan</label>
												<div class="col-sm-8">
													<input type="text" id="angkatan" name="angkatan" class="form-control" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="jurusan" class="col-sm-4 col-form-label">Jurusan</label>
												<div class="col-sm-8">
													<select name="jurusan" id="jurusan" class="form-control" required>
														<option value="pilih">- Pilih Jurusan -</option>
														<option value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
												<div class="col-sm-8">
													<textarea name="alamat" id="alamat" cols="10" rows="1" class="form-control" required></textarea>
												</div>
											</div>
											<div class="form-group row">
												<label for="foto" class="col-sm-4 col-form-label">Foto</label>
												<div class="col-sm-8">
													<input type="file" id="foto" name="foto" class="d-none" onchange="$('.label-info').html($(this).val())" autocomplete="off">
													<button class="btn btn-primary btn-sm" onclick="browse()"><i class="fas fa-search"></i> Browse</button>
													<span class="label label-info badge badge-info mt-1" style="font-size: 14px; font-weight:600;"></span>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group row mt-4">
												<label for="no_kk" class="col-sm-4 col-form-label">Nomor KK</label>
												<div class="col-sm-8">
													<input type="text" name="no_kk" class="form-control" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
												<div class="col-sm-8">
													<input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="tanggal_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
												<div class="col-sm-8">
													<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
												<div class="col-sm-8">
													<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
														<option value="pilih">- Pilih Jenis Kelamin</option>
														<option value="Pria">Pria</option>
														<option value="Wanita">Wanita</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label for="agama" class="col-sm-4 col-form-label">Agama</label>
												<div class="col-sm-8">
													<select name="agama" id="agama" class="form-control" required>
														<option value="pilih">- Pilih Agama</option>
														<option value="Islam">Islam</option>
														<option value="Kristen">Kristen</option>
														<option value="Hindu">Hindu</option>
														<option value="Budha">Budha</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label for="no_telp" class="col-sm-4 col-form-label">No Telp</label>
												<div class="col-sm-8">
													<input type="text" name="no_telp" class="form-control" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="email" class="col-sm-4 col-form-label">Email</label>
												<div class="col-sm-8">
													<input type="text" name="email" class="form-control" autocomplete="off">
												</div>
											</div>
											<div class="form-group row">
												<label for="" class="col-sm-4 col-form-label">Status</label>
												<div class="col-sm-8">
													<div class="form-check form-check-inline mt-2">
														<input class="form-check-input" type="radio" name="status" id="Aktif" value="Aktif" checked>
														<label class="form-check-label" for="Aktif">Aktif</label>
													</div>
													<div class="form-check form-check-inline mt-2">
														<input class="form-check-input" type="radio" name="status" id="Tidak Aktif" value="Tidak Aktif">
														<label class="form-check-label" for="Tidak Aktif">Tidak Aktif</label>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									<div class="row form-tambah-wali">
										<!-- data ayah -->
										<div class="col-md-10">
											<div class="form-group row mt-4 head-form-info py-2">
												<label for="nama_wali_ayah" class="col-sm-2 col-form-label">Nama Ayah</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="nama_wali_ayah" name="nama_wali[]" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="tgl_lahir_wali_ayah" class="col-sm-2 col-form-label">Tanggal Lahir</label>
												<div class="col-sm-10">
													<input type="date" class="form-control" id="tgl_lahir_wali_ayah" name="tgl_lahir_wali[]" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="pendidikan_wali_ayah" class="col-sm-2 col-form-label">Pendidikan</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="pendidikan_wali_ayah" name="pendidikan_wali[]" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="pekerjaan_wali_ayah" class="col-sm-2 col-form-label">Pekerjaan</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="pekerjaan_wali_ayah" name="pekerjaan_wali[]" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="agama_wali_ayah" class="col-sm-2 col-form-label">Agama</label>
												<div class="col-sm-10">
													<select name="agama_wali[]" id="agama_wali_ayah" class="form-control">
														<option value="pilih">- Pilih Agama</option>
														<option value="Islam">Islam</option>
														<option value="Kristen">Kristen</option>
														<option value="Hindu">Hindu</option>
														<option value="Budha">Budha</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label for="no_telp_wali_ayah" class="col-sm-2 col-form-label">No Telp</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="no_telp_wali_ayah" name="no_telp_wali[]" autocomplete="off" required>
												</div>
											</div>
										</div>
										<!-- data ibu -->
										<div class="col-md-10">
											<div class="form-group head-form-info py-2 row mt-4">
												<label for="nama_wali_ibu" class="col-sm-2 col-form-label">Nama Ibu</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="nama_wali_ibu" name="nama_wali[]" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="tgl_lahir_wali_ibu" class="col-sm-2 col-form-label">Tanggal Lahir</label>
												<div class="col-sm-10">
													<input type="date" class="form-control" id="tgl_lahir_wali_ibu" name="tgl_lahir_wali[]" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="pendidikan_wali_ibu" class="col-sm-2 col-form-label">Pendidikan</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="pendidikan_wali_ibu" name="pendidikan_wali[]" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="pekerjaan_wali_ibu" class="col-sm-2 col-form-label">Pekerjaan</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="pekerjaan_wali_ibu" name="pekerjaan_wali[]" autocomplete="off" required>
												</div>
											</div>
											<div class="form-group row">
												<label for="agama_wali_ibu" class="col-sm-2 col-form-label">Agama</label>
												<div class="col-sm-10">
													<select name="agama_wali[]" id="agama_wali_ibu" class="form-control">
														<option value="pilih">- Pilih Agama</option>
														<option value="Islam">Islam</option>
														<option value="Kristen">Kristen</option>
														<option value="Hindu">Hindu</option>
														<option value="Budha">Budha</option>
													</select>
												</div>
											</div>
											<div class="form-group row">
												<label for="no_telp_wali_ibu" class="col-sm-2 col-form-label">No Telp</label>
												<div class="col-sm-10">
													<input type="text" class="form-control" id="no_telp_wali_ibu" name="no_telp_wali[]" autocomplete="off" required>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="clear-fix"></div>
								<button class="btn btn-info mt-5">Tambah Data</button>
							</div>
						</form>
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
<!-- <script>
	$(document).ready(function() {
		$("#password_confirm").keyup(function() {
			let password = $("#password").val();
			if (password != $(this).val()) {
				$("#password_confirm").addClass("is-invalid");
				$("#password_confirm").attr("aria-describedby", "pesan");
			} else {
				$("#password_confirm").addClass("is-invalid");
				$("#password_confirm").attr("aria-describedby", "pesan");
			}
		})
	});
</script> -->