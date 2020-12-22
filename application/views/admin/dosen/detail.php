
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
      <h1>Dosen<small>Detail Dosen</small></h1>
        <?php $this->load->view('partials/breadcrumb') ?>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Detail Dosen : <?php echo $dosen->nama_dsn ?></h3>
              <div class="pull-right">
                <a href="<?php echo base_url('dosen') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                  <tr>
                    <td width="10%">NIY </td>
                    <td width="1%"> : </td>
                    <td><?php echo $dosen->niy ?></td>
                  </tr>
                  <tr>
                    <td width="10%">NIDN </td>
                    <td width="1%"> : </td>
                    <td><?php echo $dosen->nidn ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Jenis Kelamin </td>
                    <td width="1%"> : </td>
                    <td><?php echo $dosen->gender ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Jabatan Fungsional </td>
                    <td width="1%"> : </td>
                    <td><?php echo $dosen->jbtn_fungsional ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Bidang Keahlian </td>
                    <td width="1%"> : </td>
                    <td><?php echo $dosen->bidang_ahli ?></td>
                  </tr>
                  <tr>
                    <td width="10%">E-Mail </td>
                    <td width="1%"> : </td>
                    <td><?php echo $dosen->email ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Website </td>
                    <td width="1%"> : </td>
                    <td><?php echo $dosen->website ?></td>
                  </tr>
                  <tr>
                    <td width="10%">Alamat </td>
                    <td width="1%"> : </td>
                    <td><?php echo $dosen->alamat ?></td>
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
