<!DOCTYPE html>
<html lang="en">
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
				<h1>Seminar<small>Daftar</small></h1>
				<?php $this->load->view('partials/breadcrumb') ?>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Pendaftaran Seminar Proposal</h3>
								<div class="pull-right">
									<a href="<?php echo base_url('pendadaran') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
                <div>
                  <?php
                    $ci =& get_instance();
            			  $user_session = $ci->session->userdata('id_user');
                		$host = @mysql_connect("localhost", "root", "");
			              $db = mysql_select_db("db_skripsi");
			              $query = mysql_query("SELECT * FROM mahasiswa where nim = '$user_session' ");
			              if($row = mysql_fetch_array($query)){
                  ?>
                </div>

								<form action="<?php base_url('seminar/add') ?>" method="post" enctype="multipart/form-data" >
                  <div class="form-group col-md-9 <?php echo form_error('nim') ? "has-error" : null ?>">
                		<label class="form-label" for="nim">NIM</label>
                		<input class="form-control" type="text" name="nim" id="nim" value="<?php echo $row['nim'] ?>" readonly>
                		<span class="help-block"><?php echo form_error('nim'); ?></span>
                	</div>
                	<div class="form-group col-md-9 <?php echo form_error('nama_mhs') ? "has-error" : null ?>">
                		<label class="form-label" for="nama_mhs">Nama</label>
                		<input class="form-control" type="text" name="nama_mhs" id="nama_mhs" value="<?php echo $row['nama_mhs'] ?>" readonly>
                		<span class="help-block"><?php echo form_error('nama_mhs'); ?></span>
                	</div>
                	<div class="form-group col-md-5 <?php echo form_error('judul_skripsi') ? "has-error" : null ?>">
                		<label class="form-label" for="judul_skripsi">Judul Skripsi</label>
                		<input class="form-control" type="text" name="judul_skripsi" id="judul_skripsi">
                		<span class="help-block"><?php echo form_error('judul_skripsi'); ?></span>
                	</div>
                  <div class="form-group col-md-4 <?php echo form_error('docseminar') ? "has-error" : null ?>">
                		<label class="form-label" for="docseminar">File Proposal</label>
                		<input class="form-control-file" type="file" name="docseminar" id="docseminar">
                		<span class="help-block"><?php echo form_error('docseminar'); ?></span>
                	</div>
                  <?php } ?>
                  <div class="form-group col-md-12">
										<input class="btn btn-success btn-flat" type="submit" name="btn" value="Save" />
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

		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
			<?php $this->load->view('partials/modal'); ?>
		</div>
		<!-- ./wrapper -->

		<?php $this->load->view('partials/js'); ?>

	</body>
	</html>
