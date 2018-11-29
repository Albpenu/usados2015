<?php
  //echo "<script>alert('Hola <a href=`www.google.es`>Vente</a>');</script>";
	session_start();
    session_id();
    session_name();
    error_reporting(E_ALL ^ E_NOTICE);
    $_SESSION['detalle'] = array();
    include ('Config/conexion.php');
    include ('Model/Producto.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Us@dos</title>
    <link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="js/alertify/themes/alertify.core.css" />
    <link rel="stylesheet" href="js/alertify/themes/alertify.bootstrap.css" id="toggleCSS" />
    <script src="js/alertify/lib/alertify.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
        font-family: 'ink';
        src: url('rsc/fonts/inkpen.ttf') format('truetype');
      }

      #acceso, .btn-agregar-producto {
        font-family: 'ink';
      }

      @font-face {
        font-family: 'tinta';
        src: url('rsc/fonts/tinta.ttf') format('truetype');
      }

      @font-face {
        font-family: 'mejor';
        src: url('rsc/fonts/mejor.otf') format('opentype');
      }

      #usuario, h1, th {
        font-family: 'tinta';
      }

      @media screen and (max-width: 700px){

          h2#contCarrito {
            font-size: 15px;
            border: 0px solid gold;
          }

      }
    </style>
</head>
<body>
	<nav></nav>
      <span style="top: 0; right: 0; float: right; padding: 8px"><b id="acceso" style="color: black;"></b><a id="usuario"><?php echo $_SESSION['cliente']; ?></a><div><img width="20%" src="rsc/img/cart.png" style="background-color: white; border-radius: 25px; position: fixed; right: 10%; margin-top: 20px; cursor: pointer; z-index: 100;" data-toggle="modal" data-target="#myModal" onclick="mostrarCarrito()"><!--<span style="position: fixed; display: none;" id="cantpr">0</span>--><span style="position: fixed; z-index: 1000; right: 13.5%; color: red;"><h2 id="contCarrito" style="position: absolute; z-index: 100; background-color: blue; border: 3px solid gold">0</h2></span></div></span>
  
  <div class="form-1-2" style="margin-left: 10px; margin-top: 10px; float: left;">
    <a href="index.php">Volver a la página principal</a><br>
    <b style="z-index: 1;">Aquí no es necesario 🔍,<br> ya que el catálogo es 👶</b>
  </div>
  <?php
    if (isset($_SESSION['cliente']) && !empty($_SESSION['cliente'])) {
      
    } else {
  ?>
  <div id="aviso" title="Aviso a navegantes" style="color: red">
    <b style="font-family: 'mejor';">Por favor, recuerde 🤔 que para poder realizar pedido/s 📦 primero necesita <a style="color: #428bca; font-family: 'mejor';" href="http://usados2015.es/registro.php">registrarse</a>.<br> Si ya está registrado, ingrese ✍️ sus datos de <a style="color: #428bca; font-family: 'mejor';" href="http://usados2015.es/index.php" onclick="formulario()">acceso</a>. <br> Tenga un buen día 😃</a></b>
  </div>
  <?php
    }
  ?>
    <div class="container modal fade" role="dialog" id="myModal" style="display: none; position: fixed;">
      
      <div class="modal-content" style="background-image: url('rsc/img/fondo.png'); background-repeat: no-repeat; background-size: cover;">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1 style="color: white" class="modal-title">Su carrito de compra</h1>
        </div>
        
        <br>
        <div class="panel panel-info">
           <div class="panel-heading">
                <h3 class="panel-title">Productos</h3>
              </div>
          <div class="panel-body detalle-producto">
            <?php if(count($_SESSION['detalle'])>0){?>
              <table class="table">
                  <thead>
                      <tr>
                          <th>Nombre</th>
                          <th>Precio</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach($_SESSION['detalle'] as $k => $detalle){ 
                    ?>
                      <tr>
                        <td><?php echo utf8_encode($detalle['nombre_producto']);?></td>
                          <td align="center"><?php echo $detalle['precio'];?></td>
                          <td><button type="button" class="btn btn-sm btn-danger eliminar-producto" id="<?php echo $detalle['id_producto'];?>">Eliminar</button></td>
                      </tr>
                      <?php }?>
                  </tbody>
              </table>
            <?php }else{?>
            <div id="added" class="panel-body"> No hay productos agregados</div>
            <?php }?>
          </div>
        </div>

        <div class="modal-footer">
          <span style="display: inline-block; font-size: 20px; float: left;"><strong style="color: white">Método de pago: </strong><label style="color: gold;">✔ Contra reembolso |<strong style="color: white;">| Para pedidos <label style="color: gold; margin-right: 5px">>15€<label style="color: white;">:</label></label><u style="color: gold;">ENVÍO GRATIS</u></strong></label></span>
          <?php
            if (!isset($_SESSION['cliente']) && empty($_SESSION['cliente'])) {
          ?>
              <div id="aviso" title="Aviso a navegantes" style="color: red">
                <b style="font-family: 'mejor';">Por favor, recuerde 🤔 que para poder realizar pedido/s 📦 primero necesita <a style="color: #428bca; font-family: 'mejor';" href="http://usados2015.es/registro.php">registrarse</a>.<br> Si ya está registrado, ingrese ✍️ sus datos de <a style="color: #428bca; font-family: 'mejor';" href="http://usados2015.es/index.php" onclick="formulario()">acceso</a>. <br> Tenga un buen día 😃</a></b>
              </div>
          <?php
            } else {
          ?>
          <form method="post" action="pedido.php"><input type="submit" value="Realizar pedido" class="btn btn-success" style="font-size: 20px; float: right; font-family: 'ink';" /></form>
          <?php
            }
          ?>
        </div>

      </div>
    </div>

    <br><br><br>
    <div id="catalogo" align="center">
        <h1 style="color: black; width: 80%; font-size: 40px;"><u>BOLÍGRAFOS DE MARCA</u>:</h1>
            <img src="rsc/img/catbolis/mb.png" id="categoria1" style="cursor:pointer; width: 80%; margin-top: 10px; border-radius: 25px; border-bottom-left-radius: 0px;"/><br>

            <div id="subcategorias1">
              <img width="40%" src="rsc/img/catbolis/IMG_2020.jpg">
              <?php 
                $objProducto = new Producto();
                $resultado_producto = $objProducto->get25();
              ?>
                <div>
                  <div class="row" style="width: 80%">
                    <div name="cbo_producto">
                          <?php foreach($resultado_producto as $producto):?>
                            <span style="display: none"><input type="button" id="cbo_producto26" value="<?php echo $producto['id_producto']?>"/></span>
                            <b><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></b>
                          <?php endforeach;?>
                    </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px; margin-bottom: 5px">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar26">Agregar</button>
                      </div>
                    </div>
                  </div>
                </div>

              <img width="40%" src="rsc/img/catbolis/IMG_2019.jpg">
              <?php 
                $objProducto = new Producto();
                $resultado_producto = $objProducto->get31();
              ?>
                <div>
                  <div class="row" style="width: 80%">
                    <div name="cbo_producto">
                          <?php foreach($resultado_producto as $producto):?>
                            <span style="display: none"><input type="button" id="cbo_producto32" value="<?php echo $producto['id_producto']?>"/></span>
                            <b><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></b>
                          <?php endforeach;?>
                    </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px; margin-bottom: 5px">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar32">Agregar</button>
                      </div>
                    </div>
                  </div>
                </div>

              <img width="40%" src="rsc/img/catbolis/IMG_2018.jpg">
              <?php 
                $objProducto = new Producto();
                $resultado_producto = $objProducto->get32();
              ?>
                <div>
                  <div class="row" style="width: 80%">
                    <div name="cbo_producto">
                          <?php foreach($resultado_producto as $producto):?>
                            <span style="display: none"><input type="button" id="cbo_producto33" value="<?php echo $producto['id_producto']?>"/></span>
                            <b><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></b>
                          <?php endforeach;?>
                    </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px; margin-bottom: 5px">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar33">Agregar</button>
                      </div>
                    </div>
                  </div>
                </div>

              <img width="40%" src="rsc/img/catbolis/IMG_2021.jpg">
              <?php 
                $objProducto = new Producto();
                $resultado_producto = $objProducto->get33();
              ?>
                <div>
                  <div class="row" style="width: 80%">
                    <div name="cbo_producto">
                          <?php foreach($resultado_producto as $producto):?>
                            <span style="display: none"><input type="button" id="cbo_producto34" value="<?php echo $producto['id_producto']?>"/></span>
                            <b><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></b>
                          <?php endforeach;?>
                    </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px; margin-bottom: 5px">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar34">Agregar</button>
                      </div>
                    </div>
                  </div>
                </div>

              <img width="40%" src="rsc/img/catbolis/IMG_2022.jpg">
              <?php 
                $objProducto = new Producto();
                $resultado_producto = $objProducto->get34();
              ?>
                <div>
                  <div class="row" style="width: 80%">
                    <div name="cbo_producto">
                          <?php foreach($resultado_producto as $producto):?>
                            <span style="display: none"><input type="button" id="cbo_producto35" value="<?php echo $producto['id_producto']?>"/></span>
                            <b><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></b>
                          <?php endforeach;?>
                    </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px;">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar35">Agregar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
            </div>
            
            <img src="rsc/img/catbolis/cd.png" id="categoria2" style="cursor:pointer; width: 80%; margin-top: 10px; border-radius: 25px"/><br> 

            <div id="subcategorias2">
              <img width="40%" src="rsc/img/catbolis/IMG_2024.jpg">
              <?php 
                $objProducto = new Producto();
                $resultado_producto = $objProducto->get26();
              ?>
                  <div class="row" style="width: 80%">
                    <div name="cbo_producto">
                          <?php foreach($resultado_producto as $producto):?>
                            <span style="display: none"><input type="button" id="cbo_producto27" value="<?php echo $producto['id_producto']?>"/></span>
                            <b><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></b>
                          <?php endforeach;?>
                    </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px;">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar27">Agregar</button>
                      </div>
                    </div>
                  </div>
                <hr>
            </div>
            
            <img src="rsc/img/catbolis/cross.png" id="categoria3" style="cursor:pointer; width: 80%; margin-top: 10px; border-top-right-radius: 25px; border-top-left-radius: 25px;"/>

            <div id="subcategorias3">
              <img width="40%" src="rsc/img/catbolis/IMG_2025.jpg">
                <?php 
                $objProducto = new Producto();
                $resultado_producto = $objProducto->get27();
              ?>
                  <div class="row" style="width: 80%">  
                        <div name="cbo_producto">
                          <?php foreach($resultado_producto as $producto):?>
                            <span style="display: none"><input type="button" id="cbo_producto28" value="<?php echo $producto['id_producto']?>"/></span>
                            <b><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></b>
                          <?php endforeach;?>
                        </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px;">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar28">Agregar</button>
                      </div>
                    </div>
                  </div>
                <hr>
            </div>
            
            <img src="rsc/img/catbolis/inoxcrom.png" id="categoria4" style="cursor:pointer; width: 80%; margin-top: 10px;"/>

            <div id="subcategorias4">
              <img width="40%" src="rsc/img/catbolis/IMG_2023.jpg">
              <?php 
                $objProducto = new Producto();
                $resultado_producto = $objProducto->get28();
              ?>
                  <div class="row" style="width: 80%">
                    <div name="cbo_producto">
                          <?php foreach($resultado_producto as $producto):?>
                            <span style="display: none"><input type="button" id="cbo_producto29" value="<?php echo $producto['id_producto']?>"/></span>
                            <b><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></b>
                          <?php endforeach;?>
                    </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px; margin-bottom: 5px">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar29">Agregar</button>
                      </div>
                    </div>
                  </div>

                <img width="40%" src="rsc/img/catbolis/IMG_2027.jpg">
                <?php 
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get35();
                ?>
                  <div class="row" style="width: 80%">
                        <div name="cbo_producto">
                          <?php foreach($resultado_producto as $producto):?>
                            <span style="display: none"><input type="button" id="cbo_producto36" value="<?php echo $producto['id_producto']?>"/></span>
                            <b><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></b>
                          <?php endforeach;?>
                        </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px;">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar36">Agregar</button>
                      </div>
                    </div>
                  </div>
                <hr>
            </div>
            
            <img src="rsc/img/catbolis/waterman.png" id="categoria5" style="cursor:pointer; width: 80%; margin-top: 10px; border-radius: 25px; border-top-right-radius: 0px; border-top-left-radius: 0px;"/>

            <div id="subcategorias5">
              <img width="40%" src="rsc/img/catbolis/IMG_2026.jpg">
               <?php 
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get29();
                ?>
                <div>
                  <div class="row" style="width: 80%">
                        <div name="cbo_producto">
                          <?php foreach($resultado_producto as $producto):?>
                            <span style="display: none"><input type="button" id="cbo_producto30" value="<?php echo $producto['id_producto']?>"/></span>
                            <b><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></b>
                          <?php endforeach;?>
                        </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px;">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar30">Agregar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <hr> 
            </div>
            
        <h1 style="color: black; width: 80%; font-size: 40px;"><u>MECHERO DE MARCA</u>:</h1>
            <img src="rsc/img/catbolis/dupont.PNG" id="categoria6" style="cursor:pointer; width: 80%; margin-top: 10px; border-radius: 25px"/>

            <div id="subcategorias6">
                <img src="rsc/img/catbolis/mechero%20de%20oro_dupont.png" width="40%" id="categoria6"/>
                <?php 
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get30();
                ?>
                <div>
                  <div class="row" style="width: 80%">
                    <div name="cbo_producto">
                          <?php foreach($resultado_producto as $producto):?>
                            <span style="display: none"><input type="button" id="cbo_producto31" value="<?php echo $producto['id_producto']?>"/></span>
                            <b><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></b>
                          <?php endforeach;?>
                    </div>

                    <div style="width: 80px">
                      <div style="margin-top: 5px;">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar31">Agregar</button>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
    </div>
            
	<script type="text/javascript">

          $( function() {
            $( "#aviso" ).dialog();
          } );

        function mostrarCarrito(){
          $('.container').toggle();
        }

        document.getElementById("acceso").innerHTML = '<?php echo "Hola de nuevo "; ?>';

        $("div#catalogo > div#subcategorias1").hide();
        $("div#catalogo > div#subcategorias2").hide();
        $("div#catalogo > div#subcategorias3").hide();
        $("div#catalogo > div#subcategorias4").hide();
        $("div#catalogo > div#subcategorias5").hide();
        $("div#catalogo > div:last-child").hide();
        
        $("div#catalogo > img#categoria1").click(function() {
            $("div#catalogo > div#subcategorias1").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div#subcategorias2").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias3").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias4").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias5").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias6").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria2").click(function() {
            $("div#catalogo > div#subcategorias1").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias2").animate({
                height: "toggle"
            }, 1500);
            
            $("div#catalogo > div#subcategorias3").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias4").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias5").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias6").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria3").click(function() {
            $("div#catalogo > div#subcategorias1").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias2").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias3").animate({
                height: "toggle"
            }, 1500);
            
            $("div#catalogo > div#subcategorias4").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias5").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias6").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria4").click(function() {
            $("div#catalogo > div#subcategorias1").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias2").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias3").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias4").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div#subcategorias5").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias6").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria5").click(function() {
            $("div#catalogo > div#subcategorias1").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias2").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias3").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias4").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias5").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div#subcategorias6").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria6").click(function() {
            $("div#catalogo > div#subcategorias1").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias2").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias3").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias4").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div#subcategorias5").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "toggle"
            }, 1500);
        });
	</script>
</body>
</html>