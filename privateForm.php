<?php

$name = $_POST['private_name'];
$phone = $_POST['private_phone'];
$visitor_email = $_POST['private_email'];
$message = $_POST['private_message'];
$url='https://www.glcec.org/index.html';

$email_from = "admin@glcec.org";

$to = "brent.hanna@gmail.com";

$email_subject = "Private Form from GLCEC.org";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

$email_body = "You have received a private concern from $name (email $visitor_email). \r\n Here is the message: \r\n $message";

mail($to,$email_subject,$email_body,$headers);

echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';

echo "<h1> FORM SENT SUCCESS! </h1>";

echo "Thank you " .$name. ", if your browser doesnt automatically redirect you please ";

echo "<a href='".$url."'>CLICKHERE.</a>";

?>