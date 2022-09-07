<div class="row">
  <div class="col-md-12">
  <?= $this->session->flashdata('message');?>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-2">
    <a href="<?= base_url('buku/tambah'); ?>" title="Tambah buku" class="btn btn-success">
      <i class="fa fa-plus"> Tambah Buku</i></a>
  </div>
</div>
<br>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Buku</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Id Buku </th>
                  <th>Judul</th>
                  <th>Pengarang</th>
                  <th>Penerbit</th>
                  <th>Tahun Terbit</th>
                  <th>Jumlah</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;
                foreach ($buku->result() as $b) { ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $b->id_buku ?></td>
                  <td><?= $b->judul_buku ?></td>
                  <td><?= $b->nama_pengarang ?></td>
                  <td><?= $b->nama_penerbit ?></td>
                  <td><?= $b->tahun_terbit ?></td>
                  <td><?= $b->jumlah ?></td>
                  <td>
                    <a href="<?= base_url('buku/edit/' . $b->id_buku); ?>" title="Edit pengarang" class="btn btn-warning btn-xs">
                     <i class="fa fa-pencil"> Edit</i>
                        </a>
                    <a href="<?= base_url('buku/hapus/' . $b->id_buku); ?>" title="Hapus pengarang" class="btn btn-danger btn-xs" onclick="return confirm('Yakin ingin menghapus data ini?');">
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
  

