<?php
$manejador="mysql";
$servidor="localhost";
$usuario="root";
$pass="1234";
$base="bd_usados2015";
$cadena="$manejador:host=$servidor;dbname=$base";
$cnx = new PDO($cadena,$usuario,$pass);
?>
