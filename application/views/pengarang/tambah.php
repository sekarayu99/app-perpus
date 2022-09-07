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
            <form class="form-horizontal" action="<?= base_url('pengarang/simpan');?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_anggota" class="col-sm-2 control-label">Nama Pengarang</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" placeholder="Nama Pengarang" required>
                  </div>
                </div>
                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('pengarang');?>"  class="btn btn-default"> Batal</a>
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </section>
    <!-- /.content -->