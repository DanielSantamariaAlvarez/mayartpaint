
<?php

// Llamando a los campos
$name = $_POST['name'];
$email = $_POST['email'];
$subject =$_POST['subject'];
$message = $_POST['message'];

// Datos para el correo
$destinatario = "yarivalerojimenez@gmail.com";
$asunto = "Contact from Mayart Paint";

$carta = "From: $name \n";
$carta .= "Email: $email \n";
$carta .= "Subject: $subject \n";
$carta .= "Message: $message";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
header("Location:index.html");

?>
