<?php
//  Conecta con el servidor mysql
  /*$link = mysql_connect('127.0.0.1',  'root', '');
  if(!$link) {
    die('No  se pudo conectar con la base de datos:' . mysql_error());
 }
  if(!mysql_select_db('cloud',  $link))
  {
     die('Error seleccionando base de datos: ' . mysql_error());
  }*/
  require "conexion1.php";

// Toma un banner aleatorio de la base de datos
  $sql = "SELECT id, cod_captcha FROM tab_captcha ORDER BY RAND() LIMIT 1";
  $res = mysql_query($sql);
list($id, $cod_captcha) =  mysql_fetch_array($res);
#mysql_query($sql);

#################################################################################
//CREAR UNA IMAGEN
$imagen = imagecreate(100,35);

//COLOR DE FONDO
$fondo = imagecolorallocate($imagen, 53, 53, 53);
$TEXTO = imagecolorallocate($imagen, 255, 255, 155);

//VALOR ALEATORIO
#$aleatorio = rand(100000,999999);


//RELLENAR LA IMAGEN
imagefill($imagen, 50, 0, $fondo);

//IMPRIMIR UN TEXTO
imagestring($imagen, 80, 0, 0, $cod_captcha, $TEXTO);

//IMPRIMER LA IMAGEN
header('Content-type: iamge/png');
imagepng($imagen);

mysql_query($sql);
#################################################################################