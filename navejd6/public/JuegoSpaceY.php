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

		// var vjugador = localStorage.getItem("jugador");
		// var vtiempo = localStorage.getItem("tiempos");
		// 					// var torden = localStorage.getItem("tiempo");
		// 					// $("#lblNombre").html(jugador);
		// 					// $("#lblTiempo").html(tiempo);


		// $("#formLogin").on("submit",function(evt){
		// 	evt.preventDefault();
		// 	var nickname = $("#nickname").val();
		// 	var vdni = $("#dni").val();

		// 	var url = urlBase+"api/guardar-usuario";
		// 	var data = {idUsuario:vjugador,score:vtiempo};
		// 	$.ajax({
		// 			url: url,
		// 			type: 'POST',
		// 			data : data,
		// 			dataType: 'json',
		// 			contentType:'application/x-www-form-urlencoded;charset=UTF-8',
		// 			beforeSend: function() {
		// 				console.log("enviado");

		// 			},
		// 			complete : function(){
		// 				console.log("completo");

		// 			},
		// 			success : function(datos) {
		// 				console.log("todo nos fue bien",datos);
		// 				window.open("http://localhost/juandiego/bootstrap/juandiego/JuegoSpaceY.html","_top");
		// 			},
		// 			error : function(ajax, estado, excepcion) {
		// 				console.log("hay un erorro");
		// 			}
		// 		})
		// });
	</script>
</body>
</html>
