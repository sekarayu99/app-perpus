
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pengembalian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama Peminjam</th>
                  <th>Judul Buku</th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                  <th>Tanggal Selesai</th>
                </tr>
                </thead>
                <tbody>
                <?php $i = 1;
                foreach ($kembali as $k) { ?>
                <tr>
                  <td><?= $i ?></td>
                  <td><?= $k->nama_anggota ?></td>
                  <td><?= $k->judul_buku ?></td>
                  <td><?= $k->tgl_pinjam ?></td>
                  <td><?= $k->tgl_kembali ?></td>
                  <td><?= $k->tgl_selesai ?></td>
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
  

