 <!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('templates/head.php'); ?>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta http-equiv="refresh" content="360" />
</head>
<body id="page-top bg-primary">
<div class="container-fluid"  style="background-image: url(<?php echo base_url('assets/img/biruu.jpg') ?>">
	<?php $this->load->view('templates/navbar_ruang') ?>
	<div id="wrapper" style="background-image: url(<?php echo base_url('assets/img/biruu.jpg') ?>">
<div class="container-fluid">
	<div class="col-md-6">
<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
	<ol class="carousel-indicators">
        <?php
         $car = $this->m_carousel->getGambar();
         foreach ($car as $key => $value)
         {
         	$active = ($key == 0) ? 'active' : '';
         	echo '<li data-target="#demo" data-slide-to="' . $key . '" class="' . $active . '"></li>';
         }
        ?>
    </ol>

	<!-- The slideshow -->
 	<div class="carousel-inner">
		<?php
         foreach ($car as $key => $value) 
         {
            $active = ($key == 0) ? 'active' : '';
            echo '<div class="item ' . $active . '">
                  <img src="' . base_url() .'/assets/foto/'. $value['gambar'] . '" alt="..." style="width: 1600px; height: 350px;"></div>';             
         }
        ?>
        	
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
	</div>

<!-- End Carousel -->

	<div class="col-md-6">
		<div class="row"> 


<!-- Table -->			
		<div class="table-responsive bg-light" style="box-shadow: 3px 3px 3px 3px #333333;">
		<table class="table table-bordered" >
			<?php foreach ($ruang as $ruang) { ?>
			
			
			<h3>
				Daftar Jadwal <?php echo $ruang->nama_ruang; ?>
			</h3>
		<?php } ?>
			<br>
			<thead>
				
				<tr>
					
					
					<th>Tanggal Mulai</th>
					<th>Jam Mulai</th>
					<th>Jam Selesai</th>
					<th>Kegiatan</th>
					<th>Dinas Terkait</th>
				</tr>
				
			</thead>
			<tbody>
				<?php $id_peminjaman=1; foreach ($list as $list): ?>
                                    <tr>
                                        
                                        
                                        <td>
                                            <?php $tgl = $list ->date_start;
                                            $date = date("d-m-Y", strtotime($tgl));
                                            echo $date ?>
                                        </td>
                                       
                                        <td>
                                            <?php $jam = $list->jam_mulai;
                                            $time = date("H:i", strtotime($jam));
                                            echo $time; ?>
                                        </td>
                                        <td>
                                          <?php $jam = $list->jam_selesai;
                                          $time = date("H:i", strtotime($jam));
                                          echo $time;
                                          ?>
                                           <td><?php echo $list->kegiatan; ?></td>
                                        <td><?php echo $list->nama_dinas; ?></td>
                                        </td>
                                       </tr>
                                   <?php endforeach; ?>
				
			</tbody>
		</table>
			</div>
		</div>
	</div>
</div>
</div>
<br>
<br>

<!-- End Table -->

<!-- Pengumuman -->
<div class="container-fluid"  style="background-image: url(<?php echo base_url('assets/img/biruu.jpg') ?>">
<div class="card mb-3"style="width: 1300px ">
	<div class="card-header bg-info" style="box-shadow: 3px 3px 3px 3px #333333;" >
		<h3 align="center" style="color: white;">
			Pengumuman
		</h3>
	</div>
	<div class="card-body"><br>
		<table>
	<tr>
		<marquee onmouseover="this.stop()" onmouseout="this.start()" scrollDelay="10" scrollamount="3" direction="left" >
	<?php foreach ($info as $info): ?>
	
		
		<font size="4"> <?php echo $info->isi; ?>&ensp;&ensp;||&ensp;&ensp; </font>
		
	<?php endforeach; ?></marquee> </tr>
	<br></table>
	</div>
</div>
</div>
</div>
</ul>
<div class="col-md-6"></div>

<div class="card-footer"><br><br><br></div>
<!-- End Pengumuman -->
</div>
<footer class="">
	<?php $this->load->view('templates/foot');  ?>
</footer>
</body>
<style type="text/css">
	
</style>