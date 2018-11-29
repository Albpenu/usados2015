<?php 
include("conexion.php");
@session_start();
?>
<?php if(count($_SESSION['detalle'])>0){?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="js/ajax.js"></script>
</head>
<body>
	<table class="table" style="margin-bottom: 0px; !important">
	    <thead>
	        <tr>
	            <th>Nombre</th>
	            <th style="text-align:center">Precio</th>
	            <th></th>
	        </tr>
	    </thead>
	    <tbody>
	    	<?php 
	    	$total = 0;
	    	foreach($_SESSION['detalle'] as $k => $detalle){ 
			$total += $detalle['subtotal'];
	    	?>
	        <tr id="resultado">
	        	<td><?php echo utf8_encode($detalle['nombre_producto']); ?></td>
	            <td align="center"><?php echo $detalle['precio']." €"; ?></td>
	            <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id_producto'];?>">Eliminar</button></td>
	        </tr>
	        <?php }?>
	        <tr>
	        	<td colspan="3" class="text-right"><h1>Total: <?php echo $total." €"; ?></td>
	        </tr>
	    </tbody>
	</table>
	
	<?php }else{?>
	<div class="panel-body"> No hay productos agregados</div>
	<?php }?>
</body>
</html>

