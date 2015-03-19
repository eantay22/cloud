<!DOCTYPE HTML>
<HTML lang="ES">
<head>
	<link type="image/x-icon" href="favicon.ico" rel="icon" />
	<title>Bienvenido.. CLOUDMDC</title>
	<meta charset="UTF-8" /><meta name="Description" content="Sitio web de almacenamiento" />
	<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- Links CSS -->
	<link rel="stylesheet" type="text/css" href="http://www.cloud-mdc.com/css/general.css">
	<link rel="stylesheet" type="text/css" href="http://www.cloud-mdc.com/css/DIV-HEADER.css">
	<link rel="stylesheet" type="text/css" href="http://www.cloud-mdc.com/css/DIV-MAIN.css">
	<link rel="stylesheet" type="text/css" href="http://www.cloud-mdc.com/css/DIV-FOOT.css">
<!-- CSS Local -->
<style type="text/css">
#div-form-registro{
	margin: 0 auto;
	width: 400px;
}
#txt-texto{
	width: 350px;
	height: 35px;
	padding-left: 4px;
	outline: none;
	border: 1px solid #CCC;
}
#txt-texto:focus{
	border: 1px solid #4486f7;

}
#txt-codigo{
	width: 350px;
	height: 35px;
	padding-left: 4px;
	outline: none;
	border: 1px solid #CCC;
}
#txt-codigo:focus{
	background-color: #f8f8f8;
	border: 1px solid #99c53a;
}
#txt_Captcha{
	padding-left: 3px;
	border: 1px solid #353535;
	height: 25px;
	outline: none;
	color: #009bfe;
	font-weight: bold;
	font-size: 1em;
}
#btn_enviar{
	width: 150px;
	height: 35px;
	border: 1px solid #CCC;
	border-radius: 3px;
	background-color: #4486f7;
	color: #f8f8f8;
	font-weight: bold;
}
#btn_enviar:hover{
	cursor: pointer;

}
#btn-clean{
	width: 150px;
	height: 35px;
	border: 1px solid #CCC;
	border-radius: 3px;
	background-color: #d8d8d8;
	color: #353535;
	font-weight: bold;
}
#btn-clean:hover{
	cursor: pointer;
}
#check-ok{
	background: #ededed;
  	width: 18px;
  	height: 18px;
  	/*border: 1px solid rgba(0, 0, 0, 0.15);*/
  	/*box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.4); */
}
#label-check-ok{
	color: #353535;
}
#label-check-ok a{
	text-decoration: none;
	color: #009bfe;
}
#sub-div-captcha{
	padding: 5px;
	margin-top: 5px;
	border: 1px solid #CCC;
	font-size: 0.9em;
	background-color: #353535;
}
#sub-div-notice{
	padding: 8px;
	margin-top: 5px;
	width: 350px;
	font-size: 0.8em;
	background: #ffe591;
	color: #999999;

}


</style>

<script type="text/javascript">
 /* 
Para cambiar el theme del captcha.
themes: red|white|blackglass|clean
 */
 var RecaptchaOptions = {
    theme : 'clean'
 };
 </script>

</head>
<body>
<DIV ID="DIV-HEADER">
	<div id="div-logo-menu">
		<div id="div-logo-img">
			<a href="http://www.cloud-mdc.com/"><img src="Logo-cloudMDC2.png" /></a>
		</div>
		<div id="div-links-menu">
			<a href="http://www.cloud-mdc.com/" title="Ir a Inicio" >Inicio</a>
			<a href="#" title="Registrarse" class="active">Registro</a>
			<a href="http://www.cloud-mdc.com/all-software.php" title="Descargar el cliente Windows o Mac">Aplicativos</a>
			<a href="http://www.cloud-mdc.com/all-movil.php" title="Descargar la aplicación para Android">Moviles</a>
		</div>
	</div>
</DIV>
<DIV ID="DIV-MAIN">
	<div id="div-form-registro">
		<center><label><b>Active su cuenta</b></label></center>
			<hr>
		
			<?php
			error_reporting(E_ALL ^ E_NOTICE);
				switch ($_GET["ODBC"]) {
					case '@FtalCAP':
						echo "<div id='sub-div-notice'><img src='http://www.cloud-mdc.com/img/CheckX.png' width='30'>Escriba de nuevo el código captcha </div>";
						break;
					case '@Ftalempty':
						echo "<div id='sub-div-notice'><img src='http://www.cloud-mdc.com/img/CheckX.png' width='30'>  El código de activación es incorrecto. Por favor revise su código. </div>";
						break;
					case '@FtalSHOP':
						echo " <div id='sub-div-notice'><img src='http://www.cloud-mdc.com/img/CheckX.png' width='30'> El código de activación ya está siendo usado, ya fue creado.</div> ";
						break;
					
					default:
						#echo "";
						break;
				}
			?>

		<br />
		<form Name="Form-registro" Method="POST" Action="running.php">
			<input Type="text" name="txt-name" id="txt-texto" placeholder="Nombre" required /> <br /><br />
			<input Type="text" name="txt-apellido" id="txt-texto" placeholder="Apellido" Required /><br /><br />
			<input Type="email" name="txt-email" id="txt-texto" placeholder="E-Mail" Required /><br /><br />
			<input Type="text" name="txt-codigo" id="txt-codigo" placeholder="Codigo de activaci&oacute;n" Required /><br /><br />
			<input type="checkbox" id="check-ok" value="Milk" Required> <label for="check-ok" id="label-check-ok" > He leído los <a href="about.php">Términos de Uso</a> </label> <br><br>
			
			<div id="sub-div-captcha" >
			<center><img src="captcha.php" width="100" height="30" vspace="3"/></center>
			<center><input Type="text" name="txt_Captcha" id="txt_Captcha" size="30" placeholder="Escriba el codigo captcha. Aquí"/></center><br />
			</div>
			<br>
			
			<input Type="reset" name="btn-clean" id="btn-clean" Value="Limpiar" />
			<input Type="submit" name="btn_enviar" id="btn_enviar" value="Enviar" />
		</form>
		
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