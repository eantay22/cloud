<?php
session_start();
if ($_POST['action'] == "checkdata") {
	if(isset($_SESSION['tmptxt'])){  // Comprobamos que este la session tmptxt
		if ($_SESSION['tmptxt'] == $_POST['tmptxt']) { // Si la cadena de texto introducida es igual a la imagen
			echo "Bienvenido";
		} else {
			echo "Intentalo nuevamente";
		}
	} else { 
		echo "Error"; 
	}
	exit;
}
?>
		<strong>CAPTCHA con PHP </strong><br>
		Ingresar el texto mostrado en la imagen. <br>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		  <img src="captcha.php" width="100" height="30" vspace="3"><br>
		  <input name="tmptxt" type="text" size="30"><br>
		  <input name="btget" type="submit" class="boton" value="Verificar Codigo">
		  <input name="action" type="hidden" value="checkdata">
		</form>