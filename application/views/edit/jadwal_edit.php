 <!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('templates/head.php') ?>

</head>
<body id="page-top">

<?php $this->load->view('templates/navbar_tambah.php') ?>  


  <div id="wrapper" style="background-image: url(<?php echo base_url('assets/img/biruu.jpg') ?>">



    <div id="content-wrapper">

      <div class="container-fluid">
        <?php if ($this->session->flashdata('pesan')): ?>
        <div class="alert alert-warning" role="alert">
          <?php echo $this->session->flashdata('pesan'); ?>
        </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('message')): ?>
           <div class="alert alert-warning" role="alert">
          <?php echo $this->session->flashdata('message'); ?>
            </div>
        <?php endif; ?>
        
		<!-- Breadcrumbs-->
<div class="row">
  <div class="col-md-4"></div>
    <div class="col-md-6">
      <ol class="breadcrumb"  style="width: 450px;">
       <li class="breadcrumb-item " >
        <h5> Silahkan Ubah Data Dibawah Ini</h5>
       </li>
      </ol>
    </div>
  </div>

	<form method="POST" action="<?php echo site_url('listdata/update_jadwal')  ?>" enctype="multipart/form-data" class="col-md-12">
		<div class="row">
      <div class="col-md-4"></div>
			<div class="col-md-4">

				<div class="form-group">
          <label><b>Nama Ruang</b></label>
          <select class="form-control" name="kode_ruang" onchange="showUser(this.value)">

          <?php foreach ($jadwal as $jadwal): ?>
          <option value="<?php echo $jadwal->kode_ruang; ?>"><?php echo $jadwal->nama_ruang ?></option>
       
          <?php foreach ($list as $list){ ?>
          <option value="<?php echo $list->kode_ruang; ?>"><?php echo $list->nama_ruang; ?></option>
          <?php } ?>

          </select> 
          </div>
         
          <div class="form-group">
          <label><b>Dinas Terkait</b></label>
          <select class="form-control" name="id_dinas" onchange="showUser(this.value)">
            
            <option value="<?php echo $jadwal->id_dinas; ?>"><?php echo $jadwal->nama_dinas ?></option>

            <?php foreach ($dinas as $dinas) { ?> 
            <option value="<?php echo $dinas->id_dinas; ?>"><?php echo $dinas->nama_dinas; ?> </option>
          <?php } ?>
          </select> 
        </div>

        <input type="hidden" name="id_peminjaman" value="<?php echo $jadwal->id_peminjaman; ?>">

				<div class="form-group">
					<label for="Tanggal"><b>Tanggal Pinjam</b></label>
					<input value="<?php $tgl = $jadwal->date_start;
                        $date = date("Y-m-d", strtotime($tgl));
                        echo $date ?>"  type="date" class="form-control" name="date_start">
				</div>

       
				<div class="form-group">
					<label for="Jam Mulai"><b>Jam Mulai</b></label>
					<input value="<?php $jam = $jadwal->jam_mulai;
                        $time = date("H:i:s", strtotime($jam));
                        echo $time; ?>"  type="time" class="form-control" name="jam_mulai">
				</div>

				<div class="form-group">
					<label for="Jam Selesai"><b>Jam Selesai</b></label>
					<input value="<?php $jam = $jadwal->jam_selesai;
                        $time = date("H:i:s", strtotime($jam));
                        echo $time; ?>"  type="time" class="form-control" name="jam_selesai">
				</div>   

        <div class="form-group">
          <label><b>Kegiatan</b></label>
          <textarea name="kegiatan" class="form-control"><?php echo $jadwal->kegiatan; ?></textarea>
        </div>  
                                   
			</div>
		  <?php endforeach; ?>
           
			</div>
		</div>
    
    
		<div class="card-footer small text-muted text-center">
			<button name='tambah' type='submit' class='btn btn-primary col-md-2 col-xs-12'>Simpan Perubahan</button> 
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


  <?php $this->load->view('templates/foot.php'); ?>

</body>

</html>
