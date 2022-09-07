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
            <form class="form-horizontal" action="<?= base_url('buku/simpan');?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_buku" class="col-sm-2 control-label">Id Buku</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id_buku" name="id_buku" value="<?= $id_buku ?>" readonly> 
                  </div>
                </div>
                <div class="form-group">
                  <label for="judul_buku" class="col-sm-2 control-label">Judul Buku</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Judul Buku" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="id_pengarang" class="col-sm-2 control-label">Pengarang</label>

                  <div class="col-sm-10">
                  <select class="form-control select2" id="id_pengarang" name="id_pengarang" required> 
                    <option value=""> - Pilih Pengarang - </option>
                    <?php
                        foreach ($pengarang as $p) {?>
                         <option value="<?= $p->id_pengarang;?>"><?= $p->nama_pengarang ?></option>
                    <?php }
                    ?>
                   
                  </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="id_penerbit" class="col-sm-2 control-label">Penerbit</label>

                  <div class="col-sm-10">
                  <select class="form-control select2" id="id_penerbit" name="id_penerbit" required> 
                    <option value=""> - Pilih Penerbit - </option>
                    <?php
                        foreach ($penerbit as $p) {?>
                         <option value="<?= $p->id_penerbit;?>"><?= $p->nama_penerbit ?></option>
                    <?php }
                    ?>
                  </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="tahun_terbit" class="col-sm-2 control-label">Tahun Terbit</label>

                  <div class="col-sm-10">
                  <select class="form-control select2" id="tahun_terbit" name="tahun_terbit" required> 
                    <option value=""> - Pilih Tahun - </option>
                    <?php
                        for($tahun = 2000; $tahun<=2020; $tahun++) { ?>
                            <option value="<?= $tahun?>"><?= $tahun;?></option>
                        <?php }
                    ?>
                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="jumlah" class="col-sm-2 control-label">Jumlah</label>

                  <div class="col-sm-10">
                  <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah" required >
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('anggota');?>"  class="btn btn-default"> Batal</a>
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </section>
    <!-- /.content -->