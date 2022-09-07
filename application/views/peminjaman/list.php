<div class="row">
  <div class="col-md-12">
     <?= $this->session->flashdata('message');?>
  </div>
</div>
<br>
<div class="row">
  <div class="col-md-2">
    <a href="<?= base_url('peminjaman/tambah'); ?>" title="Tambah peminjaman" class="btn btn-success">
      <i class="fa fa-plus"> Tambah Peminjaman</i></a>
  </div>
</div>
<br>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Peminjaman</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id Peminjaman</th>
                  <th>Peminjam</th>
                  <th>Buku</th>
                  <th>Tanggal Pinjam</th>
                  <th>Tanggal Kembali</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($peminjaman as $p) { 
                  $tgl_kembali = new DateTime($p->tgl_kembali);
                  $tgl_sekarang = new DateTime();
                  $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
                  ?>
                <tr>
                  <td><?= $p->id_pinjam ?></td>
                  <td><?= $p->nama_anggota ?></td>
                  <td><?= $p->judul_buku ?></td>
                  <td><?= $p->tgl_pinjam ?></td>
                  <td><?= $p->tgl_kembali ?></td>
                  <td><?php
                      if ($tgl_kembali >= $tgl_sekarang OR $selisih == 0 ) {
                        echo "<span class ='label label-warning'>Belum di kembalikan</span>";
                      } else {
                        echo "Telat <b style = 'color:red;'".$selisih."</b> Hari <br> <span class='label label-danger'> Denda perhari = 1.000";
                      }
                  ?></td>
                  <td>
                  <a href="<?= base_url('peminjaman/kembalikan/' . $p->id_pinjam); ?>" title="Hapus penerbit" class="btn btn-primary btn-xs" onclick="return confirm('Yakin ingin mengembalikan buku ini?');"> Kembalikan</a>
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
  

