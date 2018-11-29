<?php

	include('conexion.php');
	error_reporting(E_ALL ^ E_NOTICE);
	$idpedido = $_POST['id_pedido'];
	$remove = $_POST['remove'];
	$remove0 = $_POST['remove0'];

	if (isset($remove)) {
		$consulta = mysqli_query($connect, "TRUNCATE TABLE pedido;"); 
        header('location: admin.php');
	} else {}

	if (isset($remove0)) {
		$consulta = mysqli_query($connect, "DELETE FROM pedido WHERE id_pedido='$idpedido'");
        header('location: admin.php');
	} else {}

	$idcliente = $_POST['id_cliente'];
	$contrasenia = md5($_POST['pass']);
	$add1 = $_POST['add1'];
	$remove1 = $_POST['remove1'];
	$codigo = $_POST['id'];

	if (isset($add1)) {
		$consulta = mysqli_query($connect, "UPDATE usuario SET contrasenia = '$contrasenia' WHERE id = '$idcliente';");
        header('location: admin.php');
	} else {}

	if (isset($remove1)) {
		$consulta1 = mysqli_query($connect, "DELETE FROM cliente WHERE id_cliente='$codigo'");
        header('location: admin.php');
	} else {}

	$nombre_producto = $_POST['nombre_producto'];
	$precio = $_POST['precio'];
	$add2 = $_POST['add2'];
	$remove2 = $_POST['remove2'];
	$id_producto = $_POST['id_producto'];
	$id_subseccion = $_POST['id_subseccion'];
	$id_seccion = $_POST['id_seccion'];
	$connect->query("SET NAMES utf8");
	if (isset($add2)) {
		$consulta = mysqli_query($connect, "INSERT INTO producto (id_producto,nombre_producto,precio,id_subseccion,id_seccion) VALUES ('', '$nombre_producto', '$precio','$id_subseccion','$id_seccion')");
        header('location: admin.php');
	} else {}

	if (isset($remove2)) {
		$consulta = mysqli_query($connect, "DELETE FROM producto WHERE id_producto='$id_producto'");
        header('location: admin.php');
	} else {}
?>