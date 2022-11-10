	<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view('templates/head.php') ?>

</head>
<body id="page-top">

<?php $this->load->view('templates/navbar_tambah.php') ?>        

  <div id="wrapper" style="background-image: url(<?php echo base_url('assets/img/biruu.jpg') ?>">


    <div id="content-wrapper">

      <div class="container-fluid" style="background-image: url(<?php echo base_url('assets/img/biruu.jpg') ?>">
      <?php if ($this->session->flashdata('message')){ ?>
        <div class="alert alert-warning" role="alert">
          <?php echo $this->session->flashdata('message'); ?>
        </div>
        <?php } ?>
        <?php if ($this->session->flashdata('pinjam')){ ?>
        <div class="alert alert-warning" role="alert">
          <?php echo $this->session->flashdata('pinjam'); ?>
        </div>
        <?php } ?>
      
		<!-- Breadcrumbs-->
<div class="row">
  <div class="col-md-4"></div>
    <div class="col-md-6">
      <ol class="breadcrumb"  style="width: 450px;">
       <li class="breadcrumb-item " >
        <h5> Silahkan Isi Data Dibawah Ini</h5>
       </li>
      </ol>
    </div>
  </div>

  	<form method="POST" action="<?php echo base_url('listdata/tambah_aksi') ?>" enctype="multipart/form-data" class="col-md-12">
		<div class="row">
      <div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="form-group">
          <label><b>Nama Ruang</b></label>
          <select class="form-control" name="kode_ruang" onchange="showUser(this.value)">
            <option>Pilih ruangan</option>
            <?php foreach ($list as $list): ?> 
              
            <option required="required" value="<?php echo $list->kode_ruang; ?>"><?php echo $list->nama_ruang; ?> </option>
          <?php endforeach; ?>
          </select> 
        </div>
         <div class="form-group">
          <label><b>Dinas Penyelenggara</b></label>
          <select class="form-control" name="id_dinas" onchange="showUser(this.value)">
            <option>Pilih dinas Penyelenggara</option>
            <?php foreach ($dinas as $dinas): ?> 
            <option required="required" value="<?php echo $dinas->id_dinas; ?>"><?php echo $dinas->nama_dinas; ?> </option>
          <?php endforeach; ?>
          </select> 
        </div>    
				<div class="form-group">
					<label for="Tanggal"><b>Tanggal Pinjam</b></label>
					<input required="required" value="<?php
                          date_default_timezone_set('Asia/Jakarta');
                          $now = date('Y-m-d');
                          echo $now; ?>"  type="date" class="form-control" name="date_start">
				</div>
      	<div class="form-group">
					<label for="Jam Mulai" ><b>Jam Mulai</b></label>
					<input required="required" value="<?php echo set_value('jam_mulai')?>"  type="time" class="form-control" name="jam_mulai">
				</div>
				<div class="form-group">
					<label for="Jam Selesai"><b>Jam Selesai</b></label>
					<input required="required" value=""  type="time" class="form-control" name="jam_selesai">
				</div>
        <div class="form-group">
          <label><b>Kegiatan</b></label>
          <textarea required="required" class="form-control" name="kegiatan"></textarea>
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

  


 
<footer class="">
  <?php $this->load->view('templates/foot');  ?>
</footer>
</body>

</html>
