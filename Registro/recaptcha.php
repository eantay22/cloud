<?php 
require "recaptcha/recaptchalib.php"; 
$publickey = "6LeEhAMTAAAAADHCGA-3q5LQZ2MxSSh6YqFg1TAo";
$privatekey = "6LeEhAMTAAAAALLnSsNjIgw9WyI9khLXUnzcJ3dF";
#response captcha
$resp = null;
#Para mostrar los posibles mensajes de error
$msg = null;
#Para regresar el valor de los campos si hay un error
$value = array('usuario' => '', 'password' => '');

if (isset($_POST["login"]))
{
        /* NECESARIO RESPONSE CAPTCHA */
        $resp = recaptcha_check_answer($privatekey,
                                        $_SERVER["REMOTE_ADDR"],
                                        $_POST["recaptcha_challenge_field"],
                                        $_POST["recaptcha_response_field"]);

                /* VALIDAR LOS CAMPOS */			
                if ($_POST["usuario"] == '')
				{
				 $msg = "El campo usuario es requerido";
				 $value['usuario'] = $_POST['usuario'];
				 $value['password'] = $_POST['password'];
				}
				else if (!preg_match("/^[a-z]+$/i", $_POST["usuario"]))
				{
				$msg = "Sólo se aceptan letras";
				$value['usuario'] = $_POST['usuario'];
				$value['password'] = $_POST['password'];
				}
				else if (strlen($_POST["usuario"]) < 3 || strlen($_POST["usuario"]) > 50)
				{
				$msg = count($_POST["usuario"]) . "El campo usuario debe estar entre 3 y 50 caracteres";
				$value['usuario'] = $_POST['usuario'];
				$value['password'] = $_POST['password'];
				}
				else if ($_POST["password"] == '')
				{
				 $msg = "El campo password es requerido";
				 $value['usuario'] = $_POST['usuario'];
				 $value['password'] = $_POST['password'];
				}
				else if (!preg_match("/^[a-z0-9]+$/i", $_POST["password"]))
				{
				$msg = "En el campo password sólo se aceptan letras y números";
				 $value['usuario'] = $_POST['usuario'];
				 $value['password'] = $_POST['password'];
				}
				else if (strlen($_POST["password"]) < 8 || strlen($_POST["password"]) > 16)
				{
				$msg = "El campo password debe estar entre 8 y 16 caracteres";
				$value['usuario'] = $_POST['usuario'];
				$value['password'] = $_POST['password'];
				}
				else if (empty($_POST["recaptcha_response_field"])) /* Si el captcha está vacío */
                 {
                 $msg = "El campo captcha es requerido";
				 $value['usuario'] = $_POST['usuario'];
				 $value['password'] = $_POST['password'];
                 }
                else if(!$resp->is_valid) /* Si el captcha es incorrecto */
                 {
                 $msg = "El campo captcha es inválido";
				 $value['usuario'] = $_POST['usuario'];
				 $value['password'] = $_POST['password'];
                 }
                else
                 {
				   //Acciones correctas, por ejemplo consultar en la base de datos
                  $msg = "Enhorabuena formulario enviado correctamente";
                 }				 
}

?>



<!DOCTYPE HTML>
<html>
<head>
<script src='https://www.google.com/recaptcha/api.js'></script>
    <meta charset="UTF-8">
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
<h1>LOGIN</h1>

<?php echo $msg ?>
<form method="POST">
<td>Usuario:</td><td><input type="text" name="usuario" value="<?php echo $value["usuario"] ?>"></td>
<td>Password:</td><td><input type="password" name="password" value="<?php echo $value["password"] ?>"></td>
<!-- Mostrar el campo captcha -->
<?php echo recaptcha_get_html($publickey); ?>

<input type="hidden" name="login">
<button type="submit">Enviar</button>
</form>

<div class="g-recaptcha" data-sitekey="6LeEhAMTAAAAADHCGA-3q5LQZ2MxSSh6YqFg1TAo"></div>

</body>
</html>



