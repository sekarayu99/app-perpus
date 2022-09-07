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
            <form class="form-horizontal" action="<?= base_url('anggota/simpan');?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_anggota" class="col-sm-2 control-label">Id Anggota</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?= $id_anggota;?>" placeholder="Id Anggota" readonly> 
                  </div>
                </div>
                <div class="form-group">
                  <label for="nama_anggota" class="col-sm-2 control-label">Nama Anggota</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" placeholder="Nama Anggota" required>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="jenis_kelamin" class="col-sm-2 control-label">Jenis Kelamin</label>

                  <div class="col-sm-10">
                  <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required> 
                    <option value=""> - Pilih Jenis Kelamin - </option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="alamat" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                  <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" required></textarea>
                  </div>
                </div>
                
                <div class="form-group">
                  <label for="no_hp" class="col-sm-2 control-label">No Handphone</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No. Handphone" required >
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