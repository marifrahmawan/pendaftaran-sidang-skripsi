
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
      <h1>Pengajuan Skripsi<small>Data Skripsi</small></h1>
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
              <h3 class="box-title">Data Skripsi</h3>
              <?php
                $user_session = $this->session->userdata('id_user');
                $host = @mysqli_connect("localhost", "root", "");
                $db = mysqli_select_db($host, "db_skripsi");
                $queryadmin = mysqli_query($host, "SELECT * FROM seminar");
                $querymhs = mysqli_query($host, "SELECT * FROM seminar where nim ='$user_session'");
                $count = mysqli_num_rows($querymhs);
                if ($this->session->userdata('level') == 3) {
                  if ($count < 1){
              ?>
              <div class="pull-right">
                <a hidden href="<?php echo base_url('seminar/add') ?>" class="btn btn-primary btn-flat"><i class="fa fa-user-plus"></i> Tambah</a>
              </div>
              <?php }} ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="mahasiswa" class="table table-bordered table-striped">

                <thead>
                <tr>
                  <th width="1%">No. </th>
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>Judul</th>
                  <th>Status</th>
                  <th>Tgl. Pendadaran</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    if($this->session->userdata('level') == 1){
                      $i=1; while ($row = mysqli_fetch_array($queryadmin)) {
                  ?>
                  <!-- Seminar Untuk Administrator -->
                  <tr>
                    <td align="center"><?php echo $i++." ." ?></td>
                    <td><?php echo $row['nim'] ?></td>
                    <td><?php echo $row['nama_mhs'] ?></td>
                    <td><?php echo $row['judul_skripsi'] ?></td>
                    <td> <!-- Status -->
                      <?php
                        if ($row['status'] == NULL){
                          echo "Belum Ujian";
                        }else{
                          echo $row['status'];
                        }
                      ?>
                    </td>
                    <td> <!--- Tanggal Seminar --->
                      <?php
                        if ($row['tgl_seminar'] == NULL) {
                          echo "Belum Ditentukan";
                        }else {
                          echo $row['tgl_seminar'];
                        }
                      ?>
                    </td>
                    <td>
                      <a href="<?php echo base_url('pendadaran/detail/'.$row['nim']) ?>" class="btn btn-sm btn-info btn-flat"><i class="fa fa-book"></i> Detail</a>
                      <a href="<?php echo base_url('pendadaran/edit/'.$row['nim']) ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Update</a>
                      <a onclick="deleteConfirm('<?php echo site_url('pendadaran/delete/'.$row['nim']) ?>')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <!-- /Seminar Untuk Administrator -->

                  <?php
                      }
                    }
                    else{
                      $i=1; while ($row = mysqli_fetch_array($querymhs)) {
                  ?>
                  <!-- Seminar Untuk Mahasiswa -->
                  <tr>
                    <td align="center"><?php echo $i++." ." ?></td>
                    <td><?php echo $row['nim'] ?></td>
                    <td><?php echo $row['nama_mhs'] ?></td>
                    <td><?php echo $row['judul_skripsi'] ?></td>
                    <td> <!-- Status -->
                      <?php
                        if ($row['status'] == NULL){
                          echo "Belum Ujian";
                        }else{
                          echo $row['status'];
                        }
                      ?>
                    </td>
                    <td> <!--- Tanggal Seminar --->
                      <?php
                        if ($row['tgl_seminar'] == NULL) {
                          echo "Belum Ditentukan";
                        }else {
                          echo $row['tgl_seminar'];
                        }
                      ?>
                    </td>
                    <td>
                      <a href="<?php echo base_url('pendadaran/detail/'.$row['nim']) ?>" class="btn btn-sm btn-info btn-flat"><i class="fa fa-book"></i> Detail</a>
                      <a href="<?php echo base_url('pendadaran/edit/'.$row['nim']) ?>" class="btn btn-sm btn-primary btn-flat"><i class="fa fa-edit"></i> Edit</a>
                      <a onclick="deleteConfirm('<?php echo site_url('pendadaran/delete/'.$row['nim']) ?>')" class="btn btn-sm btn-danger btn-flat"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                <?php }} ?>
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
