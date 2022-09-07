<div class="row">
  <div class="col-md-12">
  <?= $this->session->flashdata('message');?>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-2">
    <a href="<?= base_url('pengarang/tambah'); ?>" title="Tambah pengarang" class="btn btn-success">
      <i class="fa fa-plus"> Tambah Pengarang</i></a>
  </div>
</div>
<br>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengarang</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Pengarang </th>
                  <th>Nama Pengarang</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($pengarang as $p) { ?>
                <tr>
                  <td><?= $p->id_pengarang ?></td>
                  <td><?= $p->nama_pengarang ?></td>
                  <td>
                    <a href="<?= base_url('pengarang/edit/' . $p->id_pengarang); ?>" title="Edit pengarang" class="btn btn-warning btn-xs">
                     <i class="fa fa-pencil"> Edit</i>
                        </a>
                    <a href="<?= base_url('pengarang/hapus/' . $p->id_pengarang); ?>" title="Hapus pengarang" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?');">
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
  

