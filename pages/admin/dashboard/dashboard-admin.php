<?php
if (isset($_POST["submit_file"])) {
	$nama_file = $_POST["nama_file"];
	$file = $_FILES["file"]['name'];
	if (empty($nama_file) || $file == "" || $file == null) {
		echo "<script>
					alert('Cek kembali saat ingin upload!!');
					document.location.href='index.php';
					</script>";
		return false;
	} else {
		echo "<script>
					alert('Berhasil Upload!!');
					document.location.href='index.php';
					</script>";
	}
}
?>

<section class="section-dashboard-admin">
	<div class="row">
		<div class="col-md-8">
			<div class="card card-list-siswa shadow-sm">
				<div class="card-body">
					<div class="text-title d-flex justify-content-between">
						<span>Daftar Siswa</span>
						<a href="#" class="text-underline">Details</a>
					</div>
					<div class="table-responsive">
						<table class="table" id="tabel-list-siswa">
							<thead>
								<tr>
									<th>No</th>
									<th>NIS</th>
									<th>Nama</th>
									<th>Tanggal Lahir</th>
									<th>Kelas</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>1002912736182</td>
									<td>Fahmi Ramadhan</td>
									<td>01-01-1998</td>
									<td>IX</td>
									<td>Aktif</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card card-upload-dokumen shadow-sm">
				<div class="card-body">
					<div class="d-flex justify-content-between">
						<span>Upload Document</span>
						<a href="#" class="text-underline">Daftar Document</a>
					</div>
					<form action="" method="post" enctype="multipart/form-data">
						<div class="form-group mt-5">
							<input type="text" name="nama_file" id="nama_file" class="form-control" placeholder="Nama File" autocomplete="off" required>
						</div>
						<div class="form-group mt-4">
							<input type="file" name="file" id="file" class="form-input" placeholder="Nama File" autocomplete="off" required>
						</div>
						<button type="submit" name="submit_file" class="btn btn-primary btn-sm btn-upload-file">Upload</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="row justify-content-center mt-5">
		<div class="col-lg-6">
			<div class="card card-modif card-list-guru shadow-sm">
				<div class="card-body">
					<div class="text-title mb-4 d-flex justify-content-between">
						<span>Daftar Guru</span>
						<a href="#" class="text-underline">Details</a>
					</div>
					<div class="table-responsive">
						<table class="table" id="tabel-list-guru">
							<thead>
								<tr>
									<th>No</th>
									<th>Foto</th>
									<th>Nama</th>
									<th>Usia</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>
										<div class="image-dashboard">
											<img src="../assets/img1.jpg" alt="image" class="img-fluid" width="80">
										</div>
									</td>
									<td>Ngatinem</td>
									<td>44 Tahun</td>
									<td>PNS</td>
								</tr>
								<tr>
									<td>1</td>
									<td>
										<div class="image-dashboard">
											<img src="../assets/img1.jpg" alt="image" class="img-fluid" width="80">
										</div>
									</td>
									<td>Ngatinem</td>
									<td>44 Tahun</td>
									<td>PNS</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card card-modif card-list-staff shadow-sm">
				<div class="card-body">
					<div class="text-title mb-4 d-flex justify-content-between">
						<span>Daftar Staff</span>
						<a href="#" class="text-underline">Details</a>
					</div>
					<div class="table-responsive">
						<table class="table" id="tabel-list-staff">
							<thead>
								<tr>
									<th>No</th>
									<th>Foto</th>
									<th>Nama</th>
									<th>Usia</th>
									<th>Jabatan</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>
										<div class="image-dashboard">
											<img src="../assets/img1.jpg" alt="image" class="img-fluid" width="80">
										</div>
									</td>
									<td>Sunaryo</td>
									<td>34Tahun</td>
									<td>Office Boy</td>
								</tr>
								<tr>
									<td>2</td>
									<td>
										<div class="image-dashboard">
											<img src="../assets/img1.jpg" alt="image" class="img-fluid" width="80">
										</div>
									</td>
									<td>Martina</td>
									<td>31 Tahun</td>
									<td>Security</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="margin-view"></div>
</section>
<script>
	$(document).ready(function() {
		$("#tabel-list-guru").DataTable({
			responsive: true,
			fixedHeader: true,
			lengthMenu: [5, 10],

		});
	});
	$(document).ready(function() {
		$("#tabel-list-staff").DataTable({
			responsive: true,
			fixedHeader: true,
			lengthMenu: [5, 10]
		});
	});
	$(document).ready(function() {
		$("#tabel-list-siswa").DataTable({
			responsive: true,
			fixedHeader: true,
			lengthMenu: [5, 10]
		});
	});
</script>

<script>
	$(document).ready(function() {

		$('.btn-upload-file').prop("disabled", "true");
		$("#nama_file").keyup(function() {
			// $('.btn-upload-file').prop("disabled", "false");
			let namaFile = $("#nama_file").val();
			let isiFile = $("#file").val();

			if (namaFile == '') {
				$('.btn-upload-file').prop("disabled", "true");
			} else {
				$('.btn-upload-file').removeAttr("disabled");
			}
		});
	});
</script>