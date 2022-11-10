<!DOCTYPE html>
<html>
<?php $this->load->view("templates/head.php") ?>
<?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
<div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="admin">Home</a>
              </li>
              <li class="breadcrumb-item active">Tambah Pengumuman</li>
            </ol>
            <?php foreach ($pengumuman as $info) {   ?>

            <form method="post" action="<?php echo base_url().'home/update'; ?>" enctype="multipart/form-data" class="col-md-12">
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <input value="<?php echo $info->id_pengumuman; ?>" type="hidden" class="form-control" name="id_pengumuman">

                    <input value="<?php echo $info->time; ?>" type="hidden" class="form-control" name="time">
                    <label for="judul berita">Judul Pengumuman</label>
                    <input value="<?php echo $info->judul; ?>" type="text" class="form-control" name="judul">
                  </div>
                  <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea  name="isi" rows="4" cols="50" class="form-control " name="isi"><?php echo $info->isi; ?></textarea>                    
                  </div>

                  <div class="form-group">
          <label>Tampilkan pada Halaman Ruang</label>
          <select class="form-control" name="kode_ruang" onchange="showUser(this.value)">
            <option value="<?php echo $info->kode_ruang; ?>"><?php echo $info->nama_ruang; ?></option>
            <?php foreach ($ruang as $ruang): ?> 
            <option value="<?php echo $ruang->kode_ruang; ?>"><?php echo $ruang->nama_ruang; ?> </option>
          <?php endforeach; ?>
          </select> 
        </div>   
                </div>
    
                </div>
              </div>

              <div class="card-footer small text-mutedtext-center">
    <button name='btn' type='submit' class='btn btn-primary col-md-2 col-xs-12'>Simpan Perubahan</button> 
  </div>
             </div>

           </form>

           <?php } ?>
           
           <p class="small text-center text-muted my-5">
            <em></em>
          </p>

        </div>

<?php $this->load->view("templates/footer.php") ?>
</html>