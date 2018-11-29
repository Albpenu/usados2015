<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Nueva contraseña</title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<style type="text/css">

		input[type="text"], input[type="password"], input[type="email"] {
			border-radius: 100%;
			text-align: center;
		}

		@font-face {
	        font-family: 'ink';
	        src: url('rsc/fonts/inkpen.ttf') format('truetype');
      	}

      	input[type="submit"] {
      		font-family: 'ink';
      		background-color: green;
      		border-color: gold;
      	}
		
		@font-face {
	        font-family: 'tinta';
	        src: url('rsc/fonts/tinta.ttf') format('truetype');
	    }

		h1, b {
			font-family: 'tinta';
		}

		::-webkit-input-placeholder {
		   text-align: center;
		}

		:-moz-placeholder { /* Firefox 18- */
		   text-align: center;  
		}

		::-moz-placeholder {  /* Firefox 19+ */
		   text-align: center;  
		}

		:-ms-input-placeholder {  
		   text-align: center; 
		}
	</style>
</head>
<body>
	<div align='center'>
	    <form method="post" action="recordar.php">
	    	<h1><u>Recuperar contraseña</u>:</h1>
	    	<b>Nombre:</b><br>
			<input placeholder="Su nombre" required name="nombre" type="text" /><br>
			<b>Apellidos:</b><br>
			<input type="text" name="apellidos" required placeholder="Sus apellidos" /><br>
			<b>Correo:</b><br>
			<input placeholder="Su correo electrónico" required name="email" type="email" value=""/><br>
			<b>Nueva contraseña:</b><br>
		    <input required placeholder="Introduzca una nueva" name="password" style="width: 160px;" type="password" id="pass" value=""/><br>
	        <input type="password" style="width: 160px;" name="rpass" id="rpass" class="form-control" required placeholder="Repítala" /><br>
	        <input type="checkbox" name="comprobar" id="checkpass" onclick="showHidePass()"/><small>Mostrar contraseña</small><br><br>
			<input type="submit" value="Enviar" style="font-size: 20px">
		</form>
	</div>

	<script type="text/javascript">
		function showHidePass(){
            var pass = document.getElementById("pass");
            var rpass = document.getElementById("rpass");
            var checkpass = document.getElementById("checkpass");

            if (checkpass.checked){
                pass.setAttribute("type", "text");
                rpass.setAttribute("type", "text");
            } else {
                pass.setAttribute("type", "password");
                rpass.setAttribute("type", "password");
            }
        }    
	</script>
</body>
</html>