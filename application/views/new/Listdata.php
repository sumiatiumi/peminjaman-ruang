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
	<form method="POST" action="listdata/add" enctype="multipart/form-data" class="col-md-12">
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="No Induk">No Induk</label>
					<input value="" type="text" class="form-control" name="no_induk">
				</div>
				<div class="form-group">
					<label for="Nama">Nama Lengkap</label>
					<input value=""  type="text" class="form-control" name="nama">
				</div>
				<div class="form-group">
					<label for="Tempat Lahir">Tempat Lahir</label>
					<input value=""  type="text" class="form-control" name="tpl">
				</div>
				<div class="form-group">
					<label for="Tanggal Lahir">Tanggal Lahir</label>
					<input value=""  type="date" class="form-control" name="tl">
				</div>
				<div class="form-group">
					<label for="Golongan Darah">Golongan Darah</label>
					<select name="goldar" class="form-control">
						<option value="A">A</option>
						<option value="B">B</option>
						<option value="AB">AB</option>
						<option value="O">O</option>
					</select>
				</div>
				<div class="form-group">
					<label for="No HP" >No HP</label>
					<input value=""  type="text" class="form-control" name="hp">
				</div>
				<div class="form-group">
					<label for="Email">Email</label>
					<input value=""  type="text" class="form-control" name="email">
				</div>                                    
			</div>
			<div class="col-md-4"> 
				<div class="form-group">
					<label for="Alamat">Alamat</label>
					<input value=""  type="text" class="form-control" name="alamat">
				</div>                                                  
				<div class="form-group">
					<label for="Status">Status</label>
					<select class="form-control" name="status">
						<option value="Aktif">Aktif</option>
						<option value="Lulus">Lulus</option>
						<option value="Berhenti">Berhenti</option>
						<option></option>
					</select>
				</div>                 
				<div class="form-group">
					<label for="Angkatan">Angkatan</label>
					<select class="form-control" name="angkatan">
						<option value="2015/2016">2015/2016</option>
						<option value="2016/2017">2016/2017</option>
						<option value="2017/2018">2017/2018</option>
						<option value="2018/2019">2018/2019</option>
					</select>
				</div>                                    
				<div class="form-group">
					<label for="Jenis Kelamin">Jenis Kelamin</label>
					<select class="form-control" name="jk">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>
					</select>
				</div>
				<div class="form-group">
					<label for="Kelas">Kelas</label>
					<select class="form-control" name="kelas">                      
						<option>-- Kelas --</option>
						<?php foreach( $kelas as $kls) :?>
							<option value="<?php echo $kls->ID_KELAS ?>"><?php echo $kls->NAMA_KELAS ?></option>
						<?php endforeach; ?>

					</select>
				</div>				
				<div class="form-group">
					<label for="Wali Kelas">Wali Santri</label>
					<select class="form-control" name="walik">                      
						<option>-Wali Santri-</option>
						<?php foreach( $wali_santri as $row) :?>
						<option value="<?php echo $row->ID_GURU ?>"><?php echo $row->NAMA_GURU ?></option>
						<?php endforeach; ?>       
					</select>
				</div>                 
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="Ayah">Nama Ayah</label>
					<input value=""  type="text" class="form-control" name="ayah">
				</div>
				<div class="form-group">
					<label for="Ibu">Nama Ibu</label>
					<input value=""  type="text" class="form-control" name="ibu">
				</div>
				<div class="form-group">
					<label for="Wali">Nama Wali Murid</label>
					<input value=""  type="text" class="form-control" name="walim">
				</div>
				<div class="form-group">
					<label for="No HP Orang Tua">No HP Orang Tua</label>
					<input value=""  type="text" class="form-control" name="hpo">
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

<?php $this->load->view("partial/foot.php") ?>
</html>