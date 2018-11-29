$(buscar_datos());

function buscar_datos(busqueda) {
	$.ajax({
		url: './buscar.php',
		type: 'POST',
		dataType: 'html',
		data: {busqueda: busqueda}
	})
	.done( function(resultado){
		$("#resultados").html(resultado);
	})
	.fail( function(){
		$("#resultados").html("Error :(");
	})
}

$(document).on('keyup', '#buscar', function(){
	var valor = $(this).val();
	if(valor != ""){
		buscar_datos(valor);
	} else {
		buscar_datos();
	}
});