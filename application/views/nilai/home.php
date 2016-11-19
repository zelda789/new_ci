		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

    <?php echo $this->session->flashdata('alert_msg'); ?>

		<h1 class="page-header"><?php echo $judul?></h1>
		<a href="<?php echo site_url ('nilai/add_nilai') ?>" class="btn btn-primary">Tambah nilai</a>
	
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Mapel</th>
                  <th>Siswa</th>
                  <th>Total Nilai</th>
                  <th>Aksi</th>
                 
                </tr>
              </thead>
              <tbody>
              <?php
              	foreach ($data_nilai as $key => $value):
              ?>
                <tr>
                  <td><?php echo $value->id_nilai ?></td>
                  <td><?php echo $value->nama_mapel ?></td>
                  <td><?php echo $value->nama ?></td>
                  <td><?php echo $value->total_nilai ?></td>
                  <td>
                  <a href ="<?php echo site_url ('nilai/edit/' . $value->id_nilai)?>" class="btn btn-info">Edit</a>
                  <a href ="<?php echo site_url ('nilai/hapus/' . $value->id_nilai)?>" class="btn btn-danger" onclick = "return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</a></td>
				<?php endforeach ?>
                       </tr>
              
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>