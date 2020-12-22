
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
      <h1>User<small>Edit User</small></h1>
        <?php $this->load->view('partials/breadcrumb') ?>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit User : <?php echo $user->nama ?></h3>
              <div class="pull-right">
                <a href="<?php echo base_url('users') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form action="" method="post">
                <input type="hidden" name="id" class="form-control" value="<?php echo $user->id ?>">
                <input type="hidden" name="id_user" class="form-control" value="<?php echo $user->id_user ?>">
                <input type="hidden" name="level" value="<?php echo $user->level ?>">
                <div class="form-group col-md-9 <?php echo form_error('nama') ? "has-error" : null ?>">
                  <label for="Nama"> Nama</label>
                  <input type="text" name="nama" id="Nama" class="form-control" value="<?php echo $user->nama ?>" >
                  <span class="help-block"><?php echo form_error('nama'); ?></span>
                </div>
                <div class="form-group col-md-9">
                  <label for="Username"> Username</label>
                  <input type="text" name="username" id="Username" class="form-control" value="<?php echo $user->username ?>" readonly>
                </div>

                <div class="form-group col-md-9 <?php echo form_error('alamat') ? "has-error" : null ?>">
                  <label for="Alamat"> Alamat</label>
                  <textarea name="alamat" id="Alamat" class="form-control" rows="8" cols="80"><?php echo $user->alamat ?></textarea>
                  <span class="help-block"><?php echo form_error('alamat'); ?></span>
                </div>
                <div class="box-header col-xs-12">
                  <h3 class="box-title">Ganti Password</h3><br><br>
                </div>
                <div class="form-group col-md-2 <?php echo form_error('password') ? "has-error" : null ?>">
                  <label for="password"> Pasword</label>
                  <input type="password" name="password" id="password" class="form-control" value="<?php echo set_value('password') ?>" autocomplete="off">
                  <span class="help-block"><?php echo form_error('password'); ?></span>
                </div>
                <div class="form-group col-md-2 <?php echo form_error('password_conf') ? "has-error" : null ?>">
                  <label for="password_conf">Konfirmasi Pasword</label>
                  <input type="password" name="password_conf" id="password_conf" class="form-control" value="<?php echo set_value('password_conf') ?>" autocomplete="off">
                  <span class="help-block"><?php echo form_error('password_conf'); ?></span>
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
