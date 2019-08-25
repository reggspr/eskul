<div class="col-md-10">
	<div class="row">
		<div class="col-md-12 panel-warning">
		  	<form method="post" action="<?php echo base_url() ?>laporan/filterisasi">
		  			<table border="0" align="center">
						<tr>
							<td>Angkatan&nbsp</td>
							<td>
							<select class="form-control" name="angkatan" id="angkatan">
							      <option value="2010">2010</option>
							      <option value="2011">2011</option>
							      <option value="2012">2012</option>
							      <option value="2013">2013</option>
							      <option value="2014">2014</option>
							      <option value="2015">2015</option>
							      <option value="2016">2016</option>
							      <option value="2017">2017</option>
							      <option value="2018">2018</option>
							      <option value="2019">2019</option>
							</select>
							</td>
							<td class="col-md-1"></td>
							<td>Kelas&nbsp</td>
							<td>
								<select class="form-control" name="kelas" id="kelas">
							      <option value="7A">7A</option>
							      <option value="7B">7B</option>
							      <option value="7C">7C</option>
							      <option value="7D">7D</option>
							      <option value="7E">7E</option>
							      <option value="7F">7F</option>
							      <option value="8A">8A</option>
							      <option value="8B">8B</option>
							      <option value="8C">8C</option>
							      <option value="8D">8D</option>
							      <option value="8E">8E</option>
							      <option value="8F">8F</option>
							      <option value="9A">9A</option>
							      <option value="9B">9B</option>
							      <option value="9C">9C</option>
							      <option value="9D">9D</option>
							      <option value="9E">9E</option>
							      <option value="9F">9F</option>
							     </select>
							</td>
							<td>
								<input type="submit" class="btn btn-primary" value="filter"></button></a>
							</td>
						</tr>
					</table>
			</form>
		  	<div class="content-box-header panel-heading">
	  			<div class="panel-title">LAPORAN ESKUL KELAS PER ANGKATAN</div>
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
							<th>Eskul Pilihan</th>
							<th>Nilai</th>
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
							<td><?php echo $value['eskul_pilihan'];?></td>
							<td><?php echo $value['nilai'];?></td>
					</tr>
					<?php
					$i++;
						}
					}
					?>
					</tbody>

				</table>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<button onclick="myFunction()">Cetak</button>

<script>
function myFunction() {
  window.print();
}
</script>
		</div>
	</div>
</div>
</div>
</div>
</div>