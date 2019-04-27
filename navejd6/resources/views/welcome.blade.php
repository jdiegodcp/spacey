<?php
	// include 'config.php';
  define('HOST_API','http://localhost/spacey/navejd6/server.php/');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		Inicio - SpaceY
	</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
</head>
<body>
<div class="contenedor2" d-flex justify-content-center align-items-center >
 <div class="text-center" style="width:200px">
		<h3 id="titulo1" >
		SpaceY
		</h3>
	<div>
		<p id="ingus" >
			Ingrese Usuario
		</p>
	</div>
	<div class="login-form-1">
		<form id="formLogin" class="text-left">
			<div class="login-form-main-message"></div>
			<div class="main-login-form">
				<div class="login-group">
					<div class="form-group">
						<label for="lg_username" class="sr-only" >Usuario</label>
						<input autocomplete="off" type="text" class="form-control" id="nickname" name="lg_username" placeholder="Nombre">
						<p></p>
						<label for="lg_username" class="sr-only" >Email</label>
						<input type="email" autocomplete="off" type="text" class="form-control" id="dni" name="lg_username" placeholder="Email">
					</div>
				</div>
				<div class="text-center">
				<button id="bing" type="submit" class="btn btn-dark b-line" >
					Ingresa
				</button>
				</div>
				<p></p>
			</div>

		</form>
	</div>
 </div>
</div>
<script type="text/javascript" src="js/vendor/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript" src="js/app2.js"></script>
</body>
</html>
