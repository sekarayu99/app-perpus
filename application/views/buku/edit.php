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
            <form class="form-horizontal" action="<?= base_url('buku/update');?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_buku" class="col-sm-2 control-label">Id Buku</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id_buku" name="id_buku" value="<?= $buku['id_buku'] ?>" readonly> 
                  </div>
                </div>
                <div class="form-group">
                  <label for="judul_buku" class="col-sm-2 control-label">Judul Buku</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="judul_buku" name="judul_buku" placeholder="Judul Buku" value="<?= $buku['judul_buku'] ?>" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="id_pengarang" class="col-sm-2 control-label">Pengarang</label>

                  <div class="col-sm-10">
                  <select class="form-control select2" id="id_pengarang" name="id_pengarang" required> 
                   <?php
                      foreach($pengarang as $p) {
                        if($buku['id_pengarang'] == $p->id_pengarang) {?>
                          <option value="<?= $p->id_pengarang?>" selected><?= $p->nama_pengarang ?></option>
                      <?php } else {?>
                        <option value="<?= $p->id_pengarang ?>" ><?= $p->nama_pengarang ?></option>
                      <?php }
                      }
                   ?>
                  </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="id_penerbit" class="col-sm-2 control-label">Penerbit</label>

                  <div class="col-sm-10">
                  <select class="form-control select2" id="id_penerbit" name="id_penerbit" required> 
                  <?php
                      foreach($penerbit as $p) {
                        if($buku['id_penerbit'] == $p->id_penerbit) {?>
                          <option value="<?= $p->id_penerbit?>" selected><?= $p->nama_penerbit ?></option>
                      <?php } else {?>
                        <option value="<?= $p->id_penerbit ?>" ><?= $p->nama_penerbit ?></option>
                      <?php }
                      }
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
                        for($tahun = 2000; $tahun<=2020; $tahun++) {
                          if($buku['tahun_terbit'] == $tahun){?>
                          <option value="<?= $tahun ?>" selected><?= $tahun ?></option>
                          <?php } else {?>
                            <option value="<?= $tahun ?>"><?= $tahun ?></option>
                          <?php } 
                         }
                    ?>
                  </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="jumlah" class="col-sm-2 control-label">Jumlah</label>

                  <div class="col-sm-10">
                  <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $buku['jumlah'];?>" placeholder="Jumlah" required >
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('buku');?>"  class="btn btn-default"> Batal</a>
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </section>
    <!-- /.content -->