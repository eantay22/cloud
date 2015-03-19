<?php
header("content-type: image/png");
$imagen = imagecreate(45, 23) or die ("View Error");
$color_fondo=imageColorAllOcate($imagen, 0, 0, 0);
$color_texto=imageColorAllOcate($imagen, 225, 225, 225);

function generate_captcha($chars, $length)
{
	$captcha = null;
	for ($x = 0; $x < $length; $x++) { 
		$rand = rand(0, count($chars)-1);
		$captcha .= $chars[$rand];
	}
	return $captcha;
}
$captcha = generate_captcha(array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'A', 'B', 'C', 'D', 'E', 'F'), 4);
setcookie('captcha');
imagestring($imagen, 5, 5, 5, $captcha, $color_texto);
imagepng($imagen);