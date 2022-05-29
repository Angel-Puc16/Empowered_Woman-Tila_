<?php

   $name = $_POST['name'];
   $email = $_POST['email'];
   $telefono = $_POST['tel'];
   $message = $_POST['message'];

   $header = 'From: ' . $email . " \r\n";
   $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
   $header .= "Mime-Version: 1.0 \r\n";
   $header .= "Content-Type: text/plain";

   $message = "Este mnsaje fu enviado por: " . $name . " \r\n";
   $message .= "Su e-mail es: " . $email . " \r\n";
   $message .= "Telefono de contacto: " . $tel . " \r\n";
   $message .= "Mensaje: " . $_POST['message'] . " \r\n";
   $message .= "Enviado el: " . date('d/m/Y', time());

   $para = 'jtilaalejandra@gmail.com';
   $asunto = 'Registro empowered woman';

   mail($para, $asunto, utf8_decode($message), $shader);

   header("location:index.html");

?>