<?php
    // Envío de correo de confirmación
    $destinatario = "08898546f@alumnos.cei.es";
    $asunto = "Hola amig@!";
    //Titulo
    $cuerpo = "Bienvenid@ a us@dos.es! ;)<br/>
    María";
    //cabecera
    $headers = "MIME-Version: 1.0\r\n"; 
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    //dirección del remitente 
    $headers .= "From: María <usados@gmail.es>\r\n";
    //Enviamos el mensaje
    $mail = mail("08898546f@alumnos.cei.es",$asunto,$cuerpo,$headers);
    if($mail){
        echo "Mensaje enviado";
    }else{
        echo "Mensaje no enviado";
    }
?>