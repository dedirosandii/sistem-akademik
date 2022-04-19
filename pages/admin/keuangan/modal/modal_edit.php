<div class="modal fade" id="modalEditKeuangan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="modalEditKeuanganLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-scrollable">
		<div class="modal-content border-0 shadow" style="border-radius: 15px;">
			<div class="modal-header bg-info">
				<h5 class="modal-title" id="modalEditKeuanganLabel">Edit Data Keuangan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<form action="">
						<div class="form-group row">
							<label for="status_bayar" class="col-sm-3 col-form-label">Ubah Status</label>
							<div class="col-sm-9">
								<select name="status_bayar" id="status_bayar" class="form-control">
									<option value="null">null</option>
									<option value="Belum Bayar">Belum Bayar</option>
									<option value="Sudah Bayar">Sudah Bayar</option>
									<option value="Di Batalkan">Di Batalkan</option>
								</select>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Understood</button>
			</div>
		</div>
	</div>
</div>