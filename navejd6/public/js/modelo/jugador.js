function Jugador(){
	var contenedorJuego = $("#app");
	var instance = $("<img>");
	instance.arrayBalas = [];
	var velocidad = 60;
	var nave;
	nave = "img/nave2.png";
		instance.attr({"id":"naven"});
		instance.attr({"src":nave});
		
	function init2(){
		//teclado.on("dispara",disparar);
	}
	function disparar(){
		// console.log("dispara ahora");
		var px = getX();
		var py = getY();
		var bala = new Bala(px-10,py-10);
		contenedorJuego.append(bala);
		instance.arrayBalas.push(bala);
		bala.mover();
		setTimeout(function(){
			bala.remove();
			instance.eliminarBala(bala)
			bala = null;
		},3000)
	}
	instance.eliminarBala = function(bala){
		var i;
		for ( i = 0; i < instance.arrayBalas.length; i++) {
			if(instance.arrayBalas[i] == bala){
				instance.arrayBalas.splice(i,1);
			}
		}
	}
	instance.moverDerecha = function(){
		var x = getX();
		instance.css({
				left: x+velocidad
			});
		disparar();
		// console.log("posicion",x);
	}
	instance.moverDerechaInmediato = function(a){
		var x = getX();
		instance.css({
				left: a
			});
		disparar();
		// console.log("posicion",x);
	}
	instance.moverIzquierda = function(){
		var x = getX();
		instance.css({
				left: x-velocidad
			});
		disparar();
	}
	instance.moverIzquierdaInmediato = function(a){
		var x = getX();
		instance.css({
				left: a
			});
		disparar();
	}
	function getX(){
		var x = instance.css("left");
		var ar = x.split("px");
		return Number(ar[0]);
	}
	function getY(){
		var x = instance.css("top");
		var ar = x.split("px");
		return Number(ar[0]);
	}
	init2();	
	return instance;
}

function MovimientoJugador(e)
{	
	var element = document.getElementById('naven');
   	style = window.getComputedStyle(element);
   	left = style.getPropertyValue('left');

    var n = left.length;
    var x = left.substring(0, n-2);
    // console.log(x);

}
	var mouseStillDown = false;
	var presionado = false;
	$("*").click(function(event) {
		presionado = event;
	}).mouseup(function() {
		presionado = false;

	});



