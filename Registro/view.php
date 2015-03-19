<!DOCTYPE HTML>
<HTML lang="ES">
<head>
	<link type="image/x-icon" href="favicon.ico" rel="icon" />
	<title>Registro</title>
	<meta charset="UTF-8" /><meta name="Description" content="Sitio web de almacenamiento" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<!-- Links CSS -->
	<link rel="stylesheet" type="text/css" href="http://www.cloud-mdc.com/css/general.css">
	<link rel="stylesheet" type="text/css" href="http://www.cloud-mdc.com/css/DIV-HEADER.css">
	<link rel="stylesheet" type="text/css" href="http://www.cloud-mdc.com/css/DIV-HEADER.css">
	<link rel="stylesheet" type="text/css" href="http://www.cloud-mdc.com/css/DIV-MAIN.css">
	<link rel="stylesheet" type="text/css" href="http://www.cloud-mdc.com/css/DIV-FOOT.css">
	<link rel="stylesheet" type="text/css" href="http://www.cloud-mdc.com/css/estilo.css">
<!-- CSS Local -->
<style type="text/css">
#div-get-login{
	margin: 0 auto;
	margin-top: 10px;
	width: 	650px;
	height: 85px;
	background-color: #ffe591;
	color: #353535;
	font-size: 1.1em;
}
#sub-div-img{
	float: left;
}
#sub-div-text-fianl{
	padding: 20px;
	float: right;
	width: 560px;
}
.links_href{
	color: #009bfe;
	font-size: 0.9;
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
	</DIV>

	<div id="menu-contenedor">
		<ul id="menu">
	    <li><a href="http://www.cloud-mdc.com/" title="Ir a Inicio" >Inicio</a></li>
		<li><a href="/Registro" title="Registrarse" class="active">Registro</a></li>
		<li><a href="http://www.cloud-mdc.com/all-software.php" title="Descargar el cliente Windows o Mac">Aplicativos</a></li>
		<li><a href="http://www.cloud-mdc.com/all-movil.php" title="Descargar la aplicación para Android">Móviles</a></li>
		<li><a href="http://www.cloud-mdc.com/manual/Manual_MDC.pdf" title="Guía de usuario " target="_blank">Guía de usuario</a></li>
		</ul>
	</div>

<div id="contenido">

	<DIV ID="DIV-MAIN">
		<div id="div-get-login">
			<div id="sub-div-img">
				<img src="http://www.cloud-mdc.com/img/checkOk.png">
			</div>
			<div id="sub-div-text-fianl">
			<label>Su cuenta fue validado con exito, en el plazo máximo de 24 horas le enviaremos un email de confirmación, gracias. 
			</label><a href="http://www.cloud-mdc.com/" class="links_href">Ir a Inicio</a>
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