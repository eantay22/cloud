<!DOCTYPE HTML>
<HTML lang="ES">
<head>
	<link type="image/x-icon" href="favicon.ico" rel="icon" />
	<title>Bienvenido.. CLOUDMDC</title>
	<meta charset="UTF-8" /><meta name="Description" content="Sitio web de almacenamiento" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<!-- Links CSS -->
	<link rel="stylesheet" type="text/css" href="css/general.css">
	<link rel="stylesheet" type="text/css" href="css/DIV-HEADER.css">
	<link rel="stylesheet" type="text/css" href="css/DIV-MAIN.css">
	<link rel="stylesheet" type="text/css" href="css/DIV-FOOT.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
<!-- CSS Local -->
<style type="text/css">
#div-pasos-activacion{
	margin: 0 auto;
	background-color: #f1f1f1;
	width: 500px;
	padding: 20px;
}
#div-mdc{
	float: left;

}
#div-pasos-activacion{
	float: right;
}
#div-head-1{
	width: 940px;
	margin-top: 10px;
	margin-bottom: 10px;
	/*border: 1px solid #CCC;*/
	padding: 10px;
	height: 350px;
	background-color: #eeeff3;
	background: -linear-gradient(top, #FFF,#353535 200px, #f8f8f8 350px, #353535)repeat-x fixed;
	background: -webkit-linear-gradient(top, #FFF,#353535 200px, #f8f8f8 350px, #353535)repeat-x fixed;
	background: -moz-linear-gradient(top, #FFF,#353535 200px, #f8f8f8 350px, #353535)repeat-x fixed;
	background: -o-linear-gradient(top, #FFF,#353535 200px, #f8f8f8 350px, #353535)repeat-x fixed;
	background: -ms-linear-gradient(top, #FFF,#353535 200px, #f8f8f8 350px, #353535)repeat-x fixed;

}
 	#sub-div-01{
 		float: left;

 	}
 	#sub-div-02{
 		/*color: #8a8a8c;*/
 		color: #F8F8F8;
 		/*color: #ff9200;*/
 	}
</style>

<script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
  var menu = $('#menu');
  var contenedor = $('#menu-contenedor');
  var cont_offset = contenedor.offset();
  // Cada vez que se haga scroll en la página
  // haremos un chequeo del estado del menú
  // y lo vamos a alternar entre 'fixed' y 'static'.

  $(window).on('scroll', function() {
  	 //alert($(window).scrollTop());
    if($(window).scrollTop() > cont_offset.top) {
      menu.addClass('menu-fijo');
    } else {
      menu.removeClass('menu-fijo');
    }
  });
});
  </script>

</head>
<body>
<div id="page">

	<div id="cabeza">
		<center> <a href="http://www.cloud-mdc.com/"><img src="Logo-cloudMDC2.png" /></a> </center>
	</DIV>

	<div id="menu-contenedor">
		<ul id="menu">
	    <li><a href="http://www.cloud-mdc.com/" title="Ir a Inicio" class="active">Inicio</a></li>
		<li><a href="Registro/" title="Registrarse">Registro</a></li>
		<li><a href="all-software.php" title="Descargar el cliente Windows o Mac">Aplicativos</a></li>
		<li><a href="all-movil.php" title="Descargar la aplicación para Android">Móviles</a></li>
		</ul>
	</div>

<div id="contenido">

<DIV ID="DIV-MAIN">

	<div id="div-head-1">
		<div id="sub-div-01">
			<img src="img/laptop-sitio-web-personalPNG.png" width="600" height="350" />
		</div>
		<div id="sub-div-02">
			<img src="Logo-cloudMDC2.png" /><br />
			<h3> Almacene, sincronice y comparta archivos fácilmente.</h3>
			<p>
				Mantenga todo su trabajo en un lugar seguro mediante el almacenamiento de archivos en línea. Acceda a su trabajo cuando lo necesite, desde la laptop, la tablet o el teléfono.
			</p>	
		</div>
	</div>


	<div id="div-mdc">
		<img src="img/mdc.png" />
	</div>

	<div id="div-pasos-activacion">
		<label>Pasos para validar su cuenta</label>
		<hr >
		<br />
		<label>1) Ingrese a la opción REGISTRO</label> <br />
		<label>2) Complete el formulario</label> <br />
		<label>3) Escriba su código de verificación</label> <br />
		<label>4) Acepte los términos de uso</label> <br />
		<label>5) Haga clic en botón REGISTRAR</label> <br />

		<br />	
		<div id="codigo-img">
			<label>El código de verificación de 18 dígitos</label> <br />
			<img src="img/cod-targeta.png" />
		</div>
	</div>
</DIV>
<DIV ID="DIV-FOOT">
	<center>
		<label>soporte@cloud-mdc.com</label> <br />
		<label>Copyright © 2015&nbsp;&nbsp;cloud-mdc.com</label>
	</center>
</DIV>

</div>
</div>
</body>
</HTML>