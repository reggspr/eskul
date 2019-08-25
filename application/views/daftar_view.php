<br><br>
<?php 
echo form_open('daftar/insert_data') ?>
<div class='form-horizontal' role='form' style='margin-left:36%;width:800px'>
  <div class="form-group" >
    <label class="col-sm-6 control-label" style="text-align:center;background:#ddd;">FORM PENDAFTARAN</label>
  </div>
  <div class="form-group">
    <label for="nama_pembooking" class="col-sm-2 control-label" >NIP</label>
    <div class="col-sm-4">
     <input type="text" class="form-control" id="nip" name="nip" required>
    </div>
  </div>
  <input type="hidden" class="form-control" id="nama" name="nama_siswa" value="-">
  <input type="hidden" class="form-control" id="angkatan" name="angkatan" value="-">
  <input type="hidden" class="form-control" id="eskulpilihan" name="eskul_pilihan" value="-">
  <input type="hidden" class="form-control" id="nilai" name="nilai" value="-">
  <input type="hidden" class="form-control" id="status" name="status" value="-">
  <div class="form-group">
    <label class="col-sm-2 control-label" ></label>
    <div class="col-sm-4">
      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </div>
  </div>
</div>