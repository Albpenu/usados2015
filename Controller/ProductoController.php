<?php
session_start();
if(isset($_GET["page"])){
	$page=$_GET["page"];
}else{
	$page=0;
}

include('../Config/conexion.php');
include('../Model/Producto.php');

switch($page){

	case 1:
		$objProducto = new Producto();
		$json = array();
		$json['msj'] = "Producto agregado al carrito ☝😉📚";
		$json['success'] = true;
	
		if (isset($_POST['id_producto']) && $_POST['id_producto']!='') {
			try {
				$id_producto = $_POST['id_producto'];
				
				$resultado_producto = $objProducto->getById($id_producto);
				$producto = $resultado_producto->fetchObject();
				$nombre_producto = $producto->nombre_producto;
				$precio = $producto->precio;
				
				$subtotal = 1 * $precio;
				
				$_SESSION['detalle'][$id_producto] = array('id_producto'=>$id_producto, 'nombre_producto'=>$nombre_producto, 'precio'=>$precio, 'subtotal'=>$subtotal);

				$json['success'] = true;

				echo json_encode($json);
			} catch (PDOException $e) {
				$json['msj'] = $e->getMessage();
				$json['success'] = false;
				echo json_encode($json);
			}
		}else{

		}
		break;

	case 2:
		$json = array();
		$json['msj'] = 'Producto eliminado del carrito 🙄';
		$json['success'] = true;
	
		if (isset($_POST['id_producto'])) {
			try {
				unset($_SESSION['detalle'][$_POST['id_producto']]);
				$json['success'] = true;
	
				echo json_encode($json);
	
			} catch (PDOException $e) {
				$json['msj'] = $e->getMessage();
				$json['success'] = false;
				echo json_encode($json);
			}
		}
		break;
}
?>