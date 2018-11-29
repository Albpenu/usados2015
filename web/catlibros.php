<?php 
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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Us@dos</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/buscador.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/ajax.js"></script>
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
  <span style="top: 0; right: 0; float: right; padding: 8px; color: black"><b id="acceso" ></b><a id="usuario" href=''><?php echo $_SESSION['cliente']; ?></a><div width="20%" style="position: relative;"><img width="20%" src="rsc/img/cart.png" style="background-color: white; border-radius: 25px; position: fixed; right: 10%; margin-top: 20px; cursor: pointer; z-index: 100;" data-toggle="modal" data-target="#myModal" onclick="mostrarCarrito()"><!--<span style="position: fixed; display: none;" id="cantpr">0</span>--><span style="position: fixed; z-index: 1000; right: 13.5%; color: red;"><h2 id="contCarrito" style="position: absolute; z-index: 100; background-color: blue; border: 3px solid gold">0</h2></span></div></span>
  
  <div class="form-1-2" style="margin-left: 10px; margin-top: 10px; float: left;">
  
  <a href="index.php" style="font-family: 'tinta';">Volver a la página principal</a><br>
    <label for="buscar" style="font-family: 'tinta';">Buscar:</label><br>
    <input type="text" name="buscar" id="buscar" placeholder="Nombre del título o autor" style="width: 160px;">
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
  <br><br>
  <div id="resultados">
    
  </div>

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
            <div class="panel-body"> No hay productos agregados</div>
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

<!--PRODUCTOS-->
    <h1 style="color: black; width: 100%; font-size: 40px; margin-top: 100px; " align="center"><u>LIBROS (SECCIONES)</u>:</h1>
    <label style="text-align: center; width: 100%">*Las imágenes de las subsecciones son sólo orientativas*</label><br>
    <label style="text-align: center; width: 100%">*Productos ordenados alfabéticamente*</label>
    <div id="catalogo" align="center">
            <img src="rsc/img/catlibros/novela.png" id="categoria1" style="cursor:pointer; width: 80%;" />

            <div id="subcategorias1">
              <img width="60%" src="rsc/img/catlibros/collage libros/novela historica.png" style="border-radius: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px">
              <h1>Novela histórica</h1>
              <?php 
                $objProducto = new Producto();
                $resultado_producto = $objProducto->get();
              ?>
                <div>
                  <div class="row" style="width: 80%">
                    <div style="width: 250px">  
                        <select name="cbo_producto" id="cbo_producto1" class="col-md-2 form-control">
                          <option value="0">Seleccione un producto</option>
                          <?php foreach($resultado_producto as $producto):?>
                            <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                          <?php endforeach;?>
                        </select>
                    </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px; margin-bottom: 5px">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar1" class="agregar">Agregar</button>
                      </div>
                    </div>
                  </div>
                </div>

                <img width="60%" src="rsc/img/catlibros/collage libros/novela actual.png" style="border-radius: 100%">
                <h1>Novela actual</h1>
                <?php
                $objProducto = new Producto();
                $resultado_producto = $objProducto->get1();
              ?>
                <div>
                  <div class="row" style="width: 80%">
                    <div style="width: 250px">  
                        <select name="cbo_producto" id="cbo_producto2" class="col-md-2 form-control">
                          <option value="0">Seleccione un producto</option>
                          <?php foreach($resultado_producto as $producto):?>
                            <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                          <?php endforeach;?>
                        </select>
                    </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px; margin-bottom: 5px">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar2" class="agregar">Agregar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
            </div>



            <img src="rsc/img/catlibros/novela%20negra.png" id="categoria2" style="cursor:pointer; width: 80%; margin-top: 10px"/>

            <div id="subcategorias2">
              <?php
                $objProducto = new Producto();
                $resultado_producto = $objProducto->get2();
              ?>
                <div>
                  <div class="row" style="width: 80%">
                    <div style="width: 250px">  
                        <select name="cbo_producto" id="cbo_producto3" class="col-md-2 form-control">
                          <option value="0">Seleccione un producto</option>
                          <?php foreach($resultado_producto as $producto):?>
                            <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                          <?php endforeach;?>
                        </select>
                    </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px; margin-bottom: 5px">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar3" class="agregar">Agregar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
            </div>

            <img src="rsc/img/catlibros/Novelas%20de%20Agatha%20Christie.png" id="categoria3" style="cursor:pointer; width: 80%; margin-top: 10px"/>

            <div id="subcategorias3">
              <img width="60%" src="rsc/img/catlibros/collage libros/agatha christie.jpg" style="border-radius: 100%; opacity: 0.2; transform: rotate(90deg); "/>
              <?php
                $objProducto = new Producto();
                $resultado_producto = $objProducto->get3();
              ?>
                <div>
                  <div class="row" style="width: 80%">
                    <div style="width: 250px">  
                        <select name="cbo_producto" id="cbo_producto4" class="col-md-2 form-control">
                          <option value="0">Seleccione un producto</option>
                          <?php foreach($resultado_producto as $producto):?>
                            <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                          <?php endforeach;?>
                        </select>
                    </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px; margin-bottom: 5px">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar4" class="agregar" style="position: relative;">Agregar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
            </div>

            <img src="rsc/img/catlibros/genios%20de%20la%20narrativa%20actual.png" id="categoria4" style="cursor:pointer; width: 100%; margin-top: 10px; border-radius: 0px;"/>

            <div id="subcategorias4">
              <img width="60%" src="rsc/img/catlibros/collage libros/genios de la narrativa actual.jpg" style="border-radius: 100%; opacity: 0.2; transform: rotate(90deg); "/>
              <?php
                $objProducto = new Producto();
                $resultado_producto = $objProducto->get4();
              ?>
                <div>
                  <div class="row" style="width: 80%">
                    <div style="width: 250px">  
                        <select name="cbo_producto" id="cbo_producto5" class="col-md-2 form-control">
                          <option value="0">Seleccione un producto</option>
                          <?php foreach($resultado_producto as $producto):?>
                            <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                          <?php endforeach;?>
                        </select>
                    </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px; margin-bottom: 5px">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar5" class="agregar" style="position: relative;">Agregar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
            </div>

            <img src="rsc/img/catlibros/poes%C3%ADa.png"  id="categoria5" style="cursor:pointer; width: 80%; margin-top: 10px"/>

            <div id="subcategorias5">
              <?php
                $objProducto = new Producto();
                $resultado_producto = $objProducto->get5();
              ?>
                <div>
                  <div class="row" style="width: 80%">
                    <div style="width: 250px">  
                        <select name="cbo_producto" id="cbo_producto6" class="col-md-2 form-control">
                          <option value="0">Seleccione un producto</option>
                          <?php foreach($resultado_producto as $producto):?>
                            <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                          <?php endforeach;?>
                        </select>
                    </div>
                    <div style="width: 80px">
                      <div style="margin-top: 5px; margin-bottom: 5px">
                      <button type="button" class="btn btn-success btn-agregar-producto" id="agregar6" class="agregar">Agregar</button>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
            </div>

            <img src="rsc/img/catlibros/club%20bruguera%20-%20Libro%20amigo%20(edici%C3%B3n%20de%20bolsillo).png" id="categoria6" style="cursor:pointer; width: 80%; margin-top: 10px"/>

            <div id="subcategorias6">
              <div style="width: 40%; float: left; margin-left: 10%; margin-bottom: 20px">
                <img src="rsc/img/catlibros/autores de habla castellana.png"  id="categoria15" style="width: 100%; border-top-left-radius: 25px"/>

                <div>
                  <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get6();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 100%">  
                          <select name="cbo_producto" id="cbo_producto7" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar7" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>

              <div style="width: 40%; float: left;">
                <img src="rsc/img/catlibros/autores extranjeros.png"  id="categoria16" style="width: 100%;"/>

                <div>
                  <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get7();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 100%">  
                          <select name="cbo_producto" id="cbo_producto8" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar8" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>  
                </div>
              </div>
                <hr style="clear: both;">
            </div>

            <img src="rsc/img/catlibros/colecci%C3%B3n%20villalar.PNG"  id="categoria7" style="cursor:pointer; width: 80%; margin-top: 10px;"/>

            <div id="subcategorias7">
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get8();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto9" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar9" class="agregar" style="position: relative;">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
            </div>

            <img src="rsc/img/catlibros/cl%C3%A1sicos%20universales.PNG"  id="categoria8" style="cursor:pointer; width: 100%; height: 150px; margin-top: 10px"/>

            <div id="subcategorias8">
              <img width="60%" src="rsc/img/catlibros/collage libros/clasicos universales.jpg" style="opacity: 0.2; transform: rotate(90deg); border-radius: 5px"/>
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get9();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto10" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar10" class="agregar" style="position: relative;">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
            </div>

            <img src="rsc/img/catlibros/juvenil.png"  id="categoria9" style="cursor:pointer; width: 80%; margin-top: 10px"/>

            <div id="subcategorias9">
              <h1>Novelas juveniles</h1>
              <img width="60%" src="rsc/img/catlibros/collage libros/novelas juveniles.png" style="border-radius: 25px;"/>
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get10();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto11" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar11" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>

              <h1>Comics</h1>
              <img width="60%" src="rsc/img/catlibros/collage libros/comics.jpg" style="border-radius: 25px;"/>
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get11();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto12" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar12" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
            </div>

            <img src="rsc/img/catlibros/libros%20y%20cuentos%20infantiles.png"  id="categoria10" style="cursor:pointer; width: 80%; margin-top: 10px"/>

            <div id="subcategorias10">
              <img width="60%" src="rsc/img/catlibros/collage libros/libros moviles y cuentos infantiles.jpg" style="border-radius: 25px;"/>
              <h1>9 libros móviles Disney</h1>
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get12();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto13" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar13" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>

              <h1>Cuentos infantiles</h1>
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get13();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto14" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar14" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
            </div>

            <img src="rsc/img/catlibros/grandes%20biograf%C3%ADas.png"  id="categoria11" style="cursor:pointer; width: 80%; height: 500px; margin-top: 10px"/>

            <div id="subcategorias11">
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get14();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto15" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar15" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
            </div>

            <img src="rsc/img/catlibros/guias.png"  id="categoria12" style="cursor:pointer; width: 80%; height: 250px; margin-top: 10px"/>

            <div id="subcategorias12">
              <img width="60%" src="rsc/img/catlibros/collage libros/guias del mundo.png" style="border-radius: 25px;"/>
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get15();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto16" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar16" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>

                <h1>Guías de España</h1>
                <img width="60%" src="rsc/img/catlibros/collage libros/guias de españa.png" style="border-radius: 25px;"/>
                <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get16();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto17" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar17" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                <h1>Guías con encanto</h1>
                <img width="60%" src="rsc/img/catlibros/collage libros/guias con encanto.png" style="border-radius: 25px;"/>
                <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get17();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto18" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar18" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
            </div>

            <img src="rsc/img/catlibros/atlas.png"  id="categoria13" style="cursor:pointer; width: 100%; margin-top: 10px"/>
            
            <div id="subcategorias13">
              <img width="60%" src="rsc/img/catlibros/collage libros/atlas.png" style="border-radius: 100%;"/>
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get18();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto19" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar19" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
            </div>

            <img src="rsc/img/catlibros/Extremadura.jpg"  id="categoria14" style="cursor:pointer; width: 80%; margin-top: 10px"/>

            <div id="subcategorias14">
              <img width="60%" src="rsc/img/catlibros/collage libros/extremadura.png" style="border-radius: 25px;"/>
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get19();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto20" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar20" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
            </div>

            

            <img src="rsc/img/catlibros/musica.png" width="80%"  id="categoria15" style="cursor:pointer; width: 80%; margin-top: 10px"/>

            <div id="subcategorias15">
              <img width="60%" src="rsc/img/catlibros/collage libros/musica.jpg" style="border-radius: 25px;"/>
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get20();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto21" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar21" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
            </div>

            <img src="rsc/img/catlibros/museos%20y%20pinturas.png" width="80%"  id="categoria16" style="cursor:pointer; width: 80%; margin-top: 10px"/>

            <div id="subcategorias16">
              <img width="60%" src="rsc/img/catlibros/collage libros/museos y pinturas.png" style="border-radius: 25px;"/>
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get21();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto22" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar22" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
            </div>

            <img src="rsc/img/catlibros/libros%20de%20cocina.png"  id="categoria17" style="cursor:pointer; width: 80%; margin-top: 10px"/>

            <div id="subcategorias17">
              <img width="60%" src="rsc/img/catlibros/collage libros/libros de cocina.jpg" style="border-radius: 25px;"/>
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get22();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto23" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar23" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
            </div>

            <img src="rsc/img/catlibros/varios%20(libros%20pr%C3%A1cticos).png"  id="categoria18" style="cursor:pointer; width: 80%; margin-top: 10px"/>

            <div id="subcategorias18">
              <img width="60%" src="rsc/img/catlibros/collage libros/libros practicos.jpg" style="border-radius: 25px;"/>
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get23();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto24" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar24" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
            </div>

            <img src="rsc/img/catlibros/revistas%20de%20decoraci%C3%B3n.png"  id="categoria19" style="cursor:pointer; width: 80%; margin-top: 10px"/>

            <div id="subcategorias19">
              <img width="60%" src="rsc/img/catlibros/collage libros/decoracion.png" style="border-radius: 25px;"/>
              <?php
                    $objProducto = new Producto();
                    $resultado_producto = $objProducto->get24();
                  ?>
                  <div>
                    <div class="row" style="width: 80%">
                      <div style="width: 250px">  
                          <select name="cbo_producto" id="cbo_producto25" class="col-md-2 form-control">
                            <option value="0">Seleccione un producto</option>
                            <?php foreach($resultado_producto as $producto):?>
                              <option value="<?php echo $producto['id_producto']?>"><?php  echo '"'.utf8_encode($producto['nombre_producto']).'", '.$producto['precio']." €"; ?></option>
                            <?php endforeach;?>
                          </select>
                      </div>
                      <div style="width: 80px">
                        <div style="margin-top: 5px; margin-bottom: 5px">
                        <button type="button" class="btn btn-success btn-agregar-producto" id="agregar25" class="agregar">Agregar</button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    <script>

        $( function() {
          $( "#aviso" ).dialog();
        } );

        function mostrarCarrito(){
          $('.container').toggle();
        }

        document.getElementById("acceso").innerHTML = '<?php echo "Hola de nuevo "; ?>';
        //ACORDEÓN
        $("div#catalogo > div:nth-child(2)").hide();
        $("div#catalogo > div:nth-child(4)").hide();
        $("div#catalogo > div:nth-child(6)").hide();
        $("div#catalogo > div:nth-child(8)").hide();
        $("div#catalogo > div:nth-child(10)").hide();
        $("div#catalogo > div:nth-child(12)").hide();
        $("div#catalogo > div:nth-child(14)").hide();
        $("div#catalogo > div:nth-child(16)").hide();
        $("div#catalogo > div:nth-child(18)").hide();
        $("div#catalogo > div:nth-child(20)").hide();
        $("div#catalogo > div:nth-child(22)").hide();
        $("div#catalogo > div:nth-child(24)").hide();
        $("div#catalogo > div:nth-child(26)").hide();
        $("div#catalogo > div:nth-child(28)").hide();
        $("div#catalogo > div:nth-child(30)").hide();
        $("div#catalogo > div:nth-child(32)").hide();
        $("div#catalogo > div:nth-child(34)").hide();
        $("div#catalogo > div:nth-child(36)").hide();
        $("div#catalogo > div:last-child").hide();

        $("div#catalogo > img#categoria1").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria2").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria3").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria4").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria5").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria6").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria7").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria8").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria9").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria10").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria11").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria12").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria13").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria14").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria15").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria16").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria17").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria18").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "toggle"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "hide"
            }, 1500);
        });

        $("div#catalogo > img#categoria19").click(function() {
            $("div#catalogo > div:nth-child(2)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(4)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(6)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(8)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(10)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(12)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(14)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(16)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(18)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(20)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(22)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(24)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(26)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(28)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(30)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(32)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(34)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:nth-child(36)").animate({
                height: "hide"
            }, 1500);

            $("div#catalogo > div:last-child").animate({
                height: "toggle"
            }, 1500);
        });

        var imagenes = document.getElementsByTagName("img").length;

        for (var i = 2; i < 4; i++) {
          document.getElementById('categoria'+i).style.borderRadius = '25px';
        }

        for (var i = 5; i < 8; i++) {
          document.getElementById('categoria'+i).style.borderRadius = '25px';
        }

        document.getElementById('categoria19').style.borderRadius = '25px';
    </script>
</body>

</html>