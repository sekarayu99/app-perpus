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
            <form class="form-horizontal" action="<?= base_url('pengarang/update');?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_pengarang" class="col-sm-2 control-label">Id Pengarang</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id_pengarang" name="id_pengarang" placeholder="Id Pengarang" value="<?= $pengarang['id_pengarang'];?>" readonly>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="nama_anggota" class="col-sm-2 control-label">Nama Pengarang</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" placeholder="Nama Pengarang" value="<?= $pengarang['nama_pengarang'];?>" required>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('pengarang');?>"  class="btn btn-default"> Batal</a>
                <button type="submit" class="btn btn-info">Edit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </section>
    <!-- /.content -->