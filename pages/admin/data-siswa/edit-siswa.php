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
					<li class="breadcrumb-item"><a href="?page=data-siswa">Data Siswa</a></li>
					<li class="breadcrumb-item active">Edit Siswa</li>
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
		<a href="?page=data-siswa" class="btn-back-edit-siswa"><i class="fas fa-arrow-circle-left"></i></a>
		<div class="row">
			<div class="col-12">
				<div class="card card-data-siswa">
					<div class="card-header">
						<span class="h6">Edit Data Siswa</span>
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
									<div class="row form-edit-siswa mt-3">
										<div class="col-md-6">
											<div class="table-responsive table-edit-siswa">
												<table class="table table-bordered table-sm">
													<tr>
														<td width="160" class="bg-light" rowspan="99">
															<img src="components/assets/images/default-icon.jpg" alt="default icon" class="img-thumbnail" style="width: 160px; height: 160px;">
														</td>
														<td style="font-size: 14px;"><b>NIS</b></td>
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
														<td><b>Kelas</b></td>
														<td>
															<input type="text" class="form-control" value="Kelas X 1 IPA" required>
														</td>
													</tr>
													<tr>
														<td><b>Angkatan</b></td>
														<td>
															<input type="text" class="form-control" value="2016" required>
														</td>
													</tr>
													<tr>
														<td><b>Jurusan</b></td>
														<td>
															<input type="text" class="form-control" value="IPA" required>
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
														<td><b>Alamat</b></td>
														<td>
															<textarea name="alamat" id="alamat" cols="30" rows="2" class="form-control">Tangerang Selatan</textarea>
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
									<div class="row form-detail-wali mt-3">
										<!-- data ayah -->
										<div class="col-md-6">
											<div class="table-responsive table-edit-wali">
												<table class="table table-bordered table-sm">
													<tr>
														<td><b>Nama Ayah</b></td>
														<td>
															<input type="text" value="Thor" class="form-control" required>
														</td>
													</tr>
													<tr>
														<td><b>Tanggal Lahir</b></td>
														<td>
															<input type="date" value="1968-02-02" class="form-control" required>
														</td>
													</tr>
													<tr>
														<td><b>Pendidikan</b></td>
														<td>
															<input type="text" value="Strata 1 (S1)" class="form-control" required>
														</td>
													</tr>
													<tr>
														<td><b>Pekerjaan</b></td>
														<td>
															<input type="text" value="Pegawai Swasta" class="form-control" required>
														</td>
													</tr>
													<tr>
														<td><b>Agama</b></td>
														<td>
															<input type="text" value="Islam" class="form-control" required>
														</td>
													</tr>
													<tr>
														<td><b>No Telpon</b></td>
														<td>
															<input type="text" value="0821231231" class="form-control" required>
														</td>
													</tr>
												</table>
											</div>
										</div>
										<!-- data ibu -->
										<div class="col-md-6">
											<div class="table-responsive table-edit-wali">
												<table class="table table-bordered table-sm">
													<tr>
														<td><b>Nama Ibu</b></td>
														<td>
															<input type="text" value="Steffanie" class="form-control" required>
														</td>
													</tr>
													<tr>
														<td><b>Tanggal Lahir</b></td>
														<td>
															<input type="date" value="1968-02-02" class="form-control" required>
														</td>
													</tr>
													<tr>
														<td><b>Pendidikan</b></td>
														<td>
															<input type="text" value="Strata 1 (S1)" class="form-control" required>
														</td>
													</tr>
													<tr>
														<td><b>Pekerjaan</b></td>
														<td>
															<input type="text" value="Ibu Rumah Tangga" class="form-control" required>
														</td>
													</tr>
													<tr>
														<td><b>Agama</b></td>
														<td>
															<input type="text" value="Islam" class="form-control" required>
														</td>
													</tr>
													<tr>
														<td><b>No Telpon</b></td>
														<td>
															<input type="text" value="0821231231" class="form-control" required>
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="clear-fix"></div>
								<hr>
								<div class="d-flex justify-content-between mt-2">
									<button class="btn btn-success">Update</button>
									<a href="?page=data-siswa" class="btn btn-secondary ">Kembali</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>