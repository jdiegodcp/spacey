<?php
   // include 'config.php';
   define('HOST_API','http://spacey.scepscter.me/');
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>
    Puntaje en el Mundo
  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
</head>
<body>

<p id="titulo4">
Puntajes a Nivel Global
</p>
<div align="center">
 <a id="Botonw" href="index.php" class="btn btn-dark b-line">
      Jugar de nuevo
 </a>
</div>
<p></p>
<p></p>
<div class="container-fluid">
    <div class="table-responsive">
      <table class="table">
        <thead id="cabeceratabla">
          <tr>
            <th scope="col" >Position</th>
            <th scope="col" >Nickname</th>
            <th scope="col" >Score</th>
          </tr>
        </thead>
        <tbody id="cuerpoRanking">
        </tbody>
      </table>
      </div>
</div>
<script type="text/javascript" src="js/vendor/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
  <script type="text/javascript">
    var urlBase = "<?php echo HOST_API; ?>";
    var url = urlBase+"api/cargar-puntajes";
      $.ajax({
          url: url,
          type: 'GET',
          //data : data,
          dataType: 'html',
          contentType:'application/x-www-form-urlencoded;charset=UTF-8',
          beforeSend: function() {
            console.log("enviado");

          },
          complete : function(){
            console.log("completo");

          },
          success : function(datos) {
            console.log("todo nos fue bien",datos);
            var score = JSON.parse(datos)

            console.log("Datos son:",score[0])
            mostrartabla(score);
          },
          error : function(ajax, estado, excepcion) {
            console.log("hay un erorro");
          }
        })
      function mostrartabla(a){
      var cuerpoRanking = $("#cuerpoRanking");
      var i,record,fila,celda;
      var vnombre;
      var vscore;
       for ( i = 0; i < a.length; i++)
      {
       record = a[i];
       vscore = a[i].score;
       vnombre = a[i].nombre;
      fila = $("<tr>");
      celda = $("<td>");
      celda.html(i+1);
      fila.append(celda);

      celda = $("<td>");
      celda.html(vnombre);
      fila.append(celda);

      celda = $("<td>");
      celda.html(getTime(vscore/10) );
      fila.append(celda);

      cuerpoRanking.append(fila);
      }
    }

    function getTime(pos){
    var hora = parseInt(pos/3600);
    var min = parseInt((pos%3600)/60);
    var seg = parseInt((pos%3600)%60);
    var cadTime=seg+" s";
    if(min>0){
      cadTime = min+" min "+cadTime;
      if(hora>0){
        cadTime = hora+" h "+cadTime;
      }
    }
    return cadTime;
  }
  </script>
</body>
</html>
