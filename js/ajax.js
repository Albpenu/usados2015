$(function(){
	var ENV_WEBROOT = "../";
	//var prodagreg = 0;
							
	$("#agregar1").off("click");
	$("#agregar1").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto1").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						var n = ($('tr#resultado').length)+1;
						$('h2#contCarrito').html(n);
						if(data.success==true){
							//prodagreg+= 1;
							//$('#cantpr').text(prodagreg);
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar2").off("click");
	$("#agregar2").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto2").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar3").off("click");
	$("#agregar3").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto3").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar4").off("click");
	$("#agregar4").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto4").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar5").off("click");
	$("#agregar5").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto5").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar6").off("click");
	$("#agregar6").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto6").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar7").off("click");
	$("#agregar7").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto7").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar8").off("click");
	$("#agregar8").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto8").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar9").off("click");
	$("#agregar9").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto9").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar10").off("click");
	$("#agregar10").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto10").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar11").off("click");
	$("#agregar11").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto11").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar12").off("click");
	$("#agregar12").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto12").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar13").off("click");
	$("#agregar13").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto13").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar14").off("click");
	$("#agregar14").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto14").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar15").off("click");
	$("#agregar15").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto15").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar16").off("click");
	$("#agregar16").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto16").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar17").off("click");
	$("#agregar17").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto17").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar18").off("click");
	$("#agregar18").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto18").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar19").off("click");
	$("#agregar19").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto19").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar20").off("click");
	$("#agregar20").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto20").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar21").off("click");
	$("#agregar21").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto21").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar22").off("click");
	$("#agregar22").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto22").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar23").off("click");
	$("#agregar23").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto23").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar24").off("click");
	$("#agregar24").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto24").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar25").off("click");
	$("#agregar25").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto25").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

//BOLIS Y MECHERO:
	$("#agregar26").off("click");
	$("#agregar26").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto26").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar27").off("click");
	$("#agregar27").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto27").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar28").off("click");
	$("#agregar28").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto28").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar29").off("click");
	$("#agregar29").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto29").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar30").off("click");
	$("#agregar30").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto30").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar31").off("click");
	$("#agregar31").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto31").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar32").off("click");
	$("#agregar32").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto32").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar33").off("click");
	$("#agregar33").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto33").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar34").off("click");
	$("#agregar34").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto34").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar35").off("click");
	$("#agregar35").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto35").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar36").off("click");
	$("#agregar36").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto36").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

//MALETINES

	$("#agregar02").off("click");
	$("#agregar02").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto02").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar03").off("click");
	$("#agregar03").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto03").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar04").off("click");
	$("#agregar04").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto04").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar05").off("click");
	$("#agregar05").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto05").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar06").off("click");
	$("#agregar06").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto06").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar07").off("click");
	$("#agregar07").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto07").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});

	$("#agregar08").off("click");
	$("#agregar08").on("click", function(e) {
		var cantidad = $("#txt_cantidad").val();
		var id_producto = $("#cbo_producto08").val();
		if(id_producto!=0){
			if(cantidad!=''){
				$.ajax({
					url: 'Controller/ProductoController.php?page=1',
					type: 'post',
					data: {'id_producto':id_producto, 'cantidad':cantidad},
					dataType: 'json',
					success: function(data) {
						if(data.success==true){
							$("#txt_cantidad").val('');
							alertify.success(data.msj);
							$(".detalle-producto").load('detalle.php');
							var n = ($('tr#resultado').length);
							$('h2#contCarrito').html(++n);
						}else{
							alertify.error(data.msj);
						}
					},
					error: function(jqXHR, textStatus, error) {
						alertify.error(error);
					}
				});				
			}else{
				alertify.error('Ingrese una cantidad');
			}
		}else{
			alertify.error('Seleccione un producto');
		}
	});
	
	$(".eliminar-producto").off("click");
	$(".eliminar-producto").on("click", function(e) {
		var id = $(this).attr("id");
		$.ajax({
			url: 'Controller/ProductoController.php?page=2',
			type: 'post',
			data: {'id_producto':id},
			dataType: 'json'
		}).done(function(data){
			if(data.success==true){
				alertify.success(data.msj);
				$(".detalle-producto").load('detalle.php');
				var n = ($('tr#resultado').length);
				$('h2#contCarrito').html(--n);
			}else{
				alertify.error(data.msj);
			}
		})
	});
});