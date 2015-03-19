<?php

#POSIBLES NOTIFICACIONES
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_DEPRECATED);

//VARIABLES
$nombre=$_POST["txt-name"];
$apellido=$_POST["txt-apellido"];
$email=$_POST["txt-email"];
$code=$_POST["txt-codigo"];
$fecha=date("d/m/Y");
$IP=$_SERVER['REMOTE_ADDR'];
$CAPTCHA=$_POST["txt_Captcha"];


//CONDICIONAL
if(isset($_POST["btn_enviar"]))
{
	require "conexion1.php";
	$query = "SELECT * FROM tab_captcha WHERE cod_captcha='".$CAPTCHA."' ";
  	$result = mysql_query ($query) or die(mysql_error());
  	if (mysql_num_rows ($result)==0) 
  	{
  		header("Location: index.php?ODBC=@FtalCAP");
  	}else{

	  	$query = "SELECT * FROM $MyTABLE_COD WHERE code1='".$code."' ";
	  	$result = mysql_query ($query) or die(mysql_error());
		  	if (mysql_num_rows ($result)==0) 
		  	{
		  		header("Location: index.php?ODBC=@Ftalempty");
		  	}
		  	else{
				$query = "SELECT * FROM $MyTAB_USER WHERE code2='".$code."' ";
			  	$result = mysql_query ($query) or die(mysql_error());
				  	if (mysql_num_rows ($result)==0) 
				  	{
				  		//COMPROBAMOS SI YA EXISTE
				  		Mysql_query("INSERT INTO $MyTAB_USER(nombre, apellido, email, code2, fecha, ip) VALUES('$nombre','$apellido', '$email','$code', '$fecha', '$IP')");
				  		#########################################################
				  		//ENVIAR MAIL
							$para="soporte@mdc-peru.com,soporte@cloud-mdc.com,eantay@mdc-peru.com";
							$titulo = 'Usuario nuevo REGISTRADO cloud-mdc.com';
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
										background-color: #F8F8F8;
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

							$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
							$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
							$cabeceras .= 'From: Usuario nuevo <soporte@cloud-mdc.com>' . "\r\n";
							$cabeceras .= 'Cc: soporte@cloud-mdc.com' . "\r\n";
							$cabeceras .= 'Bcc: soporte@cloud-mdc.com' . "\r\n";
							Mail($para, $titulo, $mensaje, $cabeceras);
							//FIN
				  		header("Location: view.php");
				  		
				  	}else{
				  		header("Location: index.php?ODBC=@FtalSHOP");
				  	}
	  	}
  	}
}exit();