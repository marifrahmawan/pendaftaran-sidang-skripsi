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
		<?php $this->load->view('partials/conn'); ?>
		<!-- Left side column. contains the sidebar -->
		<aside class="main-sidebar">
			<?php $this->load->view('partials/sidebar'); ?>
		</aside>

		<!-- =============================================== -->

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header"><br>
				<h1>Pengajuan Skripsi<small>Detail</small></h1>
				<?php $this->load->view('partials/breadcrumb') ?>
			</section>

			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title">Detail Pengajuan Skripsi</h3>
								<div class="pull-right">
									<a href="<?php echo base_url('pendadaran') ?>" class="btn btn-warning btn-flat"><i class="fa fa-undo"></i> Kembali</a>
								</div>
							</div>
							<!-- /.box-header -->
							<div class="box-body">
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <td width="10%">NIM </td>
                      <td width="1%"> : </td>
                      <td><?php echo $seminar->nim ?></td>
                    </tr>
                    <tr>
                      <td width="10%">Nama </td>
                      <td width="1%"> : </td>
                      <td><?php echo $seminar->nama_mhs ?></td>
                    </tr>
										<tr>
                      <td width="10%">Pembimbing </td>
                      <td width="1%"> : </td>
                      <td>
												<?php
													$host = @mysqli_connect("localhost", "root", "");
													$db = mysqli_select_db($host, "db_skripsi");
													$query = mysqli_query($host, "SELECT * FROM dosen INNER JOIN seminar on seminar.pembimbing=dosen.niy where seminar.nim='$seminar->nim'");
													while($row = mysqli_fetch_array($query)){
														echo $row['nama_dsn'];
													}
												?>
											</td>
                    </tr>
										<tr>
                      <td width="10%">Penguji 1 </td>
                      <td width="1%"> : </td>
                      <td>
												<?php
													$host = @mysqli_connect("localhost", "root", "");
													$db = mysqli_select_db($host, "db_skripsi");
													$query = mysqli_query($host, "SELECT * FROM dosen INNER JOIN seminar on seminar.penguji_1=dosen.niy where seminar.nim='$seminar->nim'");
													while($row = mysqli_fetch_array($query)){
														echo $row['nama_dsn'];
													}
												?>
											</td>
                    </tr>
										<tr>
                      <td width="10%">Penguji 2 </td>
                      <td width="1%"> : </td>
                      <td>
												<?php
													$host = @mysqli_connect("localhost", "root", "");
													$db = mysqli_select_db($host, "db_skripsi");
													$query = mysqli_query($host, "SELECT * FROM dosen INNER JOIN seminar on seminar.penguji_2=dosen.niy where seminar.nim='$seminar->nim'");
													while($row = mysqli_fetch_array($query)){
														echo $row['nama_dsn'];
													}
												?>
											</td>
                    </tr>
                    <tr>
                      <td width="10%">Judul Skripsi </td>
                      <td width="1%"> : </td>
                      <td><?php echo $seminar->judul_skripsi ?></td>
                    </tr>
										<tr>
                      <td width="10%">Status </td>
                      <td width="1%"> : </td>
                      <td>
												<?php
													if ($seminar->status == NULL) {
														echo "Belum Ujian";
													}
													else {
															echo $seminar->status;
													}
												?>
											</td>
                    </tr>
                    <tr>
                      <td width="10%">File Proposal </td>
                      <td width="1%"> : </td>
                      <td>
                        <object height="950" data="../../upload/proposal/<?php echo $seminar->docseminar ?>" type="application/pdf" width="950">
                          <p>It appears you don't have a PDF plugin for this browser. No biggie... you can <a href="../../upload/proposal/<?php echo $seminar->image ?>">click here to download the PDF file.</a></p>
                        </object>
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

		<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
		<div class="control-sidebar-bg"></div>
			<?php $this->load->view('partials/modal'); ?>
		</div>
		<!-- ./wrapper -->

		<?php $this->load->view('partials/js'); ?>

	</body>
	</html>
