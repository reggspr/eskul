<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title" id="tambahModalLabel">Tambah Data</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="eskul/insert_data" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama" class="control-label">Nama Eskul:</label>
						<input type="text" name="nama_eskul" class="form-control" id="nama" required>
					</div>
					<div class="form-group">
						<label for="deskripsi" class="control-label">Deksripsi:</label>
						<textarea name="deskripsi" class="form-control" id="deskripsi"></textarea>
					</div>
					<div class="form-group">
						<label for="gambar" class="control-label">Gambar:</label>
						<input type="file" name="userfile" class="form-control" id="gambar" required>
					</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				<button class="btn btn-primary">Tambah</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title edit" id="editModalLabel">Edit Data</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="eskul/edit_data" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nama" class="control-label">Nama Eskul:</label>
						<input type="text" name="nama_eskul" class="form-control nama" id="nama" required>
						<input type="hidden" name="id" class="form-control id" id="id">
					</div>
					<div class="form-group">
						<label for="deskripsi" class="control-label">Deskripsi:</label>
						<textarea name="deskripsi" class="form-control deskripsi" id="deskripsi" required></textarea>
					</div>
					<div class="form-group">
						<label for="gambar" class="control-label">Gambar:</label>
						<input type="file" name="userfile" class="form-control gambar" id="gambar" required>
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary">Update</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="deleteModalLabel">Hapus Data</h4>
			</div>
			<div class="modal-body">
				<div class="delete alert alert-danger" role="alert"></div>
			</div>
			<div class="modal-footer">
				<form method="post" action="eskul/delete_data">
					<input type="hidden" name="id" class="form-control id" id="id">
					<button class="btn btn-danger">HAPUS</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title edit" id="editModalLabel">Edit Data</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="siswa/edit_data">
					<div class="form-group">
						<input type="hidden" name="id" class="form-control id" id="id">
						<input type="hidden" name="status" class="form-control" id="status" value="Selesai">
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary">Konfirmasi</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="updateModal2" tabindex="-1" role="dialog" aria-labelledby="updateModal2Label">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button><h4 class="modal-title edit" id="editModalLabel">Edit Data</h4>
			</div>
			<div class="modal-body">
				<form method="post" action="nilai/edit_data">
					<div class="form-group">
						<input type="hidden" name="id" class="form-control id" id="id">
						<label for="nilai" class="control-label">Nilai:</label>
						<input type="text" name="nilai" class="form-control" id="nilai">
					</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary">Konfirmasi</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
				</form>
			</div>
		</div>
	</div>
</div>