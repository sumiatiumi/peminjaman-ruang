  <!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php $this->load->view('templates/head.php') ?>
<body id="page-top">

<?php $this->load->view('templates/navbar.php') ?>


  <div id="wrapper">
<?php $this->load->view('templates/sidebar.php') ?>


    <div id="content-wrapper">

      <div class="container-fluid">
         
<?php if ($this->session->flashdata('sukses')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('sukses'); ?>
        </div>
        <?php endif; ?>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">

            <i class="fas fa-table"></i>
            List Carousel
          <a href="<?php echo site_url('upload_carousel') ?>">
        <button name="tambah" type="button" class="btn btn-primary col-md-2 col-xs-12 float-right mr-3">+ Tambah Gambar</button></a><br>
            </div>
          <div class="card-body" id="load">
              <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  
                  <th style="text-align: center">Judul Carousel</th>
                  <th style="text-align: center">File gambar</th>
                  <th style="text-align: center">Gambar</th>
                  <th style="text-align: center">Edit/Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  
                  <?php foreach ($caro as $key => $value){ ?>
                    <tr>
                      <td width="150"><?php echo $value['nama_carousel'] ?></td>
                      <td width="200"><?php echo $value['gambar'] ?></td>
                      <td style="text-align: center;"><?php echo '<img src="' . base_url() .'/assets/foto/'. $value['gambar'] . '" alt="..." height="50" width="70">' ?>             
                      <td width="120">
                      <a href="<?php echo site_url('list_carousel/edit/'.$value['id_carousel']) ?>" class="btn btn-small" ><i class="fas fa-edit"></i></a>                  
                      <a onclick="return confirm ('Gambar Akan dihapus?')" href="<?php echo site_url('list_carousel/delete/'.$value['id_carousel']) ?>" class="btn btn-small" ><i class="fas fa-trash"></i></a></td>
                    </tr>

                  <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted"></div>
        </div>

       

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

  <?php $this->load->view("templates/footer") ?>

</body>

</html>
