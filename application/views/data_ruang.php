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
         


        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">

            <i class="fas fa-table"></i>
            List Ruang
          <a href="<?php echo site_url('tambah_ruang') ?>">
        <button name="tambah" type="button" class="btn btn-primary col-md-2 col-xs-12 float-right mr-3">Tambah Ruang</button></a>
      </div>
          <div class="card-body" id="load">
            <div class="">
              <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>Nama ruang</th>
                  <th>Username</th>
                  <th>Password</th>
                 
                  <th>Edit</th>
                  </tr>
                </thead>

                <tbody>
                  <?php $id_peminjaman=1; foreach ($list as $list): ?>
                  <tr>                                        
                   <td width="150"><?php echo $list->nama_ruang ?></td>
                   <td width="150"><?php echo $list->username ?></td>
                   <td width="150"><?php echo $list->password ?></td>
                   
                   <td width="80">
                   <a href="<?php echo site_url('list_ruang/edit/'.$list->kode_ruang) ?>" class="btn btn-small" ><i class="fas fa-edit"></i></a>
                 </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
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
