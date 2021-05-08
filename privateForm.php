<?php

$name = $_POST['private_name'];
$phone = $_POST['private_phone'];
$visitor_email = $_POST['private_email'];
$message = $_POST['private_message'];

$email_from = "admin@glcec.org";

$to = "brent.hanna@gmail.com";

$email_subject = "Contact Form from GLCEC.org";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

$email_body = "You have received a private concern from $name (email $visitor_email). \r\n Here is the message: \r\n $message";

mail($to,$email_subject,$email_body,$headers);

?>