<?php
  
  session_start();
  session_id();
  session_name();
  include('acceso.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Us@dos</title>
  <link rel="icon" type="image/gif" href="rsc/img/icon_favicon.gif" />
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src='js/clipboard.js'></script>
  <script src='js/clipboard.min.js'></script>

  <style type="text/css">
      a {
        color: #428bca;
        text-decoration: none;
      }

      @font-face {
        font-family: 'mejor';
        src: url('rsc/fonts/mejor.otf') format('opentype');
      }
      
      @font-face {
        font-family: 'ink';
        src: url('rsc/fonts/inkpen.ttf') format('truetype');
      }

      #tlf, #acceso, #salir, #correo {
        font-family: 'mejor';
      }

      #usuario, strong {
        font-family: 'mejor';
      }

      input[type="email"] {
        background-color: transparent;
      }

      input[type="email"]:focus {
          background-color: white;
      }

      @-webkit-keyframes aparecedesaparece {
        0%   { opacity: 0; }
        100% { opacity: 1; }
      }

      .menu{
        -webkit-animation: aparecedesaparece 5s infinite; /* Safari 4+ */
        -moz-animation: aparecedesaparece 5s infinite; /* Fx 5+ */
        -o-animation:aparecedesaparece 5s infinite; /* Opera 12+ */
        animation: aparecedesaparece 5s infinite; /* IE 10+, Fx 29+ */
      }
    </style>
</head>
<body style="background-size: 150% 150%; background-attachment: fixed; background-position: cover;">

  <b style="top: 0; left: 0; position: relative;" id="tlf">Tlf de contacto: <br><a style="text-decoration: none" href="" class="copiar" data-clipboard-text="924550389">924550389</a>/<a style="text-decoration: none" href="" class="copiar" data-clipboard-text="690109856">690109856</a></b><br>
  <b style="left: 0; position: relative;" id="correo">Correo: <a style="text-decoration: none" href="" class="copiar" data-clipboard-text="nenanu2015@gmail.com">nenanu2015<b style="font-family: 'ink';">@</b>gmail.com</a></b>
  <span style="top: 5px; right: 5px; float: right; position: absolute;"><b id="acceso" ></b><a id="usuario" href=''>usuario</a></br><a style="top: 5; right: 5; float: right;" href='cerrarsesion.php' title='Cerrar sesión' id="salir">Salir</a></span>
  
    <!-- Formulario de acceso-->
	<form id="formu" name="form" action="acceso.php" method="post" style="background: url('rsc/img/icon11.png'); background-position: center; background-size: 100% 100%; border-radius: 15px; text-align: center; z-index: 1000" align="center">
      <a href="javascript:cerrarAcc()" style="float: right; padding-right: 5px; font-family: 'mejor'; color: black">x</a>
      <h1 style="margin-top: 5px; font-family: 'mejor';"><u>Acceso</u>:</h1>
	    <input style="width: 125px; " placeholder="Correo" required name="email" type="email" value="" /><br>
	    <input style="width: 125px; background-color: transparent;" placeholder="Contraseña" required name="password" type="password" value=""/><br>
        <input name="remember" type="checkbox" value="rememberYES"><label style="color: gold;">Recuérdame</label><br>
        <input type="submit" style="background-color: transparent; font-weight: bold;" name="enviar" value="Entrar"/><br>
        <a style="font-size: 12px; color: #00427b;" href="registro.php"><b>¿<u>No estás registrado</u>?</b></a><br>
        <a style="font-size: 12px; color: #00427b;" href="olvidado.php">¿<u>Has olvidado tu contraseña</u>?</a>
	</form>

  <div id="portada">
    <img id="logo" src="rsc/img/logo.png" />
    <nav>
      <ul>
        <li>
          <a href='javascript:window.location.reload();' style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
            <img class='option' title='Página de inicio' src='rsc/img/house.png' />
            <div class="menu" id="opcion1" style="width: 80px; cursor: pointer; height: 80px; position: absolute; text-align: center; display: flex; justify-content: center; align-content: center; flex-direction: column; background: url('rsc/img/fondo.png'); background-repeat: no-repeat; border-radius: 100%">
              <strong style="cursor: pointer; color: black">Inicio</strong>
            </div>
          </a>
        </li>

        <li>
          <a onclick='secciones()' style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
            <img class='option' title='Soy los catálogos' src='rsc/img/list.png' onclick='secciones()'/>
            <div class="menu" id="opcion2" style="width: 80px; cursor: pointer; height: 80px; position: absolute; text-align: center; display: flex; justify-content: center; align-content: center; flex-direction: column; background: url('rsc/img/fondo.png'); background-repeat: no-repeat; border-radius: 100%;">
                <strong style="cursor: pointer; color: black">Catálogos</strong>
            </div>
          </a>
        </li>

        <li>
          <a onclick='formulario()' style="display: flex; justify-content: center; align-content: center; flex-direction: column;">
            <img class='option' title='Soy el registro y acceso' onclick='formulario()' src='rsc/img/userpassword.png' />
            <div class="menu" style="width: 80px; cursor: pointer; height: 80px; position: absolute; text-align: center; display: flex; justify-content: center; align-content: center; flex-direction: column; background: url('rsc/img/fondo.png'); background-repeat: no-repeat; border-radius: 100%">
                <strong style="cursor: pointer; color: black">Acceso</strong>
            </div>
          </a>
        </li><br>
        <div id='seccion'>
          <li>
            <a href='catlibros.php'>
              <img class='option' src='rsc/img/catlibros.png' />
            </a>
          </li>
          <li>
            <a href='catbolis.php'>
              <img class='option' src='rsc/img/pen.png' />
            </a>
          </li>
          <li>
            <a href='catmaletines.php'>
              <img class='option' src='rsc/img/briefcase.png' />
            </a>
          </li>
          <a title='Cerrar catálogos' href="javascript:secciones()" style="float: right; padding-right: 5px; font-family: 'mejor'; color: black; background-color: red;">x</a>
        </div>
      </ul>
    </nav>
    <br>
    <b style="color: black; text-align: center; display: flex; justify-content: center; align-content: center;">**<u style="color: black"><b style="color: gold">Datos de clientes protegidos con encriptación MD5</b></u>😉👍**</b>
  </div>

	<aside></aside>
	<aside></aside>
	<script type="text/javascript">
  document.getElementById("acceso").innerHTML = '<?php echo "Hola "; ?>';
  document.getElementById("usuario").innerHTML = '<?php session_start(); echo $_SESSION['cliente']; ?>';
  document.getElementById("seccion").style.display = "none";
  document.getElementById("formu").style.display = "none";
  function secciones() {
      var seccion = document.getElementById("seccion");
      var menu = document.getElementsByClassName('menu');
      if (seccion.style.display === "none") {
          seccion.style.display = "block";

      } else {
          seccion.style.display = "none";
      }
  }
  
  function formulario() {
      var form = document.getElementById("formu");
      if (form.style.display === "none") {
          form.style.display = "block";
      } else {
          form.style.display = "none";
      }
  }

  function cerrarAcc(){
      var form = document.getElementById("formu");
      form.style.display = "none";
  }
        
  function showHidePass() {
      var password = document.getElementById("pass");
      var checkbox = document.getElementById("checkpass");
          
      if (checkbox.checked == true) {
          password.type = "text";
      } else {
          password.type = "password";
      }
  }


var clipboard = new Clipboard('.copiar');

clipboard.on('success', function(e) {
    alert('Copiado al portapapeles 📋😉👍');
    console.info('Accion:', e.action);
    console.info('Texto:', e.text);
    console.info('Trigger:', e.trigger);

    e.clearSelection();
});

clipboard.on('error', function(e) {
    console.error('Accion:', e.action);
    console.error('Trigger:', e.trigger);
});

	</script>
</body>
</html>
