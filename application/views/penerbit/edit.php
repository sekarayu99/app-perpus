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
            <form class="form-horizontal" action="<?= base_url('penerbit/update');?>" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_penerbit" class="col-sm-2 control-label">Id Penerbit</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="id_penerbit" name="id_penerbit" placeholder="Id Penerbit" value="<?= $penerbit['id_penerbit'];?>" readonly>
                  </div>
                </div>
              </div>

              <div class="box-body">
                <div class="form-group">
                  <label for="nama_penerbit" class="col-sm-2 control-label">Nama Penerbit</label>

                  <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" placeholder="Nama Penerbit" value="<?= $penerbit['nama_penerbit'];?>" required>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="<?= base_url('penerbit');?>"  class="btn btn-default"> Batal</a>
                <button type="submit" class="btn btn-info">Edit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->
          </section>
    <!-- /.content -->