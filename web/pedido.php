<!DOCTYPE html>
<html>
<head>
    <title>Pedido</title>
    <script src="js/jquery.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src='js/jspdf.debug.js'></script>
    <style type="text/css">
      * {
          box-sizing: border-box;
      }

      a {
        color: #428bca;
        text-decoration: none;
        font-family: 'tinta';
      }

      @font-face {
        font-family: 'tinta';
        src: url('rsc/fonts/tinta.ttf') format('truetype');
      }

      h1 {
        font-family: 'tinta';
      }
    </style>
</head>
<body >
<div id="ocultar">
    <a href="catlibros.php">Volver al catálogo</a>
    <h1>Aquí tiene su factura (puede 🖨 o 💾):</h1>
    <div style="display: none;">
        <?php
            include("detalle.php");
            include("conexion.php");
            error_reporting(E_ALL ^ E_NOTICE);
            error_reporting(E_ERROR | E_WARNING | E_PARSE);
            $connect->query("SET NAMES utf8");
            $cliente = $_SESSION['cliente'];

            $apellidos= mysqli_query($connect, "SELECT apellidos FROM cliente WHERE nombre='$cliente';");
            $apell= mysqli_fetch_array($apellidos);
            $ap= "" . $apell[0] . "";

            $idcl = mysqli_query($connect,"SELECT id_cliente FROM cliente WHERE nombre='$cliente' and apellidos='$ap';");
            $idcli= mysqli_fetch_array($idcl);
            $idcliente = "" . $idcli[0] . "";

            $direccion = mysqli_query($connect,"SELECT direccion FROM cliente WHERE nombre='$cliente' and apellidos='$ap' and id_cliente='$idcliente';");
            $direcc= mysqli_fetch_array($direccion);
            $dir = "" . $direcc[0] . "";

            echo "<script>alert('Pedido realizado. Gracias, ".$_SESSION['cliente'].". El envío está en camino 📦😉👍');</script>";
            foreach ($_SESSION['detalle'] as $detalle):
                $sql = mysqli_query($connect, "INSERT INTO pedido (id_pedido, fecha_pedido, id_cliente, id_producto, nombre_producto, precio, coste_pedido) VALUES ('', now(), '$idcliente', '".$detalle['id_producto']."', '".utf8_encode($detalle['nombre_producto'])."', '".$detalle['precio']."', '$total');") or die(mysqli_error($connect));
            endforeach;
            
        ?>
    </div>
    <button onclick="imprimirDescargar()">Imprimir/guardar</button><br>
    <label>También se le ha enviado a su 📧</label>
</div>
    <br>
    <div id="factura" style="position: relative;">
        <div style="display: block; float: left; font-size: 15px">
            <img width="20%" src="rsc/img/logo.png"><br>
            <label style="margin-left: 5px">MAGDALENA NÚÑEZ MORENO</label><br>
            <label style="margin-left: 5px">C/Severiana Fernández, nº77. 06300 Zafra (Badajoz)</label><br>
            <label style="margin-left: 5px">NIF: 08804692Q</label><br>
            <label style="margin-left: 5px">Tlf: 924550389/690109856</label>
        </div>

        <div style="display: block; float: right; padding-top:25px">
                <?php
                echo '<b>Nombre y apellidos del cliente: </b>'.$cliente." ".$apell[0].'<br>';
                echo '<b>Dirección de entrega: </b>'.$dir.'<br>';
                $fecha = date("d/m/Y");
                $hora = date("H:i:s");
                ?>
        </div>

        <div style="display: block; clear: both; padding-top:20px" align="center">
            <?php
            echo '<b><u>Pedido</u>:</b><br>';
            ?>
            <table class="table" border="1px solid black" style="border-spacing: 0px;">
                  <thead>
                      <tr bgcolor="#4286f4">
                          <th align="left">Nombre del producto</th>
                          <th>Precio</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach($_SESSION['detalle'] as $k => $detalle){ 
                    ?>
                      <tr>
                        <td><?php echo utf8_encode($detalle['nombre_producto']);?></td>
                        <td style="text-align: center;"><?php echo $detalle['precio']."€";?></td>
                      </tr>
                      <?php }?>
                  
            <?php
            echo '<br><tr bgcolor="#4286f4"><td colspan="2" align="center"><b>TOTAL IMPORTE (IVA incluido): <u>'.$total.'€</u></b></td></tr></tbody>
              </table>';
            ?>
        </div>

        <div style="text-align: right; margin-top: 50px">
            <?php
                echo '<br><b style="text-align: center">Fecha y hora de pedido: </b>El día '.$fecha.', a las '.$hora.'h<br>';
            ?>
        </div>
    </div>

    <script type="text/javascript">
        function imprimirDescargar() {
            document.getElementById('ocultar').style.display = 'none';
            window.print(document.getElementById('factura').innerHTML);
            document.getElementById('ocultar').style.display = 'block';
        }

/*
        DescargarPDF('factura', 'FacturaPedidoUsados2015');

        function DescargarPDF(ContenidoID, nombre) {
            var pdf = new jsPDF('p', 'pt', 'letter');
            html = $('#' + ContenidoID).html();
            specialElementHandlers = {};
            pdf.fromHTML(html, function (dispose) { pdf.save(nombre + '.pdf'); });
        }
  */
    </script>

    <?php

      error_reporting( E_ALL & ~( E_NOTICE | E_STRICT | E_DEPRECATED ) ); //Aquí se genera un control de errores "NO BORRAR NI SUSTITUIR"
      require_once "Mail.php"; //Aquí se llama a la función mail "NO BORRAR NI SUSTITUIR"

      $to = array($_SESSION['email'], 'nenanu2015@gmail.com');//Aquí definimos quien recibirá el formulario
      $from = 'nenanu2015@usados2015.es'; //Aquí definimos que cuenta mandará el correo, generalmente perteneciente al mismo dominio
      $host = '217.116.0.228'; //Aquí definimos cual es el servidor de correo saliente desde el que se enviaran los correos
      $username = 'nenanu2015@usados2015.es'; //Aqui se define el usuario de la cuenta de correo
      $password = 'Magdalena2015'; //Aquí se define la contraseña de la cuenta de correo que enviará el mensaje
      $subject = 'La factura de su pedido en Us@dos2015.es'; //Aquí se define el asunto del correo
      $contenido = '<div id="factura" style="position: relative;">
        <div style="display: block; float: left; font-size: 15px">
            <img width="20%" src="http://usa2dos.esy.es/rsc/img/logo.png"><br>
            <label style="margin-left: 5px">MAGDALENA NÚÑEZ MORENO</label><br>
            <label style="margin-left: 5px">C/Severiana Fernández, nº77. 06300 Zafra (Badajoz)</label><br>
            <label style="margin-left: 5px">NIF: 08804692Q</label><br>
            <label style="margin-left: 5px">Tlf: 924550389/690109856</label>
        </div>

        <div style="display: block; float: right; padding-top:25px">
                <b>Nombre y apellidos del cliente: </b>'.$cliente.' '.$apell[0].'<br>
                <b>Dirección de entrega: </b>'.$dir.'<br>
        </div>

        <div style="display: block; clear: both; padding-top:20px" align="center">
            <b><u>Pedido</u>:</b><br>
            
            <table class="table" border="1px solid black" style="border-spacing: 0px;">
                  <thead>
                      <tr bgcolor="#4286f4">
                          <th align="left">Nombre del producto</th>
                          <th>Precio</th>
                      </tr>
                  </thead>
                  <tbody>';
                    foreach($_SESSION['detalle'] as $k => $detalle){
                      $contenido .= '
                      <tr>
                        <td>'.utf8_encode($detalle['nombre_producto']).'</td>
                        <td style="text-align: center;">'.$detalle['precio'].'€</td>
                      </tr>
                      ';
                      }
            $contenido .= '<tr bgcolor="#4286f4"><td colspan="2" align="center"><b>TOTAL IMPORTE (IVA incluido): <u>'.$total.'€</u></b></td></tr></tbody>
              </table>
        </div>

        <div style="text-align: right; margin-top: 50px">
            <br><b style="text-align: center">Fecha y hora de pedido: </b>El día '.$fecha.', a las '.$hora.'h<br>
        
        </div>
    </div>';

      $body .= 'Muchas gracias por su compra, '.$cliente.' '.$apell[0].' 😊. Aquí tiene su factura 📝:<br>'.$contenido;

      //A partir de aquí empleamos la función mail para enviar el formulario

      $headers = array ('From' => $from,
      'To' => $to,
      'Subject' => $subject,
      'MIME-Version' => 1,
      'Content-type' => 'text/html;UTF-8');

      $smtp = Mail::factory('smtp',
      array ('host' => $host,
      'auth' => true,
      'username' => $username,
      'password' => $password));

      $mail = $smtp->send($to, $headers, $body);
                    
      /*$file_path = "pedido.php";
      $fp = fopen($file_path, "r");
      $file_content = fread($fp,filesize($file_path));
      fclose($fp);*/
      // Varios destinatarios
      /*$para  = $_SESSION['email']. ', '; // atención a la coma
      $para .= 'nenanu2015@gmail.com';

      // título
      $título = 'Su pedido en us@dos2015';

      // mensaje
      $mensaje = 'Muchas gracias por su compra,'.$_SESSION['nombre'].' '.$_SESSION['apellidos'].' 😊. Aquí tiene su factura 📝:<br>'.$contenido;
      // Para enviar un correo HTML, debe establecerse la cabecera Content-typeW
      $cabeceras =  'MIME-Version: 1.0' . "\r\n"; 
      $cabeceras .= 'From: Us@dos2015.es <nenanu2015@gmail.com>' . "\r\n";
      $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

      // Enviarlo
      mail($para, $título, $mensaje, $cabeceras);*/
    ?>
</body>
</html>