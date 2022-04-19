<!-- Content Header (Page header) -->
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Document</h1>
			</div>
			<!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="?page=home">Home</a></li>
					<li class="breadcrumb-item active">Document</li>
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

	<div class="row">
		<div class="col-md-12">
			<div class="card card-document">
				<div class="card-header">
					<div class="d-flex justify-content-between">
						<span class="h5 font-weight-bold">Document</span>
						<span class="h5 font-weight-bold">Download</span>
					</div>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table tabel-borderless table-hover">
							<tbody>
								<tr>
									<td>Surat Pengantar Sekolah</td>
									<td class="text-right">
										<button type="button" class="btn btn-sm btn-primary">
											<i class="fas fa-download"></i>
										</button>
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