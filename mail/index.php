<!DOCTYPE HTML>
<HTML>
<head>
	<title>Panel E-MaiL</title>
	<meta Charset="UTF-9" /><meta name="Description" content="Web MAil" />
	<link rel="stylesheet" type="text/css" href="estilos.css" />
	<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
<style type="text/css">
#txt1{
	width: 200px;
	height: 30px;
	border: 1px solid #CCC;
	padding-left: 4px;
}
#txt2{
	width: 410px;
	height: 30px;
	border: 1px solid #CCC;
	padding-left: 4px;
}
#btn{
	width: 150px;
	height: 30px;
	border: 1px solid #353535;
	background-color: #353535;
	color: #FFF;
	cursor: pointer;
}
</style>
</head>
<body>
	<DIV ID="DIV-MAIN">
		<label><b>Panel de nuevos usuarios.</b></label>
		<BR /><BR />
		<div id="div-form-reenvio">
			<form name="" Action="pro_mail.php" Method="POST">
				<input type="text" name="txt-nombre" id="txt1" placeholder="Nombre" required/>
				<input type="text" name="txt-apellido" id="txt1" placeholder="Apellido" required/> <br /><br />
				<input type="text" name="txt-mail" id="txt2" placeholder="Sub Dominio" required/><br />
				<input type="text" name="txt-subDNS" id="txt2" placeholder="Sub Dominio" required/><br />
				<input type="text" name="txt-passwd" id="txt2" placeholder="Comtrase&ntilde;a" required/><br />
				<br />
				<input type="submit" name="btn-enviar" id="btn" value="Enviar" />
				<input type="reset" name="btn-clean" id="btn" value="Limpiar" />
				
			</form>
		</div>
	</DIV>
</body>
</HTML>