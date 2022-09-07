<div class="row">
  <div class="col-md-12">
  <?= $this->session->flashdata('message');?>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-2">
    <a href="<?= base_url('anggota/tambah_anggota'); ?>" title="Tambah anggota" class="btn btn-success">
      <i class="fa fa-plus"> Tambah Anggota</i></a>
  </div>
</div>
<br>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Anggota</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>id</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Alamat</th>
                  <th>No. Handphone</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1;
                foreach ($anggota as $anggota) { ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $anggota->id_anggota ?></td>
                  <td><?= $anggota->nama_anggota ?></td>
                  <td><?= $anggota->jenis_kelamin ?></td>
                  <td><?= $anggota->alamat ?></td>
                  <td><?= $anggota->no_hp ?></td>
                  <td>
                    <a href="<?= base_url('anggota/edit/' . $anggota->id_anggota); ?>" title="Edit anggota" class="btn btn-warning btn-xs">
                     <i class="fa fa-pencil"> Edit</i>
                        </a>
                    <a href="<?= base_url('anggota/hapus/' . $anggota->id_anggota); ?>" title="Hapus anggota" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?');">
                     <i class="fa fa-pencil"> Hapus</i>
                        </a>
                  </td>
                </tr>
                <?php $i++;
                } ?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
  

