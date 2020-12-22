
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
      <h1>Dashboard</h1>
      <?php $this->load->view('partials/breadcrumb') ?>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if ($this->session->userdata('level') == 1) {
      ?>
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <?php
            $host = @mysql_connect("localhost", "root", "");
            $db = mysql_select_db("db_skripsi");
            $query = mysql_query("SELECT * FROM dosen");
            $count = mysql_num_rows($query);
          ?>
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $count; ?></h3>

              <p>Dosen</p>
            </div>
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <a href="<?php echo base_url('dosen') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <?php
            $host = @mysql_connect("localhost", "root", "");
            $db = mysql_select_db("db_skripsi");
            $query = mysql_query("SELECT * FROM mahasiswa");
            $count = mysql_num_rows($query);
          ?>
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $count; ?></h3>

              <p>Mahasiswa</p>
            </div>
            <div class="icon">
              <i class="fa fa-graduation-cap"></i>
            </div>
            <a href="<?php echo base_url('mahasiswa') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <?php
            $host = @mysql_connect("localhost", "root", "");
            $db = mysql_select_db("db_skripsi");
            $query = mysql_query("SELECT * FROM user");
            $count = mysql_num_rows($query);
          ?>
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo $count-1; ?></h3>

              <p>Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="<?php echo base_url('users') ?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <?php } ?>
      <!-- ./row -->
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><i class="fa fa-bookmark-o"></i> Info Pengumuman</h3>
        </div>
        <div class="box-body">
          <b>Info Pembayaran SPP :</b>
          <br><br>
          <li>Untuk menghindari antrian, manfaatkan loket bank untuk pembayaran SPP : BRI, BSM, BNI Syariah, Bukopin Syariah, BPD DIY (khusus BPD DIY juga dilayani melalui ATM)</li>
          <li><b>Perhatian</b> khusus untuk mahasiswa(i), pastikan bahwa tidak ada kekurangan pembayaran semester sebelumnya <span class="text-warning"><b>(tagihan Rp. 0,-)</b>
              </span>, karena akan menimbulkan masalah pada waktu pengecekan akhir menjelang ujian skripsi.
          </li><br>
          <b>Info SIMERU :</b>
          <li>Surat izin perkuliahan, mahasiswa juga wajib mengisi <a target="_blank" href="https://goo.gl/VHnGe1">form online ini</a> atau bisa akses link ini <a target="_blank" href="https://goo.gl/VHnGe1"> goo.gl/VHnGe1</a> </li>
          <li> Setelah registrasi mandiri selesai, silakan serahkan fotokopi surat ijin dan surat ijin yang asli untuk diverifikasi dan didokumentasikan. Data harus sesuai dengan surat ijin dan ketentuan WR 1 tentang perkuliahan. </li>

        </div>
      </div>
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><i class="fa fa-rss"></i> BERITA</h3>
        </div>
        <div class="box-body">
          <div class="col-md-12 col-sm-12 col-xs-12 article-block">
            <div class="row">
              <div class="col-md-4 blog-img blog-tag-data">
                <img src="https://portal.uad.ac.id/upload/site_img/calendar.jpg" alt="" class="img-responsive">
                <br>
                <ul class="list-inline blog-tags"></ul>
              </div>
              <div class="col-md-8 blog-article">
                <h3><a href="https://portal.uad.ac.id/forum/berita/kalender-akademik-2018-2019#1531549020">Kalender Akademik 2018/2019</a></h3>
                <p>Kalender akademik merupakan jadwal penyelenggaraan kegiatan akademik dalam jangka waktu satu tahun ajaran (2 semester). Mahasiswa Universitas Ahmad Dahlan (UAD)  wajib untuk memiliki dan mengetahui</p>
                  <a class="btn btn-primary" href="https://portal.uad.ac.id/forum/berita/kalender-akademik-2018-2019#1531549020"> Read more <i class="m-icon-swapright m-icon-white"></i></a>
              </div>
            </div>
            <hr>
            <span class="address" style="opacity:0;">*.portal.uad.ac.id</span>
          </div>
        </div>
      </div>
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
