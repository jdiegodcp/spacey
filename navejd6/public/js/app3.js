var nave;
var teclado = new Teclado();
function init(){
	var arrayMeteoros = [];
	var numeroMeteoros = 20;
	var i,meteoro;
	var posJx=50,posJy=100;
	var auxapp = document.getElementById("app")
	// auxapp.style.width=600+"px";
	// auxapp.style.height=600+"px";
	var contenedorJuego = $("#app");
	for ( i = 0; i < numeroMeteoros; i++) {
		meteoro = new Meteoro();

		contenedorJuego.append(meteoro);
		arrayMeteoros.push(meteoro);
		// console.log("el ",arrayMeteoros[i]);
	}

	nave = new Jugador();
	contenedorJuego.append(nave);

	var contador=0;
	var breaker=0;
	var seg=0;
	var mseg=0;

setInterval(contmiliseg,1);
	function contmiliseg(){
		mseg++;
	}
	var clocktime;

	var mouseStillDown = false;
	var wWidth = $(window).width();
	var presionado = false;
	$("*").click(function(event) {
		presionado = event;
	}).mouseup(function() {
		presionado = false;

	});

	setInterval(logicaDelUniverso,25);
	function logicaDelUniverso(){
		var arrayBalas = nave.arrayBalas;
		if(teclado.izquierda() && teclado.derecha() ){
			//console.log("te crees vivo");
		}
		else if( teclado.izquierda() || presionado){
			nave.moverIzquierda();
		}
		else if( teclado.derecha() ){
			nave.moverDerecha();
		}
		//Detectando mediante toque , mobile
			if(presionado != false){
				var lado = getLado(presionado);
				if(lado == 1){
					// if(posJx < 82){
						// nave.moverDerecha();
						nave.moverDerechaInmediato(presionado.pageX);
					// }
				}
				else{
					// if(posJx > 0){
						// nave.moverIzquierda();
						nave.moverIzquierdaInmediato(presionado.pageX);
					// }
				}
			}
		// console.log("Nro de elementos del arrayBalas es ",nave.arrayBalas.length)
		validarChoques();
		contador++;
		if((contador*40)%100==0){
			seg++;
			if(arrayMeteoros.length==0 && breaker==0){
				console.log("TERMINO");
				breaker++;
				terminoJuego();
			}
		}
	}
	function getLado(presionado){
		if(presionado.pageX > wWidth/2){
			return 1;
		}else{
			return 0;
		}
	}
	function validarChoques(){
		var i,j,BalaX,BalaY,MeteoroX,MeteoroY;
		var arrayBalas = nave.arrayBalas;
		var naveposic = $(nave).css("left").split("px")[0];
		// console.log(naveposic);

		for ( i = 0; i < arrayBalas.length; i++) {
			if(arrayBalas[i].length==0)
			{
				break;
			}
			BalaX = getX(arrayBalas[i]);
			BalaY = getY(arrayBalas[i]);
			cont=0;
				for ( j = 0; j < arrayMeteoros.length; j++) {
					if(arrayMeteoros[j].length==0)
					{
					break;
					}
				MeteoroX= getX(arrayMeteoros[j]);
				MeteoroY= getY(arrayMeteoros[j]);
				// console.log("2 ",i," - ",j);
					if(
						( (  (BalaX>=MeteoroX) && (BalaX<=MeteoroX+30) ) ||
					      ( (BalaX+14>=MeteoroX) && (BalaX+14<=MeteoroX+30) )
					    ) &&
				     	 ( BalaY>=MeteoroY  && (BalaY<=MeteoroY+30)
				     	 )
					   )
					{
						cont=cont+1;
						arrayBalas[i].addClass("desvanece");
						arrayMeteoros[j].addClass("meteoroout");

						arrayMeteoros[j].remove();
						arrayMeteoros.splice(j,1);

						// arrayMeteoros[j] = null;
						arrayBalas[i].remove();
						arrayBalas.splice(i,1);

						 j--;
						 i--;

						break;
					}

				}
		}


	}
	function terminoJuego(){
	var jugador = localStorage.getItem("jugador") ;
	var tiempo = Math.round( Math.random()*1000 );
	var auxtime= getTime(mseg/10);
	var puntaje0;

	tiempo =auxtime;
	torden =seg;
	var record = {jugador:jugador,tiempo:tiempo,torden:torden};

	var arrayRecords = localStorage.getItem("arrayRecords");
	if(arrayRecords == null){
		arrayRecords = [record];
	}
	else{
		arrayRecords = JSON.parse(arrayRecords);
		arrayRecords.push(record);
	}
	console.log("Nro de Meteoros Derribados es: ",arrayMeteoros.length);
	// localStorage.setItem( "arrayRecords", JSON.stringify(arrayRecords) );
	// localStorage.setItem( "tiempo", tiempo );
	localStorage.setItem( "tiempo", tiempo );
	localStorage.setItem( "tiempos", mseg );
			// window.open("puntaje.html","_top");
			guardartiempo();
	}

	function eliminarMetoro(){

	}
	function elimimarBalaApp(bala){
		nave.eliminarBala(bala);
	}

	function getX(superM){
		var x = superM.css("left");
		var ar = x.split("px");
		return Number(ar[0]);
	}
	function getY(superM){
		var x = superM.css("top");
		var ar = x.split("px");
		return Number(ar[0]);
	}


	function guardartiempo(){



			var vjugador = localStorage.getItem( "jugador");
			var vtiempo = localStorage.getItem( "tiempos");

			var url0 = urlBase+"api/guardar-juego";
			var data = {idUsuario:vjugador,score:vtiempo};
			$.ajax({
					url: url0,
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
					success : function(data) {
						console.log("todo nos fue bien",data);
						window.open("puntaje.html","_top");
					},
					error : function(ajax, estado, excepcion) {
						console.log("hay un erorro");
					}
				})
	}

	//setTimeout(terminoJuego,20000);
		function getTime(pos){
		var hora = parseInt(pos/3600);
		var min = parseInt((pos%3600)/60);
		var seg = parseInt((pos%3600)%60);
		var cadTime=seg+"s";
		if(min>0){
			cadTime = min+"min "+cadTime;
			if(hora>0){
				cadTime = hora+"h "+cadTime;
			}
		}
		return cadTime;
	}
}
init();
