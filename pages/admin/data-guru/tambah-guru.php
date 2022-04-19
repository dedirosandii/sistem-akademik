<div class="content">
	<div class="container-fluid">
		<a href="?page=data-guru" class="btn-back-tambah-guru"><i class="fas fa-arrow-circle-left"></i></a>
		<div class="row">
			<div class="col-12">
				<div class="card card-data-guru">
					<div class="card-header">
						<span class="h6">Tambah Data Guru</span>
					</div>
					<div class="card-body">
						<form action="#" method="post" enctype="multipart/form-data">
							<div class="row form-tambah-guru">
								<div class="col-md-6">
									<div class="form-group row mt-4">
										<label for="nis" class="col-sm-4 col-form-label">Nip</label>
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
										<label for="nama_guru" class="col-sm-4 col-form-label">Nama Lengkap</label>
										<div class="col-sm-8">
											<input type="text" id="nama_guru" name="nama_guru" class="form-control" autocomplete="off" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="tempat_lahir" class="col-sm-4 col-form-label">Tempat Lahir</label>
										<div class="col-sm-8">
											<input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control" autocomplete="off" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="tgl_lahir" class="col-sm-4 col-form-label">Tanggal Lahir</label>
										<div class="col-sm-8">
											<input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" autocomplete="off" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="jenis_kelamin" class="col-sm-4 col-form-label">Jenis Kelamin</label>
										<div class="col-sm-8">
											<select name="jenis_kelamin" id="jenis_kelamin" class="form-control" required>
												<option value="null">- Pilih Jenis Kelamin -</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="email" class="col-sm-4 col-form-label">Alamat Email</label>
										<div class="col-sm-8">
											<input type="text" id="email" name="email" class="form-control" autocomplete="off" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="foto" class="col-sm-4 col-form-label">Foto</label>
										<div class="col-sm-8">
											<input type="file" id="foto" name="foto" class="d-none" onchange="$('.label-info').html($(this).val())" autocomplete="off">
											<button type="button" class="btn btn-primary btn-sm" onclick="browse()"><i class="fas fa-search"></i> Browse</button>
											<span class="label label-info badge badge-info mt-1" style="font-size: 14px; font-weight:600;"></span>
										</div>
									</div>
								</div>

								<div class="col-md-6">
									<div class="form-group row mt-4">
										<label for="nik" class="col-sm-4 col-form-label">NIK</label>
										<div class="col-sm-8">
											<input type="text" id="nik" name="nik" class="form-control" autocomplete="off" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="bidang_studi" class="col-sm-4 col-form-label">Bidang Studi</label>
										<div class="col-sm-8">
											<input type="text" id="bidang_studi" name="bidang_studi" class="form-control" autocomplete="off" required>
										</div>
									</div>
									<div class="form-group row">
										<label for="jenis_ptk" class="col-sm-4 col-form-label">Jenis PTK</label>
										<div class="col-sm-8">
											<select name="jenis_ptk" id="jenis_ptk" class="form-control" required>
												<option value="null">- Pilih Jenis PTK -</option>
												<option value="Tenaga Administrasi Sekolah">Tenaga Administrasi Sekolah</option>
												<option value="Guru Mapel">Guru Mapel</option>
												<option value="Guru BK">Guru BK</option>
												<option value="Guru Kelas">Guru Kelas</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="status_pegawai" class="col-sm-4 col-form-label">Status Pegawai</label>
										<div class="col-sm-8">
											<select name="status_pegawai" id="status_pegawai" class="form-control" required>
												<option value="null">- Pilih Status Kepegawaian -</option>
												<option value="Tenaga Honorer Sekolah">Tenaga Honorer Sekolah</option>
												<option value="Guru Honor Sekolah">Guru Honor Sekolah</option>
												<option value="PNS">PNS</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="status_aktif" class="col-sm-4 col-form-label">Status Keaktifan</label>
										<div class="col-sm-8">
											<select name="status_aktif" id="status_aktif" class="form-control" required>
												<option value="null">- Pilih Status Keaktifan -</option>
												<option value="Aktif">Aktif</option>
												<option value="Tidak Aktif">Tidak Aktif</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<label for="npwp" class="col-sm-4 col-form-label">NPWP</label>
										<div class="col-sm-8">
											<input type="text" id="npwp" name="npwp" class="form-control" autocomplete="off" required>
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
										<label for="alamat" class="col-sm-4 col-form-label">Alamat</label>
										<div class="col-sm-8">
											<textarea name="almaat" id="alamat" cols="30" rows="2" class="form-control" required></textarea>
										</div>
									</div>
								</div>
							</div>
						</form>

						<hr>
						<div class="d-flex justify-content-between">
							<button class="btn btn-info">Tambahkan</button>
							<a href="?page=data-guru" class="btn btn-secondary">Kembali</a>
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