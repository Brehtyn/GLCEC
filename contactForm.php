<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$visitor_email = $_POST['email'];
$comments = $_POST['comments'];

$email_from = "brent.hanna@gmail.com";

$to = "brent.hanna@gmail.com";

$email_subject = "Contact Form from GLCEC.org";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

$email_body = "You have received a new message from the user $name, here is the message:\n $comments".

mail($to,$email_subject,$email_body,$headers);

?>