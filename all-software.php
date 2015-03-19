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
</head>
<body>
<DIV ID="DIV-HEADER">
	<div id="div-logo-menu">
		<div id="div-logo-img">
			<a href="http://www.cloud-mdc.com/"><img src="Logo-cloudMDC2.png" /></a>
		</div>
		<div id="div-links-menu">
			<a href="http://www.cloud-mdc.com/" title="Ir a Inicio" >Inicio</a>
			<a href="Registro/" title="Registrarse">Registro</a>
			<a href="all-software.php" title="Descargar el cliente Windows o Mac" class="active">Aplicativos</a>
			<a href="all-movil.php" title="Descargar la aplicación para Android">Moviles</a>
		</div>
	</div>
</DIV>
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
		<label>soporte@cloud-mdc.com</label> <br />
		<label>Copyright © 2015&nbsp;&nbsp;cloud-mdc.com</label>
	</center>
</DIV>
</body>
</HTML>