<br>
<br><br>
<?php if(count($limit)<2){
echo form_open('daftar/masuk') ?>
<div class='form-horizontal' role='form' style='margin-left:36%;width:800px'>
  <div class="form-group" >
    <label class="col-sm-6 control-label" style="text-align:center;background:#ddd;">FORM DAFTAR</label>
  </div>
  <div class="form-group">
    <label for="nama_siswa" class="col-sm-2 control-label" >Nama</label>
    <div class="col-sm-4">
     <input type="text" class="form-control" id="nama" name="nama_siswa" required>
    </div>
  </div>
  <div class="form-group">
    <label for="nip" class="col-sm-2 control-label" >nip</label>
    <div class="col-sm-4">
        <?php foreach ($jay as $dat) {            
        ?>                
        <?php
        }?>
        <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $dat['nip'];?>" readonly>
    </div>
  </div>
  <div class="form-group">
    <label for="angkatan" class="col-sm-2 control-label" >Angkatan</label>
    <div class="col-sm-4">
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
    </div>
  </div>
  <div class="form-group">
    <label for="angkatan" class="col-sm-2 control-label" >Kelas</label>
    <div class="col-sm-4">
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
    </div>
  </div>
  <div class="form-group">
    <label for="eskul_pilihan" class="col-sm-2 control-label" >Eskul Pilihan</label>
    <div class="col-sm-4">
     <select name="eskul_pilihan" class="form-control" id="eskul_pilihan">
        <option>-Pilih Eskul-</option>
        <?php foreach ($eskul as $esk) {            
        ?>
        <option value="<?php echo $esk['nama_eskul'];?>"><?php echo $esk['nama_eskul'];?></option>
                
        <?php
        }
        ?>
      </select>
    </div>
  </div>
  <input type="hidden" name="nilai" value="-">
  <input type="hidden" name="status" value="belum">
  <div class="form-group">
    <label class="col-sm-2 control-label" ></label>
    <div class="col-sm-4">
      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </div>
  </div>
</div>
</form>
<?php }else{ ?>
<h3 align="center">Anda sudah berada di 2 eskul</h2>
<?php
}
?>