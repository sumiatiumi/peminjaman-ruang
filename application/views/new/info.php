 <!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php $this->load->view('templates/head.php') ?>
<body id="page-top">

<?php $this->load->view('templates/navbar_tambah.php') ?>
<div id="wrapper" style="background-image: url(<?php echo base_url('assets/img/biruu.jpg') ?>">
  

<div class="container-fluid">

            <!-- Breadcrumbs-->
  <br>
  <div class="row">
    <div class="col-md-2"></div>
   <div class="col-md-6">
      <ol class="breadcrumb"  style="width: 875px;">
       <li class="breadcrumb-item " >
        <h5> Silahkan Isi Data Dibawah Ini</h5>
       </li>
      </ol>
    </div>
  </div>

      
            <form method="POST" action="<?php echo site_url('home/add') ?>" enctype="multipart/form-data" class="col-md-12">
              <div class="row"><div class="col-md-2"></div>
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="judul berita"><b>Judul Pengumuman</b></label>
                    <input value="" type="text" class="form-control" name="judul">
                  </div>
                  <div class="form-group">
                    <label for="isi"><b>Isi</b></label>
                    <textarea  rows="4" cols="50" class="form-control" name="isi"></textarea>              
                  </div>
                 
                  <div class="form-group">
          <label><b>Tampilkan pada Halaman Ruang</b></label>
          <select class="form-control" name="kode_ruang" onchange="showUser(this.value)">
            <option>pilih ruang</option>
            <?php foreach ($ruang as $ruang): ?> 
            <option value="<?php echo $ruang->kode_ruang; ?>"><?php echo $ruang->nama_ruang; ?> </option>
          <?php endforeach; ?>
          </select> 
        </div>       
                        
                  
                </div>
              </div>


        <div class="card-footer small text-muted text-center">               
        <button name='tambah' type='submit' class='btn btn-primary col-md-2 col-xs-12'>Tambah</button>
        </div>
        <div  class="card-footer small text-muted text-center"><a href="<?php echo base_url('home') ?>">
        <button name="batal" type="button" class="btn btn-primary col-md-2 col-xs-12 ">Kembali 
        </button></a></div>
             </form>
        <br>
        <br>
        <br>
        <br>
          <!-- /.container-fluid -->
</div>
<?php $this->load->view("templates/foot.php") ?>
</html>