- 
 <!DOCTYPE html>
<html lang="en">

<?php $this->load->view('templates/head.php') ?>
<body id="page-top">

<?php $this->load->view('templates/navbar_tambah.php') ?>  

  <div id="wrapper" style="background-image: url(<?php echo base_url('assets/img/biruu.jpg') ?>">


    <div id="content-wrapper">

      <div class="container-fluid">
      <?php if ($this->session->flashdata('sukses')){ ?>
        <div class="alert alert-warning" role="alert">
          <?php echo $this->session->flashdata('sukses'); ?>
        </div>
        <?php } ?>

        <?php if ($this->session->flashdata('hapus')){ ?>
        <div class="alert alert-warning" role="alert">
          <?php echo $this->session->flashdata('hapus'); ?>
        </div>
        <?php } ?>
          <div class="row">
  <div class="col-md-4"></div>
    <div class="col-md-4">
      <ol class="breadcrumb"  style="width: 420px;">
       <li class="breadcrumb-item " >
        <h5> <strong>Silahkan Ubah Data Dibawah Ini</strong></h5>
       </li>
      </ol>
    </div>
  </div>

  <!-- form tambah ruang -->
	<?php echo form_open_multipart('list_carousel/update_data'); ?>
		<div class="row">
			<div class="col-md-4"></div>
        <div class="col-md-4">
				<div class="form-group">

			<?php foreach ($car as $list){ ?>
        
            <br>
            <!-- ini untuk table isian coursel -->
            <input type="hidden" name="id_carousel" value="<?php echo $list->id_carousel; ?>">
            <label for="nama_ruang"><b>Judul</b></label>
           <input value="<?php echo $list->nama_carousel ?>"  type="text" class="form-control" name="nama_carousel">
           <br>
					 <label for="nama_ruang"><b>Gambar Carousel</b> </label>
           <br>
            <img src="<?php echo base_url()?>assets/foto/<?php echo $list->gambar ?>"  alt="" >
            <br>
            <br>
            <label><b>Ubah gambar</b></label><br>
           <input value="" type="file" class="" name="gambar">
           
			    </div>
			</div>
		</div>
		<div class="card-footer small text-muted text-center">
        <button name='tambah' type='submit' class='btn btn-primary col-md-2 col-xs-12'>Simpan </button> 
		</div>
    <div  class="card-footer small text-muted text-center"><a href="<?php echo base_url('list_carousel') ?>">
        <button name="batal" type="button" class="btn btn-primary col-md-2 col-xs-12 ">Kembali 
        </button></a></div>

      <?php } ?>
	<?php form_close(); ?>
     




</div>


<!-- /.container-fluid -->

      </div>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

 
   
</body>

  


</html>
