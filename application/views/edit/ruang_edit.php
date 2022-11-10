 	<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('templates/head.php') ?>
<body id="page-top">

<?php $this->load->view('templates/navbar_tambah.php') ?>  



  <div id="wrapper" style="background-image: url(<?php echo base_url('assets/img/biruu.jpg') ?>">


    <div id="content-wrapper">

      <div class="container-fluid">
<br>
<div class="row">
  <div class="col-md-4"></div>
    <div class="col-md-4">
      <ol class="breadcrumb"  style="width: 450px;">
       <li class="breadcrumb-item " >
        <h5> Silahkan Ubah Data Dibawah Ini</h5>
       </li>
      </ol>
    </div>
  </div>
<br>
<?php foreach ($ruang as $room) {
            ?>
  <!-- form tambah ruang -->
	<form method="POST" action="<?php echo base_url().'list_ruang/update' ?>" enctype="multipart/form-data" class="col-md-12">
		<div class="row">
      <div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="form-group">
				    <input value="<?php echo $room->kode_ruang; ?>"  type="hidden" class="form-control" name="kode_ruang">
					 <label for="nama_ruang"><b>Nama Ruang</b></label>
           <input value="<?php echo $room->nama_ruang; ?>"  type="text" class="form-control" name="nama_ruang">

           <label for="nama_ruang"><b>Username</b></label>
           <input value="<?php echo $room->username; ?>"  type="text" class="form-control" name="username">

           <label for="nama_ruang"><b>Password</b></label>
           <input value="<?php echo $room->password; ?>"  type="Password" class="form-control" name="password">

           <input value="<?php echo $room->akses; ?>"  type="hidden" class="form-control" name="akses">
           
           

			    </div>
			</div>
		</div>
		<div class="card-footer small text-muted text-center">
        <button name='tambah' type='submit' class='btn btn-primary col-md-2 col-xs-12'>Simpan Perubahan</button> 
		</div>
    <div class="card-footer small text-muted text-center"><a href="<?php echo base_url('list_ruang') ?>">
        <button name="batal" type="button" class="btn btn-primary col-md-2 col-xs-12">Kembali</button></a></div>
	</form>
     
<?php } ?>

	<p class="small text-center text-muted my-5">
		<em></em>
	</p>

</div>

</body>

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

  


  <?php $this->load->view('templates/foot.php'); ?>

</body>

</html>
