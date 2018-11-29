<?php
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
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

        label {
            font-family: 'ink';
        }
        
        @font-face {
            font-family: 'tinta';
            src: url('rsc/fonts/tinta.ttf') format('truetype');
        }

        b, h1 {
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

<body style="background-image: url('rsc/img/fondo.png'); background-repeat: no-repeat; background-size: cover;">
    <!-- Formulario de registro-->
    <div align='center'>
    	<form name="form" action="registro_db.php" method="post">
            <h1><u>Registro</u>:</h1>
            <b>Nombre:</b><br>
            <input required placeholder="Introduzca su nombre" name="name" type="text" value=""/><br>
            <b>Apellidos:</b><br>
            <input required placeholder="Introduzca sus apellidos" name="surname" type="text" value=""/><br>
            <b>Correo:</b><br>
    	    <input required placeholder="Su correo electrónico" name="email" type="email" value=""/><br>
            <b>Contraseña:</b><br>
    	    <input required placeholder="Introduzca una contraseña" name="password" style="width: 160px;" type="password" id="pass" value=""/><br>
            <input type="password" style="width: 160px;" name="rpass" id="rpass" class="form-control" required placeholder="Repita su contraseña" /><br>
            <input type="checkbox" name="comprobar" id="checkpass" onclick="showHidePass()"/><small>Mostrar contraseña</small><br>
            <b>Dirección de entrega: </b><br><label>(*Por favor, escriba como aparece...)</label><br><input required placeholder="C/Av, nº, ciudad, provincia, CP" name="address" style="width: 185px;" type="text" value=""/><br>
            <input required type="text" style="width: 170px;" placeholder="Introduzca su nº de teléfono" name="tlf" /><br><br>
            <input type="submit" name="registro" value="Registrarse"  style="font-size: 20px"/>
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