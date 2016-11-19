<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <?php echo $this->session->flashdata('alert_msg'); ?>
    	<h1 class="page-header"><?php echo $judul ?></h1>


<form class="form-horizontal" method="POST" action = "<?php echo site_url('mapel/act_tambah') ?>">

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" name="nama_mapel" class="form-control" placeholder="Masukkan Nama">
    </div>
  </div>

<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">guru</label>
    <div class="col-sm-10">
    <select name="id_guru" class="form-control">
    <option value="">--Pilih guru--</option>
    <?php

      foreach ($guru as $key => $value): ?>
        <option value="<?php echo $value->id_guru ?>"><?php echo $value->nama_guru ?></option>
   
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