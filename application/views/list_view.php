<div class="container">
	<table border="0">
		<br>
		<tr>
			<td>Pilih perkenalan Eskul</td>
		<form method="post" action="<?php echo base_url() ?>daftareskul/filterisasi">
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
		</tr>
		</form>
		</tr>
	</table>
		<?php foreach ($pilihan as $pil => $value) {
		?>
		<p><h1 style="background-color:white;"><?php echo $value['nama_eskul'];?></p></h1>
		<img src="<?php echo $value['gambar'];?>" style="float: left; margin-right: 20px;" width="371px" height="262px">
		<p style="text-align: justify;"><?php echo $value['deskripsi'];?></p>
		<?php } ?>
</div>