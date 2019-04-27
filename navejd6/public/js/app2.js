var phpadd="<?php	include 'config.php';?>";
var urlBase = "http://localhost/galaxy-ship-game/navejd6/server.php/";
$("#formLogin").on("submit",function(evt){
	evt.preventDefault();
	var nickname = $("#nickname").val();
	var vdni = $("#dni").val();
	/*
	localStorage.setItem("jugador",nickname);
	window.open("JuegoSpaceY.html","_top");
	console.log("el valor es",nickname);
	*/

	var url = urlBase+"api/guardar-usuario";
	var data = {nombre:nickname,dni:vdni};
	const dni = localStorage.getItem('dni')
	if (!dni) {
		localStorage.setItem( 'dni', vdni )

	}else{

	}
	$.ajax({
			url: url,
			type: 'POST',
			data : data,
			dataType: 'json',
			contentType:'application/x-www-form-urlencoded;charset=UTF-8',
			beforeSend: function() {
				console.log("enviado");

			},
			complete : function(){
				console.log("completo");

			},
			success : function(datos) {
				console.log("todo nos fue bien",datos);
				localStorage.setItem("jugador",nickname);
				window.open("JuegoSpaceY.php","_top");
			},
			error : function(ajax, estado, excepcion) {
				console.log("hay un erorro");
			}
		})
});
