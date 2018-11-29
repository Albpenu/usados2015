<?php
	include('conexion.php');
	//$connect->query("SET NAMES 'utf8'");
	echo "<div style='float: right; text-align: center'>Volvamos a casa:<br> <a href='index.php'><img class='option' src='rsc/img/house.png' /></a></div>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Panel de administración</title>
	<meta charset="utf-8">
	<style type="text/css">
		tbody tr:nth-child(odd){
		    background: #eac633;
		    
		}
		 
		tbody tr:nth-child(even){
		    background: white;
		    
		}
	</style>
</head>
<body>
	<!--Pedidos-->
	<form name="form" action="admin_consultas.php" method="POST">
		<h1>Pedidos:</h1>
		<input type="number" name="id_pedido" placeholder="Id del pedido">
		<input type="submit" name="remove0" value="Eliminar seleccionado" onclick="remove()"><input type="submit" name="remove" value="Eliminar todos" onclick="removes()">
	</form>
	<?php
		$sql = "SELECT * FROM pedido;";
		$resultado = $connect->query($sql) or die(mysqli_error($connect));
	?>
	<br>
		<table border="1px solid black" cellspacing="0">
			<thead style="background-color: #4d8cf2;">
				<th >Id de Pedido</th>
				<th>Fecha de pedido</th>
				<th>Id de Cliente</th>
				<th>Id de Producto</th>
				<th>Nombre de producto</th>
				<th>Precio</th>
				<th>Coste del pedido</th>
			</thead>
			<tbody>
	<?php
		if (mysqli_num_rows($resultado)>0) {
		    while($valor = mysqli_fetch_assoc($resultado)) {
		        echo utf8_encode("<tr><td align='center'>".$valor["id_pedido"]. "</td><td align='center'>" . $valor["fecha_pedido"]. "</td><td align='center'>" . $valor["id_cliente"]. "</td><td align='center'>".$valor["id_producto"]. "</td><td align='center'>" . $valor["nombre_producto"]. "</td><td align='center'>" . $valor["precio"]. "&#8364</td><td align='center'>" . $valor["coste_pedido"]. "&#8364</td></tr>");
		    }
		} else {
		    echo "<tr><td colspan='7' align='center'>0 resultados</td></tr>";
		}
	?>
			</tbody>
		</table>

	<!--Clientes-->
	<form name="form" action="admin_consultas.php" method="POST">
		<h1>Clientes:</h1>
		<input type="text" name="id_cliente" placeholder="Id de cliente"><br>
		<input type="password" name="pass" id="pass" placeholder="Contraseña"> <input type="checkbox" name="comprobar" id="checkpass" onclick="showHidePass()"/><b>Mostrar contraseña</b><br>
		<input type="submit" name="add1" value="Añadir" onclick="add()"><br>
		<input type="number" name="id" placeholder="Id">
		<input type="submit" name="remove1" value="Eliminar" onclick="remove()">
	</form>
	<?php
		$sql = "SELECT id_cliente, us.correo, us.contrasenia, nombre, apellidos, direccion, telefono FROM cliente cl JOIN usuario us ON us.id=cl.id_usuario";
		$resultado = $connect->query($sql) or die(mysqli_error($connect));

	?>
	<br>
		<table border="1px solid black" cellspacing="0">
			<thead style="background-color: #4d8cf2;">
				<th>Id de Cliente</th>
				<th>Correo</th>
				<th>Contraseña</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Direccion</th>
				<th>Telefono</th>
			</thead>
			<tbody>
	<?php
		if (mysqli_num_rows($resultado)>0) {
		    while($valor = mysqli_fetch_assoc($resultado)) {
		        echo utf8_encode("<tr><td align='center'>".$valor["id_cliente"]. "</td><td align='center'>" . $valor["correo"]. "</td><td align='center'>" . $valor["contrasenia"]. "</td><td align='center'>".$valor["nombre"]. "</td><td align='center'>" . $valor["apellidos"]. "</td><td align='center'>" . $valor["direccion"]. "</td><td align='center'>" . $valor["telefono"]. "</td></tr>");
		    }
		} else {
		    echo "<tr><td colspan='7' align='center'>0 resultados</td></tr>";
		}
	?>
			</tbody>
		</table>

<div>
	<!--Secciones-->
	<div style="float: left; margin-right: 20px;">
		<form name="form" action="admin_consultas.php" method="POST">
			<h1>Secciones:</h1>
			<label>*Id de subsección = 0 = NO TIENE ID</label>
		</form>
		<?php
			$sql = "SELECT * FROM seccion";
			$resultado = $connect->query($sql) or die(mysqli_error($connect));
		?>
			<table border="1px solid black" cellspacing="0">
				<thead style="background-color: #4d8cf2;">
					<th>Id de Sección</th>
					<th>Nombre de la sección</th>
					<th>Id de Subsección</th>
				</thead>
				<tbody>
		<?php
			if (mysqli_num_rows($resultado)>0) {
			    while($valor = mysqli_fetch_assoc($resultado)) {
			        echo "<tr><td align='center'>".$valor["id"]. "</td><td align='center'>" . utf8_encode($valor["nombre_seccion"]). "</td><td align='center'>".$valor["id_subseccion"]. "</td></tr>";
			    }
			} else {
			    echo "<tr><td colspan='2' align='center'>0 resultados</td></tr>";
			}
		?>
				</tbody>
			</table>
	</div>

	<!--Subsecciones-->
	<div style="float: left; margin-right: 10px; margin-top: 35px;">
		<form name="form" action="admin_consultas.php" method="POST">
			<h1>Subsecciones:</h1>
		</form>
		<?php
			$sql = "SELECT * FROM subseccion";
			$resultado = $connect->query($sql) or die(mysqli_error($connect));
		?>
			<table border="1px solid black" cellspacing="0">
				<thead style="background-color: #4d8cf2;">
					<th>Id</th>
					<th>Nombre de la subsección</th>
				</thead>
				<tbody>
		<?php
			if (mysqli_num_rows($resultado)>0) {
			    while($valor = mysqli_fetch_assoc($resultado)) {
			        echo "<tr><td align='center'>".$valor["id"]. "</td><td align='center'>" . utf8_encode($valor["nombre_subseccion"]). "</td></tr>";
			    }
			} else {
			    echo "<tr><td colspan='2' align='center'>0 resultados</td></tr>";
			}
		?>
				</tbody>
			</table>
	</div>
</div>
	
	<!--Productos-->
	<div style="clear: both; padding-top: 10px">
		<form name="form" action="admin_consultas.php" method="POST">
			<h1>Productos:</h1>
			<input type="text" name="nombre_producto" placeholder="Nombre"><br>
			<input type="text" name="precio" placeholder="Precio (sólo el número)"><br>
			<input type="number" name="id_seccion" placeholder="Id de sección"><br>
			<input type="number" name="id_subseccion" placeholder="Id de subsección"><br>
			<input type="submit" name="add2" value="Añadir" onclick="add()"><br>
			<input type="number" name="id_producto" placeholder="Id del producto">
			<input type="submit" name="remove2" value="Eliminar" onclick="remove()">
		</form>
		<?php
			$sql = "SELECT id_producto, nombre_producto, precio FROM producto";
			$resultado = $connect->query($sql) or die(mysqli_error($connect));
		?>
		<br>
			<table border="1px solid black" cellspacing="0">
				<thead style="background-color: #4d8cf2;">
					<th>Id</th>
					<th>Nombre</th>
					<th>Precio</th>
				</thead>
				<tbody>
		<?php
			if (mysqli_num_rows($resultado)>0) {
			    while($valor = mysqli_fetch_assoc($resultado)) {
			        echo "<tr><td align='center'>".$valor["id_producto"]. "</td><td align='center'>" .utf8_encode($valor["nombre_producto"]). "</td><td align='center'>" . $valor["precio"]. "€</td></tr>";
			    }
			} else {
			    echo "<tr><td colspan='3' align='center'>0 resultados</td></tr>";
			}
		?>
				</tbody>
			</table>
	</div>

	<script type="text/javascript">
        function showHidePass(){
            var pass = document.getElementById("pass");
            var checkpass = document.getElementById("checkpass");

            if (checkpass.checked){
                pass.setAttribute("type", "text");
            } else {
                pass.setAttribute("type", "password");
            }
        }

        function add(){
        	alert('Añadido 😉👍');
        }

        function remove(){
        	alert('Eliminado 😉👍');
        }

        function remove(){
        	alert('Eliminados 😉👍');
        }
    </script>
</body>
</html>