<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <?php echo $this->session->flashdata('alert_msg'); ?>
    	<h1 class="page-header"><?php echo $judul ?></h1>


<form class="form-horizontal" method="POST" action = "<?php echo site_url('mapel/act_edit') ?>">

  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Nama Pelajaran</label>
    <div class="col-sm-10">
      <input type="hidden" name="id_mapel" value="<?php echo $data_mapel->id_mapel ?>" class="form-control" readonly>
      <input type="text" name="nama_mapel" value="<?php echo $data_mapel->nama_mapel ?>" class="form-control" placeholder="Masukkan Nama">
    </div>
<div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">guru</label>
    <div class="col-sm-10">
    <select name="id_guru" class="form-control">

    <option value="">--Pilih guru--</option>
    <?php
      foreach ($mapel as $key => $value): ?>
      <?php
        if ($value->id_guru == $data_mapel->id_guru){
          $selected = 'selected';
        }else{
          $selected ='';
        }
      ?>
        <option value="<?php echo $value->id_guru ?>" <?php echo $selected; ?>> <?php echo $value->nama_guru ?></option>   
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