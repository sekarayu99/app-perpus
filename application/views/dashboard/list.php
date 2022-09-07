  <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $anggota;?></h3>
              <p>Anggota</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="<?= base_url('anggota');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $buku;?></h3>
              <p>Buku</p>
            </div>
            <div class="icon">
              <i class="fa fa-book"></i>
            </div>
            <a href="<?= base_url('buku');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $pinjam;?></h3>
              <p>Buku yang dipinjam</p>
            </div>
            <div class="icon">
              <i class="fa fa-bar-chart"></i>
            </div>
            <a href="<?= base_url('peminjaman');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?= $kembali;?></h3>
              <p>Buku yang sudah dikembalikan</p>
            </div>
            <div class="icon">
              <i class="fa fa-check"></i>
            </div>
            <a href="<?= base_url('pengembalian');?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        
      </div>
      <!-- /.row (main row) -->
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
    </section>
    <!-- /.content -->
 
    