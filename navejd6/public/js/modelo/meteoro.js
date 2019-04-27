function Meteoro(){
	var instance = $("<img>");
	var posibilidades = 3;
	var identificador= 0;
	function init(){
		var imagen = Math.round(1+Math.random()*(posibilidades-1) );
		imagen = "img/"+imagen+".png";
		var anchoTotal = $(window).width();
		var altoTotal = $(window).height();
		var randomx = Math.random()*(anchoTotal-100) ;
		var randomy = Math.random()*(altoTotal-200);
		instance.attr({"src":imagen});
		instance.css({"width":30+"px"})
		instance.css({"height":30+"px"})
		instance.css({
			"position":"absolute",
			"top": randomy+"px",
			"left": randomx+"px"
		})
// position: fixed;
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
	init();
	return instance;
}