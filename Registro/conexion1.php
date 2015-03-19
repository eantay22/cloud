<?php
//TABLAS

$MyTABLE_COD="tab_code";
$MyTAB_USER="tab_userActive";
//CONEXION
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL ^ E_DEPRECATED);

/*$host="localhost";
$user="urp881";
$pass="MktDig205417";
$MYSQL="urp881_cloudMDC";*/

$host="localhost";
$user="root";
$pass="";
$MYSQL="cloud";


$MY=Mysql_Connect($host,$user,$pass);
mysql_select_db($MYSQL,$MY);