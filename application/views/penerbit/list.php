<div class="row">
  <div class="col-md-12">
     <?= $this->session->flashdata('message');?>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-2">
    <a href="<?= base_url('penerbit/tambah'); ?>" title="Tambah penerbit" class="btn btn-success">
      <i class="fa fa-plus"> Tambah Penerbit</i></a>
  </div>
</div><br>

      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Penerbit</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Penerbit </th>
                  <th>Nama Penerbit</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($penerbit as $p) { ?>
                <tr>
                  <td><?= $p->id_penerbit ?></td>
                  <td><?= $p->nama_penerbit ?></td>
                  <td>
                    <a href="<?= base_url('penerbit/edit/' . $p->id_penerbit); ?>" title="Edit penerbit" class="btn btn-warning btn-xs">
                     <i class="fa fa-pencil"> Edit</i>
                        </a>
                    <a href="<?= base_url('penerbit/hapus/' . $p->id_penerbit); ?>" title="Hapus penerbit" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?');">
                     <i class="fa fa-pencil"> Hapus</i>
                        </a>
                  </td>
                </tr>
                <?php
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
  

