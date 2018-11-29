<?php
	include('conexion.php');

	error_reporting( E_ALL & ~( E_NOTICE | E_STRICT | E_DEPRECATED ) ); //Aquí se genera un control de errores "NO BORRAR NI SUSTITUIR"
    
    require_once "Mail.php"; //Aquí se llama a la función mail "NO BORRAR NI SUSTITUIR"

    $to = array($_POST['email'], 'nenanu2015@gmail.com');//Aquí definimos quien recibirá el formulario
    $from = 'nenanu2015@usados2015.es'; //Aquí definimos que cuenta mandará el correo, generalmente perteneciente al mismo dominio
    $host = '217.116.0.228'; //Aquí definimos cual es el servidor de correo saliente desde el que se enviaran los correos
    $username = 'nenanu2015@usados2015.es'; //Aqui se define el usuario de la cuenta de correo
    $password = 'Magdalena2015'; //Aquí se define la contraseña de la cuenta de correo que enviará el mensaje
    $subject = "Nueva contraseña en us@dos2015.es"; //Aquí se define el asunto del correo

	$nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$pass = $_POST['password'];
	$rpass = $_POST['rpass'];
	$subject = "Nueva contraseña en us@dos2015.es";
	$body = "👋😀¡Hola ".$nombre." ".$apellidos.", con correo📬 <a href='".$_POST['email']."' style='cursor: pointer;'>".$_POST['email']."</a>!"." Ay, esa cabecita😅... Bueno, no te preocupes, aquí tienes tu nueva contraseña elegida: <b>".$pass."<b><br>En un momentito te la validamos 😉👍";

	//A partir de aquí empleamos la función mail para enviar el formulario

      $headers = array ('From' => $from,
      'To' => $to,
      'Subject' => $subject,
      'MIME-Version' => 1,
      'Content-type' => 'text/html;UTF-8');

      $smtp = Mail::factory('smtp',
      array ('host' => $host,
      'auth' => true,
      'username' => $username,
      'password' => $password));

      

	$comprobaremail = mysqli_query($connect, "SELECT correo FROM usuario WHERE correo='$correo'");
	if($pass==$rpass){
		//mail($correo, $asunto, $body, $headers);
		$mail = $smtp->send($to, $headers, $body);
		echo "mail enviado";
	} else{
		echo "uyuyuyuyuy";
	}
?>