<div class="col-md-10">
	<div class="row">
		<div class="col-md-12 panel-warning">
		  	<div class="content-box-header panel-heading">
	  			<div class="panel-title">KELOLA NILAI ESKUL</div>
		  	</div>
		  	<form method="post" action="<?php echo base_url() ?>nilai/filterisasi">
		  			<table border="0" align="center">
						<tr>
							<td class="col-md-3"></td>
							<td>
								<select name="eskul" onchange="this.form.submit()">
				<option>-Pilih Eskul-</option>
				<?php foreach ($eskul as $esk) {						
				?>
				<option value="<?php echo $esk['nama_eskul'];?>"><?php echo $esk['nama_eskul'];?></option>
								
				<?php
				}
				?>
				</select>
							</td>
							<td class="col-md-3"></td>
						</tr>
					</table>
			</form>
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
							<th>Nilai</th>
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
							<td><?php echo $value['nilai'];?></td>
						<td>
							<button type="button" class="btn btn-success tombol" data-toggle="modal" data-target="#updateModal2" data-id="<?php echo $value['id'];?>" data-nama="<?php echo $value['nama_siswa'];?>";?><span class="glyphicon glyphicon-pencil"></span></button>
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