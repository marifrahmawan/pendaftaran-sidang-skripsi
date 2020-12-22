
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
      <h1>Dosen<small>Edit Dosen</small></h1>
        <?php $this->load->view('partials/breadcrumb') ?>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Dosen</h3>
              <div class="pull-right">
                <a href="<?php echo base_url('dosen') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="" method="post">
                  <input type="hidden" name="id" id="niy" class="form-control" value="<?php echo $dosen->niy ?>" autocomplete="off">
                  <input type="hidden" name="nidn" id="nidn" class="form-control" value="<?php echo $dosen->nidn ?>" autocomplete="off">

                <div class="form-group col-md-9 <?php echo form_error('nama_dsn') ? "has-error" : null ?>">
                  <label for="nama_dsn"> Nama</label>
                  <input type="text" name="nama_dsn" id="nama_dsn" class="form-control" value="<?php echo $dosen->nama_dsn ?>" autocomplete="off">
                  <span class="help-block"><?php echo form_error('nama_dsn'); ?></span>
                </div>
                <div class="form-group col-md-9 <?php echo form_error('gender') ? "has-error" : null ?>">
                  <label>Jenis Kelamin</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" value="Laki - Laki" <?php echo $dosen->gender == "Laki - Laki" ? "checked" : null ?>> Laki - Laki &emsp;&emsp;
                    </label>
                    <label>
                      <input type="radio" name="gender" value="Perempuan" <?php echo $dosen->gender == "Perempuan" ? "checked" : null ?>> Perempuan
                    </label>
                  </div>
                  <span class="help-block"><?php echo form_error('gender'); ?></span>
                </div>
                <div class="form-group col-md-9 <?php echo form_error('jbtn_fungsional') ? "has-error" : null ?>">
                  <label for="jbtn_fungsional"> Jabatan Fungsional</label>
                  <input type="text" name="jbtn_fungsional" id="jbtn_fungsional" class="form-control" value="<?php echo $dosen->jbtn_fungsional ?>" autocomplete="off">
                  <span class="help-block"><?php echo form_error('jbtn_fungsional'); ?></span>
                </div>
                <div class="form-group col-md-9 <?php echo form_error('bidang_ahli') ? "has-error" : null ?>">
                  <label for="bidang_ahli"> Bidang Keahlian</label>
                  <input type="text" name="bidang_ahli" id="bidang_ahli" class="form-control" value="<?php echo $dosen->bidang_ahli ?>" autocomplete="off">
                  <span class="help-block"><?php echo form_error('bidang_ahli'); ?></span>
                </div>
                <div class="form-group col-md-9 <?php echo form_error('email') ? "has-error" : null ?>">
                  <label for="email"> Email</label>
                  <input type="text" name="email" id="email" class="form-control" value="<?php echo $dosen->email ?>" autocomplete="off">
                  <span class="help-block"><?php echo form_error('email'); ?></span>
                </div>
                <div class="form-group col-md-9 <?php echo form_error('website') ? "has-error" : null ?>">
                  <label for="website"> Website</label>
                  <input type="text" name="website" id="website" class="form-control" value="<?php echo $dosen->website ?>" autocomplete="off">
                  <span class="help-block"><?php echo form_error('website'); ?></span>
                </div>
                <div class="form-group col-md-9 <?php echo form_error('nim') ? "has-error" : null ?>">
                  <label for="alamat"> Alamat</label>
                  <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $dosen->alamat ?>" autocomplete="off">
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
