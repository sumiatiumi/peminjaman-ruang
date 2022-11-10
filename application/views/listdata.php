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
        <?php if ($this->session->flashdata('sukses')){ ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('sukses'); ?>
        </div>
        <?php } ?>

        <?php if ($this->session->flashdata('delete')){ ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('delete'); ?>
        </div>
        <?php } ?>

        <?php if ($this->session->flashdata('update')){ ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('update'); ?>
        </div>
        <?php } ?>

        

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">

            <i class="fas fa-table"></i>
            Jadwal Peminjaman Ruangan
          <a href="<?php echo site_url('listdata/tambah') ?>">
        <button name="tambah" type="button" class="btn btn-primary col-md-2 col-xs-12 float-right ">Tambah Jadwal</button></a>
      </div>
      

      <?php echo form_open('listdata/search') ?>
     <div class="row" style="padding-left: 35px; padding-top: 10px;"> 
    <input type="text" name="keyword" class="col-md-2 mr-2 form-control" placeholder="Masukkan kata kunci">
    <button type="submit" name="search_submit" class="btn btn-primary"><i class="fas fa-search" ></i> Cari</button>
    </div>
  <?php echo form_close() ?>
  
          <div class="card-body" id="load">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th style="text-align: center">Nama ruang</th>
                  <th style="text-align: center">Tanggal Mulai</th>
                  <th style="text-align: center">Jam Mulai</th>
                  <th style="text-align: center">Jam Selesai</th>
                  <th style="text-align: center">Kegiatan</th>
                  <th style="text-align: center">Dinas Terkait</th>
                  <th style="text-align: center">Edit/Hapus</th>
                  
                  </tr>
                </thead>
                <tbody>
                  
                  <?php $id_peminjaman=1; foreach ($list as $list): ?>
                                    <tr>
                                        
                                        <td width="150">
                                         <?php echo $list->nama_ruang ?> 
                                        </td>
                                        <td>
                                            <?php $tgl = $list ->date_start;
                                            $date = date("d-m-Y", strtotime($tgl));
                                            echo $date ?>
                                        </td>
                                                                                <td>
                                            <?php $jam = $list->jam_mulai;
                                            $time = date("h:i A", strtotime($jam));
                                            echo $time; ?>
                                        </td>
                                        <td>
                                          <?php $jam = $list->jam_selesai;
                                          $time = date("h:i A", strtotime($jam));
                                          echo $time;
                                          ?>
                                        </td>
                                        <td><?php echo $list->kegiatan; ?></td>
                                        <td><?php echo $list->nama_dinas; ?></td>
                                         <td width="120">
                      <a href="<?php echo site_url('listdata/edit/'.$list->id_peminjaman) ?>" class="btn btn-small" ><i class="fas fa-edit"></i></a>                  
                      <a onclick="return confirm ('Apakah anda yakin untuk menghapus?')" href="<?php echo site_url('listdata/delete/'.$list->id_peminjaman) ?>" class="btn btn-small" ><i class="fas fa-trash"></i></a></td>
                                        </tr>
                                    <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          
        </div>

       

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
