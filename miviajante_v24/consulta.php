<?php

include("Mail.php"); # Archivo interno del servidor
echo "1";
$recipients = "seba_cardoso@outlook.com"; # Mail del receptor del correo
echo "2";
$headers["From"] = "sebastianc018@gmail.com"; # Cuenta de correo valida del dominio
echo "3";
$headers["To"] = "seba_cardoso@outlook.com"; # Destinatario del correo
echo "4";
$headers["Subject"] = "Prueba desde WEB"; # Asunto de mail
echo "5";
$mailbody = "Hola esto es una prueba."; # Cuerpo del mail
echo "6";
$smtpinfo["host"] = "smtp.gmail.com"; # Servidor SMTP
echo "7";
$smtpinfo["port"] = "465";
echo "8";
$smtpinfo["auth"] = true;
echo "9";
$smtpinfo["username"] = "sebastianc018@gmail.com"; # Cuenta de correo para autentificar
echo "10";
$smtpinfo["password"] = "sseebbaa018"; # Clave de la cuenta de correo
echo "11";
$mail_object =& Mail::factory("smtp", $smtpinfo);
echo "12";
$mail_object->send($recipients, $headers, $mailbody);
echo "el correo fue enviado";
?>
