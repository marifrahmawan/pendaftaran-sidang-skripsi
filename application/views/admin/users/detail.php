
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
      <h1>Users<small>Detail Users</small></h1>
        <?php $this->load->view('partials/breadcrumb') ?>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Users : <?php echo $user->nama ?></h3>
              <div class="pull-right">
                <a href="<?php echo base_url('users') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td width="10%">Username </td>
                    <td width="1%"> : </td>
                    <td><?php echo $user->username ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Nama </td>
                    <td width="1%"> : </td>
                    <td><?php echo $user->nama ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Alamat </td>
                    <td width="1%"> : </td>
                    <td><?php echo $user->alamat ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Level </td>
                    <td width="1%"> : </td>
                    <td>
                      <?php
                        if ($user->level == 1) {
                          echo "Administrator";
                        }
                        elseif ($user->level == 2) {
                          echo "Dosen";
                        }
                        elseif ($user->level == 3) {
                          echo "Mahasiswa";
                        }
                      ?>
                    </td>
                  </tr>
                </tbody>
              </table>
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
