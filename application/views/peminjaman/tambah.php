<?php
    $tgl_pinjam = date('Y-m-d');

    $tujuh_hari = mktime(0,0,0,date("n"),date("j") + 7, date("Y"));
    $tgl_kembali = date('Y-m-d', $tujuh_hari);
?>

<section class="content">
  <!-- right column -->
  <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?= $title;?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="<?= base_url('peminjaman/simpan');?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_pinjam" class="col-sm-2 control-label">Id Peminjaman</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id_pinjam" name="id_pinjam" value="<?= $id_pinjam ?>" readonly> 
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="id_anggota" class="col-sm-2 control-label">Peminjam</label>

                  <div class="col-sm-10">
                  <select class="form-control select2" id="id_anggota" name="id_anggota" required> 
                    <option value=""> - Pilih Peminjam - </option>
                    <?php
                        foreach ($peminjam as $p) {?>
                         <option value="<?= $p->id_anggota;?>"><?= $p->nama_anggota ?></option>
                    <?php }
                    ?>
                  </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="id_buku" class="col-sm-2 control-label">Buku</label>

                  <div class="col-sm-10">
                  <select class="form-control select2" id="id_buku" name="id_buku" required> 
                    <option value=""> - Pilih Buku - </option>
                    <?php
                        foreach ($buku as $b) {?>
                         <option value="<?= $b->id_buku;?>"><?= $b->judul_buku ?></option>
                    <?php }
                    ?>
                  </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="tgl_pinjam" class="col-sm-2 control-label">Tanggal Peminjaman</label>

                  <div class="col-sm-10">
                  <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" value="<?= $tgl_pinjam; ?>" placeholder="Tanggal Pinjam" readonly >
                  </div>
                </div>

                <div class="form-group">
                  <label for="tgl_kembali" class="col-sm-2 control-label">Tanggal Pengembalian</label>

                  <div class="col-sm-10">
                  <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" value="<?= $tgl_kembali; ?>" placeholder="Tanggal Kembali" readonly>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('peminjaman');?>"  class="btn btn-default"> Batal</a>
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </section>
    <!-- /.content -->

    <script>
      $('#id_buku').change(function(){
          var id = $(this).val();
          $.ajax({
            url : '<?= base_url('peminjaman/jumlah_buku');?>', 
            data : {id:id},
            method : 'post',
            dataType : 'json',
            success:function(hasil){
                var jumlah = JSON.stringify(hasil.jumlah);
                var jumlah1 = jumlah.split('"').join('');
                if (jumlah1 <= 0) {
                    alert('Maaf, stok untuk buku ini sedang kosong');
                    location.reload();
                }
            }
          });
      });
    </script>