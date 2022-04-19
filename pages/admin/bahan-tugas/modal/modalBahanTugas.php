<!-- Modal -->
<div class="modal fade" id="modalBahanTugas" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalBahanTugasLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalBahanTugasLabel">Upload Bahan Tugas</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="" method="POST" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="container-fluid">
						<div class="form-group row">
							<label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
							<div class="col-sm-10">
								<select name="kelas" id="kelas" class="form-control" required>
									<option value="null">- Pilih Kelas -</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="mapel" class="col-sm-2 col-form-label">Mapel</label>
							<div class="col-sm-10">
								<select name="mapel" id="mapel" class="form-control" required>
									<option value="null">- Pilih Mapel -</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="file" class="col-sm-2 col-form-label">File</label>
							<div class="col-sm-10">
								<input type="file" class="form-form-control-file">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Batal</button>
					<button type="button" class="btn btn-primary btn-sm">Upload</button>
				</div>
			</form>
		</div>
	</div>
</div>