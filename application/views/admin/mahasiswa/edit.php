
<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view('partials/head'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <?php $this->load->view('partials/header'); ?>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <?php $this->load->view('partials/sidebar'); ?>
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header"><br>
      <h1>Mahasiswa<small>Edit Mahasiswa</small></h1>
        <?php $this->load->view('partials/breadcrumb') ?>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Mahasiswa : <?php echo $mahasiswa->nama_mhs ?></h3>
              <div class="pull-right">
                <a href="<?php echo base_url('mahasiswa') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="" method="post">
                <input type="hidden" name="id" class="form-control" value="<?php echo $mahasiswa->nim ?>" autocomplete="off">

                <div class="form-group col-md-9 <?php echo form_error('nama_mhs') ? "has-error" : null ?>">
                  <label for="Nama"> Nama</label>
                  <input type="text" name="nama_mhs" id="Nama" class="form-control" value="<?php echo $mahasiswa->nama_mhs ?>" autocomplete="off">
                  <span class="help-block"><?php echo form_error('nama_mhs'); ?></span>
                </div>
                <div class="form-group col-md-9 <?php echo form_error('gender') ? "has-error" : null ?>">
                  <label>Jenis Kelamin</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" value="Laki - Laki" <?php echo $mahasiswa->gender == "Laki - Laki" ? "checked" : null ?>> Laki - Laki &emsp;&emsp;
                    </label>
                    <label>
                      <input type="radio" name="gender" value="Perempuan" <?php echo $mahasiswa->gender == "Perempuan" ? "checked" : null ?>> Perempuan
                    </label>
                  </div>
                  <span class="help-block"><?php echo form_error('gender'); ?></span>
                </div>
                <div class="form-group col-md-9">
                  <label for="Prodi"> Program Studi</label>
                  <input type="text" name="prodi" id="Prodi" class="form-control" value="<?php echo $mahasiswa->prodi ?>" readonly>
                </div>
                <div class="form-group col-md-9 <?php echo form_error('email') ? "has-error" : null ?>">
                  <label for="Email"> Email</label>
                  <input type="text" name="email" id="Email" class="form-control" value="<?php echo $mahasiswa->email ?>" autocomplete="off">
                  <span class="help-block"><?php echo form_error('email'); ?></span>
                </div>
                <div class="form-group col-md-9 <?php echo form_error('alamat') ? "has-error" : null ?>">
                  <label for="Alamat"> Alamat</label>
                  <textarea name="alamat" id="Alamat" class="form-control" rows="8" cols="80"><?php echo $mahasiswa->alamat ?></textarea>
                  <span class="help-block"><?php echo form_error('alamat'); ?></span>
                </div>
                <div class="form-group col-md-9">
                  <button type="reset" class="btn btn-flat" name="submit">Cancel</button>
                  <button type="submit" class="btn btn-success btn-flat" name="submit"><i class="fa fa-paper-plane"> Save</i></button>
                </div>
              </form>
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
  </div>
  <!-- /.content-wrapper -->

  <?php $this->load->view('partials/footer'); ?>

  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  <?php $this->load->view('partials/modal'); ?>
</div>
<!-- ./wrapper -->

<?php $this->load->view('partials/js'); ?>

</body>
</html>
