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
		Daftar Pengumuman pada Halaman User</div>
		<div class="card-body" class="load">
			
				<div class="table-responsive mt-5">
					
					<table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
						<thead >
							<tr>
								<th style="text-align: center" >Judul</th>
								<th style="text-align: center">Isi</th>
								<th style="text-align: center">Waktu</th> 
								<th style="text-align: center">Edit/Hapus</th> 
							                      
								                
							</tr>
						</thead>
						<?php foreach ($pengumuman as $info) :?>
							<tbody>

								<tr>
									<td><?php echo $info->judul ?></td>
									<td width="500" ><?php echo $info->isi ?></td>
									<td width="200"><?php echo $info->time ?></td>
									<td width="120">
									 <a href="<?php echo site_url('list_pengumuman/edit/'.$info->id_pengumuman) ?>" class="btn btn-small" ><i class="fas fa-edit"></i></a>
									 <a onclick="return confirm ('Data Akan dihapus?')" href="<?php echo site_url('list_pengumuman/delete/'.$info->id_pengumuman) ?>" class="btn btn-small" ><i class="fas fa-trash"></i></a>
									</td>
									 
									
								</tr>

							</tbody>
						<?php endforeach;?>
					</table>

				</div>
			</div>
			<div class="card-footer small text-muted">
				<a href="<?php echo base_url('list_pengumuman/tambah') ?>">
				<button name="tambah" type="button" class="btn btn-primary col-xs-3 float-left">Tambah Pengumuman</button></a>
			</div>
		</div>
	</div>

  <?php $this->load->view('templates/footer.php'); ?>
	</html>