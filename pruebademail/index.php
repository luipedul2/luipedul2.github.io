
<?php
$to = "arluipedul@gmail.com";
$subject = "Prueba de correo";
$txt = "Esto va en el cuerpo del correo";
$headers = "From: webmaster@example.com";

mail($to,$subject,$txt,$headers);


 echo "enviado...";
?> 