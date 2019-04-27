function Teclado(){
	var instance = $("body");
	var arrayTeclas = [
		{codigo:37,nombre:"izquierda",estado:false},
		{codigo:39,nombre:"derecha",estado:false},
		{codigo:32,nombre:"disparar",estado:false},
	];
	function init(){
		instance.on("keyup",soltoTeclado);
		instance.on("keydown",presionoTeclado);
	}
	function soltoTeclado(){
		var teclaSoltada = window.event.keyCode;
		var tecla,i;
		//return;
		for ( i = 0; i < arrayTeclas.length; i++) {
			tecla = arrayTeclas[i];
			if(teclaSoltada == tecla.codigo){
				tecla.estado = false;
				break;
			}
		}
		//console.log("--",JSON.stringify(arrayTeclas) );
	}
	function presionoTeclado(){
		var teclaPresionada = window.event.keyCode;
		var tecla,i;
		for ( i = 0; i < arrayTeclas.length; i++) {
			tecla = arrayTeclas[i];
			if(teclaPresionada == tecla.codigo){
				tecla.estado = true;
				break;
			}
		}
		if(arrayTeclas[2].estado){
			instance.trigger("dispara");
		}
		//console.log("465465",teclaPresionada,JSON.stringify(arrayTeclas) );
	}
	instance.derecha = function(){
		return arrayTeclas[1].estado;
	}
	instance.izquierda = function(){
		return arrayTeclas[0].estado;
	}
	init();
	return instance;
}