	<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('templates/head.php') ?>

</head>
<body id="page-top">

<?php $this->load->view('templates/navbar_tambah.php') ?>  
<?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

  <div id="wrapper">


    <div id="content-wrapper">

      <div class="container-fluid">

		<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <div class="col-md-4"></div>
           <div class="col-md-6">
          <li class="breadcrumb-item" >
           <h5> Silahkan Masukkan Nama Ruang dan Jadwal Peminjaman</h5>
          </li></div>
          <div class="col-md-2"></div>
	</ol>
	<form method="POST" action="<?php echo base_url('tambah/tambah_aksi') ?>" enctype="multipart/form-data" class="col-md-12">
		<div class="row">
      <div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="form-group">
          <label>Nama Ruang</label>
          <select class="form-control" name="kode_ruang" onchange="showUser(this.value)">
            <option>pilih ruangan</option>
            <?php foreach ($list as $list): ?> {
              # code...
            }
            <option value="<?php echo $list->kode_ruang; ?>"><?php echo $list->nama_ruang; ?> </option>
          <?php endforeach; ?>
          </select> 
        </div>
				<div class="form-group">
					<label for="Tanggal">Tanggal Pinjam</label>
					<input value=""  type="date" class="form-control" name="date_start">
				</div>
        <div class="form-group">
          <label for="Tanggal">Tanggal Selesai</label>
          <input value=""  type="date" class="form-control" name="date_end">
        </div>
				<div class="form-group">
					<label for="Jam Mulai" >Jam Mulai</label>
					<input value=""  type="time" class="form-control" name="jam_mulai">
				</div>
				<div class="form-group">
					<label for="Jam Selesai">Jam Selesai</label>
					<input value=""  type="time" class="form-control" name="jam_selesai">
				</div>                                    
			</div>
			
			</div>
		</div>
    
    
		<div class="card-footer small text-muted text-center">
			<button name='tambah' type='submit' class='btn btn-primary col-md-2 col-xs-12'>Tambah</button> 
		</div>
    <div class="card-footer small text-muted text-center">
      <a href="<?php echo base_url('listdata') ?>">
        <button name="batal" type="button" class="btn btn-primary col-md-2 col-xs-12">Kembali</button></a></div>
	</form>
  <?php
  date_default_timezone_set('Asia/Jakarta');
  $now = date('Y/m/d H:i:s');
  echo $now;
  ?>
     
	<p class="small text-center text-muted my-5">
		<em></em>
	</p>

</div>

<!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Dinas Komunikasi, Informatika, dan Persandian Kab. Banyuwangi</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/vendor/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="<?php echo base_url() ?>assets/js/demo/datatables-demo.js"></script>

</body>

</html>
