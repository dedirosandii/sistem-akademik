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
					<li class="breadcrumb-item active">Detail Siswa</li>
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
						<span class="h6">Detail Data Siswa</span>
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
									<div class="row form-tambah-siswa mt-3">
										<div class="col-md-6">
											<div class="table-responsive table-detail-guru">
												<table class="table table-bordered table-sm">
													<tr>
														<td width="160" class="bg-light" rowspan="8">
															<img src="components/assets/images/default-icon.jpg" alt="default icon" class="img-thumbnail" style="width: 160px; height: 160px;">
															<div class="justify-content-center">
																<a href="?page=edit-siswa" class="d-block btn btn-success mt-2">Edit Profile</a>
															</div>
														</td>
														<td style="font-size: 14px;"><b>Nip</b></td>
														<td>3918123123</td>
													</tr>
													<tr>
														<td><b>Password</b></td>
														<td>1002718273</td>
													</tr>
													<tr>
														<td><b>Nama Lengkap</b></td>
														<td>Abyghail Shiddiq</td>
													</tr>
													<tr>
														<td><b>Tempat Lahir</b></td>
														<td>Bogor</td>
													</tr>
													<tr>
														<td><b>Tanggal Lahir</b></td>
														<td>24-02-1978</td>
													</tr>
													<tr>
														<td><b>Jenis Kelamin</b></td>
														<td>Pria</td>
													</tr>
													<tr>
														<td><b>Alamat Email</b></td>
														<td>Abyghail10@gmail.com</td>
													</tr>
													<tr>
														<td><b>Alamat</b></td>
														<td>Tangerang Selatan</td>
													</tr>
												</table>
											</div>
										</div>
										<div class="col-md-6">
											<div class="table-responsive">
												<table class="table table-bordered table-sm">
													<tr>
														<td><b>NIK</b></td>
														<td>100021278123</td>
													</tr>
													<tr>
														<td><b>Bidang Studi</b></td>
														<td>Seni Budaya</td>
													</tr>
													<tr>
														<td><b>Jenis PTK</b></td>
														<td>Guru Mapel</td>
													</tr>
													<tr>
														<td><b>Status Pegawai</b></td>
														<td>PNS</td>
													</tr>
													<tr>
														<td><b>Status Keaktifan</b></td>
														<td>Aktif</td>
													</tr>
													<tr>
														<td><b>NPWP</b></td>
														<td>99999999999</td>
													</tr>
													<tr>
														<td><b>Agama</b></td>
														<td>Islam</td>
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
											<div class="table-responsive">
												<table class="table table-bordered table-sm">
													<tr>
														<td><b>Nama Ayah</b></td>
														<td>Thor</td>
													</tr>
													<tr>
														<td><b>Tanggal Lahir</b></td>
														<td>1969-04-02</td>
													</tr>
													<tr>
														<td><b>Pendidikan</b></td>
														<td>Strata 1 (S1)</td>
													</tr>
													<tr>
														<td><b>Pekerjaan</b></td>
														<td>Pegawai Swasta</td>
													</tr>
													<tr>
														<td><b>Agama</b></td>
														<td>Islam</td>
													</tr>
													<tr>
														<td><b>No Telpon</b></td>
														<td>08281267312</td>
													</tr>
												</table>
											</div>
										</div>
										<!-- data ibu -->
										<div class="col-md-6">
											<div class="table-responsive">
												<table class="table table-bordered table-sm">
													<tr>
														<td><b>Nama Ibu</b></td>
														<td>Steffanie</td>
													</tr>
													<tr>
														<td><b>Tanggal Lahir</b></td>
														<td>1969-04-02</td>
													</tr>
													<tr>
														<td><b>Pendidikan</b></td>
														<td>Strata 1 (S1)</td>
													</tr>
													<tr>
														<td><b>Pekerjaan</b></td>
														<td>Ibu Rumah Tangga</td>
													</tr>
													<tr>
														<td><b>Agama</b></td>
														<td>Islam</td>
													</tr>
													<tr>
														<td><b>No Telpon</b></td>
														<td>08281267312</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
								</div>
								<div class="clear-fix"></div>
								<div class="d-flex justify-content-end">
									<a href="?page=data-siswa" class="btn btn-secondary mt-5 ">Kembali</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>