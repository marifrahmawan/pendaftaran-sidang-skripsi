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
      <h1>Jadwal<small>Data Jadwal</small></h1>
        <?php $this->load->view('partials/breadcrumb') ?>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <!-- Alert -->
              <?php if ($this->session->flashdata('success')): ?>
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Success</h4>
                <?php echo $this->session->flashdata('success'); ?>
              </div>
              <?php endif; ?>
              <!-- ./Alert -->
              <h3 class="box-title">Data Jadwal</h3>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="mahasiswa" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="1%">No. </th>
                  <th>NIM</th>
                  <th>Mahasiswa</th>
                  <th>Dosen</th>
                  <th>Ruang</th>
                  <th>Tgl. Sidang</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i=1; foreach ($jadwal as $value) :?>
                  <tr>
                    <td align="center"><?php echo $i++." ." ?></td>
                    <td><?php echo $value->nim ?></td>
                    <td><?php echo $value->niy ?></td>
                    <td><?php echo $value->ruang ?></td>
                    <td><?php echo $value->tgl_sidang ?></td>
                    <td>
                      <a href="<?php echo base_url('dosen/detail/'.$value->niy) ?>" class="btn btn-sm btn-info btn-flat"><i class="fa fa-book"></i> Detail</a>
                      <a href="<?php echo base_url('dosen/edit/'.$value->niy) ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                      <a onclick="deleteConfirm('<?php echo site_url('dosen/delete/'.$value->niy) ?>')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                <?php endforeach ?>
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
