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
#div-software{
	margin: 0 auto;
	width: 700px;
	background-color: #f8f8f8;	

}
#div-software a{
	text-decoration: none;
	padding: 8px 10px;
	background-color: #353535;
	color: #FFF;
}
#div-label{
	background-color: #f8f8f8;
	padding: 8px;
	margin-bottom: 10px;
}
#div-windows{
	width: 200px;
	height: 200px;
	float: left;
	margin-bottom: 30px;
	margin-left: 80px;
	/*border: 1px solid green;*/
}
#div-mac{
	width: 200px;
	height: 200px;
	float: right;
	margin-bottom: 30px;
	margin-right: 80px;
	/*border: 1px solid green;*/
}
#div-img{
	margin: 0 auto;
	width: 160px;
	height: 160px;
	/*border: 1px solid orange;*/
}
</style>

<script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
  var menu = $('#menu');
  var contenedor = $('#menu-contenedor');
  var cont_offset = contenedor.offset();
  
  $(window).on('scroll', function() {
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
		<center> <a href="http://www.cloud-mdc.com/"><img src="Logo_MDC.png" /></a> </center>
	</div>

	<div id="menu-contenedor">
		<ul id="menu">
	    <li><a href="http://www.cloud-mdc.com/" title="Ir a Inicio" >Inicio</a></li>
		<li><a href="Registro/" title="Registrarse">Registro</a></li>
		<li><a href="all-software.php" title="Descargar el cliente Windows o Mac" class="active">Aplicativos</a></li>
		<li><a href="all-movil.php" title="Descargar la aplicación para Android">Móviles</a></li>
		<li><a href="manual/Manual_MDC.pdf" title="Guía de usuario " target="_blank">Guía de usuario</a></li>
		</ul>
	</div>

<div id="contenido">

	<DIV ID="DIV-MAIN">

		<div id="div-software">
		<div id="div-label">
			<center><label>Descarga tu administrador de cliente</label></center>
		</div>
			<div id="div-windows">
				<div id="div-img">
				<center><img src="img/Logo_windows_200px.png" width="120" height="120"></center>
				</div>
				<center><a href="http://www.cloud-mdc.com/app/CloudMDC-Windows-Setup.exe">Descargar</a></center>
			</div>
			<div id="div-mac">
				<div id="div-img">
				<center><img src="img/Logo_Apple_200px.png" width="120" height="120"></center>
				</div>
				<center><a href="http://www.cloud-mdc.com/app/CloudMDC-Mac-Setup.zip">Descargar</a></center>
			</div>

		</div>
		
	</DIV>
	<DIV ID="DIV-FOOT">
		<center>
			<label class="label_negrita">cloud-mdc</label> <a href="Registro/about.php" target="_blank">Términos de Uso</a> <br>
			<label class="label_negrita">soporte@cloud-mdc.com</label>&nbsp;&nbsp;<label>Telf.&nbsp;</label><label class="label_negrita">711-9770</label> <br />
			<label>Copyright © 2015</label>
		</center>
	</DIV>

</div>
</div>
</body>
</HTML>