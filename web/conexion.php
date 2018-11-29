<?php
    //Conectar con la Base de Datos
    $dbhost = getenv("MYSQL_SERVICE_HOST");
    $dbport = getenv("MYSQL_SERVICE_PORT");
    $dbuser = getenv("databaseuser");
    $dbpwd = getenv("databasepassword");
    $dbname = getenv("databasename");
    $connect = mysqli_connect("$dbhost", "$dbuser", "$dbpwd", "$dbname");
?>
