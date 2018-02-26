<div class="modal fade" id="biografi_modal" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				<h4 class="modal-title">Biografi</h4>
			</div>
			<div class="modal-body form">
				<form action="#" id="biografi_form">
				<input type="hidden" value="" name="id"/>
					<div class="form-group">
						<textarea name="biografi_textarea" class="form-control" rows="5" placeholder="Isi tentang biografi anda . . "></textarea>
						<span class="help-block"></span>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button id="btnSave" type="submit" id="simpan" onclick="save_data()" class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="pendidikan_modal" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
				<h4 class="modal-title">Pendidikan</h4>
			</div>
			<div class="modal-body form">
				<form action="#" id="pendidikan_form">
				<input type="hidden" value="" name="id"/>
					<div class="form-group">
						<select name="pendidikan_option1" class="form-control">
							<option value="">--Pilih Pendidikan--</option>
							<option value="SMA/SMK">SMA/SMK</option>
							<option value="D3">D3</option>
							<option value="S1">S1</option>
						</select>
						<br>
						<select name="pendidikan_option2" class="form-control">
							<option value="">--Semester--</option>
							<option value="smt1">Semester 1</option>
							<option value="smt2">Semester 2</option>
							<option value="smt3">Semester 3</option>
							<option value="smt4">Semester 4</option>
							<option value="smt5">Semester 5</option>
							<option value="smt6">Semester 6</option>
							<option value="smt7" disabled>Semester 7</option>
							<option value="smt8" disabled>Semester 8</option>
						</select>
						<span class="help-block"></span>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button id="btnSave" type="submit" id="simpan" onclick="" class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</div>
</div>
