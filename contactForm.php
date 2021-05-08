<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = "admin@glcec.org";

$to = "brent.hanna@gmail.com";

$email_subject = "Contact Form from GLCEC.org";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

$email_body = "You have received a new message from $name (email $visitor_email). \r\n Here is the message: \r\n $message";

mail($to,$email_subject,$email_body,$headers);

?>