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
	 Daftar Pengumuman pada Halaman User
    <a href="<?php echo base_url('home/tambah') ?>">
	<button name="tambah" type="button" class="btn btn-primary col-xs-3 float-right">Tambah Pengumuman</button></a>
	</div>


	<?php echo form_open('home/search') ?>
     <div class="row" style="padding-left: 35px; padding-top: 10px;"> 
    <input type="text" name="keyword" class="col-md-2 mr-2 form-control" placeholder="Masukkan kata kunci">
    <button type="submit" name="search_submit" class="btn btn-primary"><i class="fas fa-search" ></i> Cari</button>
    </div>
  <?php echo form_close() ?>
	
		<div class="card-body">
				<div class="table-responsive mt-2">
					<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
						<thead >
							<tr>
								<th style="text-align: center" >Judul</th>
								<th style="text-align: center">Isi</th>
								<th style="text-align: center">Waktu</th>
								<th style="text-align: center">Halaman Ruang</th>
								<th style="text-align: center">Edit/Hapus</th> 
							                      
								                
							</tr>
						</thead>
						<?php foreach ($pengumuman as $info) :?>
							<tbody>

								<tr>
									<td><?php echo $info->judul ?></td>
									<td width="500" ><?php echo $info->isi ?></td>
									<td width="200"><?php echo $info->time ?></td>
									<td><?php echo $info->nama_ruang ?></td>
									<td width="120">
									 <a href="<?php echo site_url('home/edit/'.$info->id_pengumuman) ?>" class="btn btn-small" ><i class="fas fa-edit"></i></a>
									 <a onclick="return confirm ('Data Akan dihapus?')" href="<?php echo site_url('home/delete/'.$info->id_pengumuman) ?>" class="btn btn-small" ><i class="fas fa-trash"></i></a>
									</td>
									 
									
								</tr>

							</tbody>
						<?php endforeach;?>
					</table>

				</div>
			</div>
			
		</div>
	</div>

  <?php $this->load->view('templates/footer.php'); ?>
	</html>