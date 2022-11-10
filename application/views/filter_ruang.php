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


          <ol class="breadcrumb">
          <div class="col-md-4"></div>
           <div class="col-md-6">
          <li class="breadcrumb-item" >
           <h5> Pilih Nama Ruang untuk menampilkan jadwal per ruang </h5>
          </li></div>
        </ol>

        <!-- DataTables Example -->
        
            <?php foreach ($ruang as $list ): ?>
              
             <a href="<?php echo site_url('ruang/index/'.$list->username) ?>" ><button type="button" class="btn btn-secondary btn-lg" value=""><?php echo $list->nama_ruang; ?></button></a>

       <?php endforeach; ?>

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

<?php $this->load->view('templates/footer.php'); ?>

</body>

</html>
