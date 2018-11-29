<?php
// Registro de cliente:
    include('conexion.php');
    $nombre = $_POST['name'];
    $apellidos = $_POST['surname'];
    $correo = md5($_POST['email']);
    $contrasenia = md5($_POST['password']);
    $repcontrasenia = md5($_POST['rpass']);
    $direccion = $_POST['address'];
    $tlf = $_POST['tlf'];
    $connect->query("SET NAMES utf8");
    $comprobaremail = mysqli_query($connect, "SELECT * FROM usuario WHERE correo='$correo'");
    $comprobar_email = mysqli_num_rows($comprobaremail);

    if($contrasenia==$repcontrasenia){
        if($comprobar_email>0){
            echo ' <script language="javascript">alert("Uy, este email ya está designado, a ver sí vas a estar ya registrado...");</script> ';
        } else {
            $consulta1 = mysqli_query($connect, "INSERT INTO usuario (id, correo, contrasenia) VALUES ('', '$correo', '$contrasenia')");

            $id = mysqli_insert_id($connect);
            
            $consulta2 = mysqli_query($connect, "INSERT INTO cliente (id_usuario,nombre,apellidos,direccion,telefono) VALUES ('$id', '$nombre', '$apellidos', '$direccion', '$tlf')");

            echo "<b align='center'>¡Se ha registrado con éxito! 😉👍.<br> Ahora podrá acceder con su nueva cuenta. 😃 </br> Sea bienvenid@ y volvamos a casa:<br> <a href='index.php'><img class='option' src='rsc/img/house.png' /></a></b>"; 
        }
    } else {
            echo '<script>alert("Las contraseñas no coinciden. Revíselas ;)");</script>';
            echo '<script>history.back();</script>';
    }  
    mysqli_close($connect);
?>