function Bala(px,py){
	var instance = $("<img class='balitas'>");
	var link = "img/bala2.png";
	instance.attr({"src":link});
	instance.css({left:px,top:py});
	instance.mover = function(){
		setTimeout(function(){
			instance.addClass("final");
		},20);
	}
	return instance;
}

// function PresionarMoverBalas(){

// 	var keycode	
//     if (window.event) keycode = window.event.keyCode;
// 		if (window.event.keyCode == 32 )
// 		{		console.log('ejecutando spacio')
// 				var contenedorJuego = $("#app");
// 				bala0 = new Bala();
// 				contenedorJuego.append(bala0);
// 				console.log("Si funciona");	

//     	}
// }