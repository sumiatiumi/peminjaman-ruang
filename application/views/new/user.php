<!DOCTYPE html>
<html>
<?php $this->load->view("partial/head.php") ?>

<div class="container-fluid">

	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="admin">Home</a>
		</li>
		<li class="breadcrumb-item active">Tables</li>
	</ol>
	<form method="POST" action="User/add" enctype="multipart/form-data" class="col-md-12">
		<div class="row">
			<div class="col-md-5">
				<div class="form-group">
					<label for="Username">Username (username berdasarkan nomor induk)</label>
					<select class="form-control" name="username">                      
						<option>Silahkan Pilih Santri</option>
						<?php foreach( $santri as $s) :?>
							<option value="<?php echo $s->NO_INDUK ?>"><?php echo $s->NAMA_SISWA ?></option>
						<?php endforeach; ?>			          
					</select>
				</div>
				<div class="form-group">
					<label for="Password Siswa">Password Siswa</label>
					<input value=""  type="text" class="form-control" name="ps">
				</div>
				<div class="form-group">
					<label for="Password Orang Tua">Password Orang Tua</label>
					<input value=""  type="text" class="form-control" name="pot">
				</div>                  
			</div>
		</div>

		<div class="card-footer small text-mutedtext-center">
			<button name='tambah' type='submit' class='btn btn-primary col-md-2 col-xs-12'>Tambah</button>
		</div>

	</form>
	<p class="small text-center text-muted my-5">
		<em></em>
	</p>

</div>
<!-- /.container-fluid -->

<?php $this->load->view("partial/foot.php") ?>
</html>