<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <?php echo $this->session->flashdata('alert_msg'); ?>
    	<h1 class="page-header"><?php echo $judul ?></h1>


<form class="form-horizontal" method="POST" action = "<?php echo site_url('nilai/act_edit') ?>">

<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">siswa</label>
    <div class="col-sm-10">
    <select name="id_siswa" class="form-control">
    <option value="">--Pilih siswa--</option>
    <?php
      foreach ($siswa as $key => $value): ?>
      <?php
        if ($value->id == $data_nilai->id_siswa){
          $selected = 'selected';
        }else{
          $selected ='';
        }
      ?>
        <option value="<?php echo $value->id ?>" <?php echo $selected; ?>> <?php echo $value->nama ?></option>   
    <?php endforeach  ?>   
    </select>     
    </div>
  </div>

<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Mapel</label>
    <div class="col-sm-10">
    <select name="id_mapel" class="form-control">
    <option value="">--Pilih Mapel--</option>
    <?php
      foreach ($mapel as $key => $value): ?>
      <?php
        if ($value->id_mapel == $data_nilai->id_mapel){
          $selected = 'selected';
        }else{
          $selected ='';
        }
      ?>
        <option value="<?php echo $value->id_mapel ?>" <?php echo $selected; ?>> <?php echo $value->nama_mapel ?></option>   
    <?php endforeach  ?>   
    </select>     
    </div>
  </div>

<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Nilai</label>
    <div class="col-sm-10">
    <select name="total_nilai" class="form-control">
    <option value="">--Pilih Kelas--</option>
    <?php
      foreach ($nilai as $key => $value): ?>
      <?php
        if ($value->id_nilai == $data_nilai->id_nilai){
          $selected = 'selected';
        }else{
          $selected ='';
        }
      ?>
        <option value="<?php echo $value->total_nilai ?>" <?php echo $selected; ?>> <?php echo $value->total_nilai ?></option>   
    <?php endforeach  ?>   
    </select>     
    </div>
  </div>
<input type="hidden" name="id_nilai" value="<?php echo $data_nilai->id_nilai ?>" readonly>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
          <a href="<?php echo site_url('nilai')?>" class ="btn btn-default"> kembali
        </a>
   <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>

</div>