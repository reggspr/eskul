<div class="col-md-10">
	<div class="row">
		<div class="col-md-12 panel-warning">
		  	<div class="content-box-header panel-heading">
	  			<div class="panel-title">KELOLA PENDAFTARAN ESKUL SISWA</div>
		  	</div>
		  	<div class="content-box-large box-with-header">
				<?php
					if (count($siswa)==0) {
				echo "Tidak ada data<br><br><br>";
				}else{
				?>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Siswa</th>
							<th>NIP</th>
							<th>Angkatan</th>
							<th>Kelas</th>
							<th>Eskul Pilihan</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					<?php
						$i = 1;
						foreach ($siswa as $key => $value) {
					?>
						<tr>
							<td><?php echo $i;?></td>
							<td><?php echo $value['nama_siswa'];?></td>
							<td><?php echo $value['nip'];?></td>
							<td><?php echo $value['angkatan'];?></td>
							<td><?php echo $value['kelas'];?></td>
							<td><?php echo $value['eskul_pilihan'];?></td>
						<td>
							<button type="button" class="btn btn-success tombol" data-toggle="modal" data-target="#updateModal" data-id="<?php echo $value['id'];?>" data-nama="<?php echo $value['nama_siswa'];?>";?><span class="glyphicon glyphicon-pencil"></span></button>
							<button type="button" class="btn btn-danger tombol" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $value['id'];?>" data-nama="<?php echo $value['nama_siswa'];?>"><span class="glyphicon glyphicon-trash"></span></button>
						</td>
					</tr>
					<?php
					$i++;
						}
					}
					?>
					</tbody>
				</table>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		</div>
	</div>
</div>
</div>
</div>
</div>