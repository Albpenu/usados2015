<?php
//Acceso usuarios registrados
    error_reporting(E_ALL ^ E_NOTICE);
    // Prevenir inyecciones a la base de datos
    $email = md5($_POST['email']);
    $pass = md5($_POST['password']);

    include("conexion.php");
    // Inicio de variables de sesión
    session_cache_limiter('public');
    session_start();
    // Consultas
    $correo=mysqli_query($connect, "SELECT correo FROM usuario WHERE correo='$email';");
    $comprobar_correo= mysqli_fetch_array($correo);
    /*$nombre= mysqli_query($connect, "SELECT nombre FROM cliente c JOIN usuario u ON c.id_usuario=u.id WHERE u.correo='$email' AND u.contrasenia='$pass';") or die(mysqli_error($connect));*/
    $nombre= mysqli_query($connect, "SELECT nombre FROM cliente c JOIN usuario u ON c.id_usuario=u.id WHERE u.correo='$email' AND u.contrasenia='$pass';") or die(mysqli_error($connect));
    $cliente= mysqli_fetch_array($nombre);

    $password=mysqli_query($connect, "SELECT contrasenia FROM usuario WHERE contrasenia='$pass';");
    $comprobar_pass= mysqli_fetch_array($password);
    
//Acceso de administrador:
	
	if (isset($_COOKIE['emailU'])) {
		$_SESSION['email'] = $_COOKIE['emailU'];
		header('location: index.php');
	}else{
		if ($_POST) {
			if (empty($_POST['email']) || empty($_POST['password'])) {
				
			}else{
				if ($_POST['email'] == "nenanu2015@gmail.com") {
					if ($_POST['password'] == "magdalena2015") {
						
						if ($_POST['remember'] && !empty($_POST['rememnber'])) {
							setcookie("emailU", $_POST['email'], time()+1576800);
							setcookie("passU", $_POST['password'], time()+1576800);
						}
						$_SESSION['email'] = $_POST['email'];
						echo "<script>alert('👋😀 ¡BIENVENIDA, MADRE!');</script>";
						echo "<script>window.location = 'admin.php';</script>";

					}else{
						echo "<script>alert('Contraseña INCORRECTA');</script>";
						echo "<script>window.location = 'index.php'</script>";
					}
				} elseif ($email == $comprobar_correo[0]) {

				      if ($pass == $comprobar_pass[0]) {

					      if ($_POST['remember'] && !empty($_POST['rememnber'])) {
					        setcookie("emailU", $_POST['email'], time()+1576800);
					        setcookie("passU", $_POST['password'], time()+1576800);
					      }
					      	$_SESSION['email'] = $_POST['email'];
					      	$_SESSION['cliente'] = $cliente['nombre'];
					      	include('conexion.php');
   							echo '<script>alert("👋😀 ¡BIENVENID@, '.$_SESSION['cliente'].'!")</script>';
   						    echo "Volvamos a casa:<br> <a href='index.php'><img class='option' src='rsc/img/house.png' /></a>";
					      
					      ?>
					      <script type="text/javascript">
					      	document.getElementById("usuario").innerHTML = '<?php echo $_SESSION['cliente']; ?>';
					      	
					      	document.getElementById('salir').innerHTML = 'Salir';


					      </script>
						<?php
							
				      } else {
							echo "<script>alert('Contraseña INCORRECTA');</script>";
							echo "<script>window.location = 'index.php'</script>";
						}
				} else{
					echo "<script>alert('Correo INCORRECTO');</script>";
					echo '<script>alert("Lo sentimos, pero para hacerse cliente y comprar necesitamos que registre algunos datos. ¡A qué espera, es gratis! Si ya lo está, vuelva a intentar acceder ;)")</script>';
					echo "<script>window.location = 'index.php';</script>";
				}
			}
		}else{

			
		}
    }
?>