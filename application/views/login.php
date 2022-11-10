<!DOCTYPE html>
<html>
<head>
	<title>LOGIN LAB RPL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/css_login.css">
</head>

<body>
	<div class="limiter">

		<div class="container-login100 " style="background-image: url(<?php echo base_url('assets/img/coba.jpg') ?>">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">

<div class = "container">
			
			 	
	<div class="wrapper">

		<form action="<?php echo site_url('Login/login')?>" method="post" name="Login_Form" class="form-signin">       
		    <h3 class="form-signin-heading">Selamat Datang Silahkan Login</h3>
			  <hr class="colorgraph"><br>

			  
			  <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
			  <input type="password" class="form-control" name="password" placeholder="Password" required=""/>     		  
			 
			  <button class="btn btn-lg btn-primary btn-block"  name="Submit" value="Login" type="Submit">Login</button>
			
		

			   
		</form>	

	  </div>

	<?php
				if($this->session->flashdata('pesan') <> ''){
				?>
					<div class="alert alert-dismissible alert-danger">
						<?php echo $this->session->flashdata('pesan');?>
					</div>
				<?php
				}
				?>
</div>

</body>
</html>