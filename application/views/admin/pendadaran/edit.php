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
		<?php $this->load->view('partials/conn'); ?>
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header"><br>
				<h1>Pengajuan Skripsi<small>Edit</small></h1>
				<?php $this->load->view('partials/breadcrumb') ?>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Edit Pengajuan Skripsi</h3>
								<div class="pull-right">
									<a href="<?php echo base_url('pendadaran') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
								<form action="<?php base_url('seminar/edit') ?>" method="post" enctype="multipart/form-data" >
									<input type="hidden" name="id" value="<?php echo $seminar->id ?>">
									<div class="form-group col-md-9 <?php echo form_error('nim') ? "has-error" : null ?>">
										<label class="form-label" for="nim">NIM</label>
										<input class="form-control" type="text" name="nim" id="nim" value="<?php echo $seminar->nim ?>" readonly>
										<span class="help-block"><?php echo form_error('nim'); ?></span>
									</div>

									<div class="form-group col-md-9 <?php echo form_error('nama_mhs') ? "has-error" : null ?>">
										<label class="form-label" for="nama_mhs">Nama</label>
										<input class="form-control" type="text" name="nama_mhs" id="nama_mhs" value="<?php echo $seminar->nama_mhs ?>" readonly>
										<span class="help-block"><?php echo form_error('nama_mhs'); ?></span>
									</div>

									<div class="form-group col-md-5 <?php echo form_error('judul_skripsi') ? "has-error" : null ?>">
										<label class="form-label" for="judul_skripsi">Judul Skripsi</label>
										<input class="form-control" type="text" name="judul_skripsi" id="judul_skripsi" value="<?php echo $seminar->judul_skripsi ?>">
										<span class="help-block"><?php echo form_error('judul_skripsi'); ?></span>
									</div>

									<div class="form-group col-md-4 <?php echo form_error('docseminar') ? "has-error" : null ?>">
										<label class="form-label" for="docseminar">File Skripsi</label>
										<input class="form-control-file" type="file" name="docseminar" id="docseminar">
										<input type="hidden" name="old_file" value="<?php echo $seminar->docseminar ?>">
										<span class="help-block"><?php echo form_error('docseminar'); ?></span>
									</div>

									<?php
										if ($this->session->userdata('level') == 1){
									?>
									<!-- PEMBIMBING -->
									<div class="form-group col-md-9 <?php echo form_error('pembimbing') ? "has-error" : null ?>">
										<label >Dosen Pembimbing</label>
										<?php
											$host = @mysqli_connect("localhost", "root", "");
											$db = mysqli_select_db($host, "db_skripsi");
											$query = mysqli_query($host, "SELECT * FROM dosen INNER JOIN seminar on seminar.pembimbing=dosen.niy where seminar.nim='$seminar->nim'");
											while($row = mysqli_fetch_array($query)){
										?>
										<select readonly name="old_pembimbing" class="form-control">
											<option value="<?php echo $row['niy']; ?>"><?php echo $row['nama_dsn']; ?></option>
										<?php } ?>
										</select><br>
										<select name="pembimbing" class="form-control">
											<option value="">--- PILIH DOSEN PEMBIMBING ---</option>
											<?php
												$host = @mysqli_connect("localhost", "root", "");
												$db = mysqli_select_db($host, "db_skripsi");
												$query = mysqli_query($host, "SELECT * FROM dosen");
												while($row = mysqli_fetch_array($query)){
											?>
											<option value="<?php echo $row['niy'] ?>"><?php echo $row['nama_dsn'] ?></option>
											<?php } ?>
										</select>
										<span class="help-block"><?php echo form_error('pembimbing'); ?></span>
									</div>

									<!-- PENGUJI 1 -->
									<div class="form-group col-md-9 <?php echo form_error('penguji_1') ? "has-error" : null ?>">
                						<label>Dosen Penguji 1</label>
										<?php
											$host = @mysqli_connect("localhost", "root", "");
											$db = mysqli_select_db($host, "db_skripsi");
											$query = mysqli_query($host, "SELECT * FROM dosen INNER JOIN seminar on seminar.penguji_1=dosen.niy where seminar.nim='$seminar->nim'");
											while($row = mysqli_fetch_array($query)){
										?>
										<select readonly name="old_penguji_1" class="form-control">
											<option value="<?php echo $row['niy']; ?>"><?php echo $row['nama_dsn']; ?></option>
										<?php } ?>
										</select><br>
                						<select name="penguji_1" class="form-control">
											<option value="">--- PILIH DOSEN PENGUJI 1 ---</option>
											<?php
												$host = @mysqli_connect("localhost", "root", "");
												$db = mysqli_select_db($host, "db_skripsi");
												$query = mysqli_query($host, "SELECT * FROM dosen");
												while($row = mysqli_fetch_array($query)){
											?>
                							<option value="<?php echo $row['niy'] ?>"><?php echo $row['nama_dsn'] ?></option>
											<?php } ?>
                						</select>
										<span class="help-block"><?php echo form_error('penguji_1'); ?></span>
									</div>

									<!-- PENGUJI 2 -->
									<div class="form-group col-md-9 <?php echo form_error('penguji_2') ? "has-error" : null ?>">
                						<label >Dosen Penguji 2</label>
										<?php
											$host = @mysqli_connect("localhost", "root", "");
											$db = mysqli_select_db($host, "db_skripsi");
											$query = mysqli_query($host, "SELECT * FROM dosen INNER JOIN seminar on seminar.penguji_2=dosen.niy where seminar.nim='$seminar->nim'");
											while($row = mysqli_fetch_array($query)){
										?>
										<select readonly name="old_penguji_2" class="form-control">
											<option value="<?php echo $row['niy']; ?>"><?php echo $row['nama_dsn']; ?></option>
										<?php } ?>
										</select><br>
                						<select name="penguji_2" class="form-control">
											<option value="">--- PILIH DOSEN PENGUJI 2 ---</option>
											<?php
												$host = @mysqli_connect("localhost", "root", "");
												$db = mysqli_select_db($host, "db_skripsi");
												$query = mysqli_query($host, "SELECT * FROM dosen");
												while($row = mysqli_fetch_array($query)){
											?>
                							<option value="<?php echo $row['niy'] ?>"><?php echo $row['nama_dsn'] ?></option>
											<?php } ?>
                						</select>
										<span class="help-block"><?php echo form_error('penguji_2'); ?></span>
									</div>

									<div class="form-group col-md-3 col-md-offset-4 col-md-pull-4">
										<label>Tanggal Seminar</label>
										<div class="input-group date">
											<div class="input-group-addon">
												<i class="fa fa-calendar"></i>
											</div>
											<input type="text" class="form-control" data-date-format="yyyy mm dd" name="tgl_seminar" id="tgl_seminar" value="<?php echo $seminar->tgl_seminar ?>" autocomplete="off">
										</div>
									</div>

									<div class="form-group col-md-3 col-md-offset-4 col-md-pull-4">
										<label>Status</label>
										<select class="form-control" name="status">
											<option value="">--- Pilih Status ---</option>
											<option value="Ujian Ulang">Ujian Ulang</option>
											<option value="Tidal Lulus">Tidak Lulus</option>
											<option value="Lulus">Lulus</option>
										</select>
									</div>
									<?php } ?>
									<div class="form-group col-md-12">
										<input class="btn btn-success btn-flat" type="submit" name="btn" value="Update" />
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