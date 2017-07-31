<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Title -->
		<title>Login</title>

		<?php 
        	$this->view('template/backend/header');
        	$this->view('template/backend/css');
        	$this->view('template/backend/js');
    	?>
	</head>
	<body class="img-cover" style="background-image: url(assets/img/photos-1/7.jpg);">
		<div class="container-fluid">
			<div class="sign-form">
				<div class="row">
					<div class="col-md-4 offset-md-4 p-x-3">
						<div class="box b-a-0" style="padding: 15px;">
							<div class="p-a-2 text-xs-center">
								<img src="<?php echo base_url('assets/img/brand.png') ?>">
							</div>
							<h5 align="center">Bienvenido</h5>
							<form class="form-material m-b-1" method="post" action="<?php echo base_url('') ?>">
								<div class="form-group">
									<input type="text" class="form-control" id="exampleInputEmail" placeholder="Usuario" required="">
								</div>
								<div class="form-group">
									<input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" required="">
								</div>
								<div class="p-x-2 form-group m-b-0">
									<button type="submit" class="btn btn-primary btn-block text-uppercase">Ingresar</button>
								</div>
							</form>
							<div class="p-a-2 text-xs-center text-muted">
								© Copyright 2017
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>