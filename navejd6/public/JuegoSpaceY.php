<?php
	// include 'config.php';
	define('HOST_API','http://spacey.scepscter.me/');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Jquery</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript">
		var urlBase = "<?php echo HOST_API; ?>";
	</script>
</head>
<body>
	<div class="contenedor d-flex justify-content-center align-items-center ">
		<div id="app" >
		</div>
	</div>
	<script type="text/javascript" src="js/vendor/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/modelo/jugador.js"></script>
	<script type="text/javascript" src="js/modelo/meteoro.js"></script>
	<script type="text/javascript" src="js/modelo/bala.js"></script>
	<script type="text/javascript" src="js/teclado.js"></script>
	<script type="text/javascript" src="js/app3.js"></script>
	<script type="text/javascript">
	</script>
</body>
</html>
