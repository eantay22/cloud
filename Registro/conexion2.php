<?php
/*$MyTABLEUSER="tab_cloud";
#Conexion LAN
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_DEPRECATED);

$host="localhost";
$user="urp881";
$pass="MktDig205417";
$MYSQL="urp881_cloudMDC";

$host="localhost";
$user="root";
$pass="";
$MYSQL="cloud";

$conect=Mysql_Connect($host,$user,$pass);
mysql_select_db($MYSQL,$conect);
*/
session_start();
echo $_SESSION["ResultadoCaptcha"];
	

?>