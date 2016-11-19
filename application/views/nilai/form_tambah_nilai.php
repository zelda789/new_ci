<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <?php echo $this->session->flashdata('alert_msg'); ?>
    	<h1 class="page-header"><?php echo $judul ?></h1>


<form class="form-horizontal" method="POST" action = "<?php echo site_url('nilai/act_tambah') ?>">

<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">siswa</label>
    <div class="col-sm-10">

     <select name="id_siswa" class="form-control">
    <option value="">--Pilih siswa--</option>
    <?php
      foreach ($siswa as $key => $value): ?>
        <option value="<?php echo $value->id ?>"><?php echo $value->nama ?></option>
   
    <?php endforeach  ?> 
    </select>     
    </div>
  </div>

  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">mapel</label>
    <div class="col-sm-10">
     <select name="id_mapel" class="form-control">
    <option value="">--Pilih mapel--</option>
    <?php
      foreach ($mapel as $key => $value): ?>
        <option value="<?php echo $value->id_mapel ?>"><?php echo $value->nama_mapel ?></option>
   
    <?php endforeach  ?> 
    </select>     
    </div>
  </div>

    <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">nilai</label>
    <div class="col-sm-10">
     <select name="total_nilai" class="form-control">
    <option value="">--Pilih nilai--</option>
    <?php
      foreach ($nilai as $key => $value): ?>
        <option value="<?php echo $value->total_nilai ?>"><?php echo $value->total_nilai ?></option>
   
    <?php endforeach  ?> 
    </select>     
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
          <a href="<?php echo site_url('mapel')?>" class ="btn btn-default"> kembali
        </a>
   <button type="submit" class="btn btn-success">Simpan</button>
    </div>
  </div>
</form>

</div>