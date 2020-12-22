<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?php echo base_url() ?>/assets/dist/img/user.png" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>
        <?php
          $ci =& get_instance();
          $user_session = $ci->session->userdata('nama');
          echo $user_session;
        ?>
      </p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
        </button>
      </span>
    </div>
  </form>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->

  <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>

    <li>
      <a href="<?php echo base_url() ?>">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
      </a>
    </li>
    <?php
      if ($this->session->userdata('level') == 1) {
    ?>
    <li>
      <a href="<?php echo base_url() ?>mahasiswa">
        <i class="fa fa-graduation-cap"></i> <span>Mahasiswa</span>
      </a>
    </li>
    <?php } ?>

    <?php
      if ($this->session->userdata('level') == 1) {
    ?>
    <li>
      <a href="<?php echo base_url() ?>dosen">
        <i class="fa fa-university"></i> <span>Dosen</span>
      </a>
    </li>
    <?php } ?>

    <?php
      if ($this->session->userdata('level') == 1) {
    ?>
    <li>
      <a href="<?php echo base_url() ?>users">
        <i class="fa fa-users"></i> <span>Users</span>
      </a>
    </li>
    <?php } ?>

    <?php
      if ($this->session->userdata('level') == 1) {
    ?>
    <li>
      <a href="<?php echo base_url() ?>pendadaran">
        <i class="fa fa-book"></i> <span>Skripsi</span>
      </a>
    </li>
    <?php } ?>

    <?php
      if ($this->session->userdata('level') == 2) {
    ?>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-graduation-cap"></i> <span> Mahasiswa</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="<?php echo base_url() ?>bimbingan"><i class="fa fa-circle-o"></i> Bimbingan</a></li>
        <li><a href="<?php echo base_url() ?>skripsi"><i class="fa fa-circle-o"></i> Skripsi</a></li>
      </ul>
    </li>
    <?php } ?>

    <?php
      if ($this->session->userdata('level') == 3) {
    ?>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-book"></i> <span> Skripsi</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu" style="display: none;">
        <li><a href="<?php echo base_url() ?>pendadaran"><i class="fa fa-circle-o"></i> Pengajuan Skripsi</a></li>
      </ul>
    </li>
    <?php } ?>

  </ul>
</section>
<!-- /.sidebar -->
