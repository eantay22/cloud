<?php
require "index.php";
?>
<?php

//DESTINO
$para="atencion@mdc-peru.com,soporte@mdc-peru.com";
// ASUNTO
$titulo = 'Nuevo usuario registrado CLOUD-MDC';
 
// View Mesege
$mensaje = '
		<!DOCTYPE HTML>
		<HTML lang="ES">
		<head>
			<title>Nuevo Usuario</title>
			<meta charset="UTF-8" /><meta name="Description" content="Usuario nuevo registro" />
		<style type="text/css">
		body{	background-color: #f8f8f8;	font-family: Arial; }
		hr{	color: #009bfe; }
		#MAIN{	margin:0 auto; 	width: 600px;
			height: auto;
			border: 1px solid #CCC;
		}
		#div-logo{
			width: 100%;
			height: 30px;
			background-color: #ff9200;
			padding: 8px;
			color: #FFF;
			font-weight: bold;
		}
		#div-content{
			width: 100%;
			color: #353535;
			background:-webkit-linear-gradient(top, #FFF,#FFF 140px, #FFF 110px, #64bc2a)repeat-x fixed;
			background:-moz-linear-gradient(top, #FFF,#FFF 140px, #FFF 110px, #64bc2a)repeat-x fixed;
			background:-o-linear-gradient(top, #FFF,#FFF 140px, #FFF 110px, #64bc2a)repeat-x fixed;
			padding: 8px;
			padding-bottom: 70px;
			font-size: 0.9em;
		}
		</style>
		</head>
		<body>
			<DIV ID="MAIN">
				<div id="div-logo">
					<br/>
					<center><label>CLOUD-MDC</label></center>
				</div>
				<div id="div-content">
					<center> <b>Nuevo registro de '.$fecha.'</b> </center>
					<hr>
					<label>Nombre: <b> '.$nombre.' </b></label> <BR />
					<label>Apellido: <b> '.$apellido.' </b></label> <BR />
					<label>E-Mail: <b></b> '.$email.' </label> <BR />
					<label>C&oacute;digo de Registro: <b> '.$code.' </b></label> <BR />
					<label>Fecha de Registro: <b> '.$fecha.' </b></label> <BR />
					<label>IP de Registro: <b> '.$IP.' </b></label> <BR />
					
				</div>
			</DIV>
		</body>
		</HTML>
';

// Cabecera que especifica que es un HMTL
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Cabeceras adicionales
$cabeceras .= 'From: Usuario nuevo <soporte@cloud-mdc.com>' . "\r\n";
$cabeceras .= 'Cc: soporte@cloud-mdc.com' . "\r\n";
$cabeceras .= 'Bcc: soporte@cloud-mdc.com' . "\r\n";
 
############### Mail #############################
##################################################
	Mail($para, $titulo, $mensaje, $cabeceras); ##
##################################################

?>