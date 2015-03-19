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
  	if (mysql_fetch_assoc ($result)<=0) 
  	{
  		header("Location: index.php?ODBC=@FtalCAP");
  	}else{

	  	$query = "SELECT * FROM $MyTABLE_COD WHERE code1='".$code."' ";
	  	$result = mysql_query ($query) or die(mysql_error());
		  	if (mysql_fetch_assoc ($result)<=0) 
		  	{
		  		header("Location: index.php?ODBC=@Ftalempty");
		  	}
		  	else{
				$query = "SELECT * FROM $MyTAB_USER WHERE code2='".$code."' ";
			  	$result = mysql_query ($query) or die(mysql_error());
				  	if (mysql_fetch_assoc ($result)<=0) 
				  	{
				  		//COMPROBAMOS SI YA EXISTE
				  		$SQL="INSERT INTO $MyTAB_USER(nombre, apellido, email, code2, fecha, ip) VALUES('$nombre','$apellido', '$email','$code', '$fecha', '$IP')";
				  		Mysql_query($SQL);
				  		header("Location: view.php");
				  		
				  	}else{
				  		header("Location: index.php?ODBC=@FtalSHOP");
				  	}
	  	}
  	}
}exit();