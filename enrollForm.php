<?php

$child_name = $_POST['child_name'];
$child_birthdate = $_POST['child_birthdate'];
$child_pt = $_POST['child_pt'];
$child_gender = $_POST['child_gender'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$work_phone = $_POST['work_phone'];
$visitor_email = $_POST['email'];
$program = $_POST['program'];
$date_needed = $_POST['date_needed'];
$referral = $_POST['referral'];
$url='https://www.glcec.org/index.html';

$email_from = "admin@glcec.org";

$to = "brent.hanna@gmail.com";

$email_subject = "Enroll Form from GLCEC.org";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

$email_body = "You have received a new message from $name.
\r\n Here is the email: \r\n $visitor_email
\r\n Here is the mainphone: \r\n $phone
\r\n Here is the workphone: \r\n $work_phone
\r\n Here is the child's name: \r\n $child_name
\r\n Here is the child's birthday: \r\n $child_birthdate
\r\n Here is the child's gender: \r\n $child_gender
\r\n The child is potty trained: \r\n $child_pt
\r\n Here is the program requested: \r\n $program
\r\n Here is the date: \r\n $date_needed
\r\n Here is their referral: \r\n $referral";

mail($to,$email_subject,$email_body,$headers);

echo '<META HTTP-EQUIV=REFRESH CONTENT="1; '.$url.'">';

echo "<h1> FORM SENT SUCCESS! </h1>";

echo "Thank you " .$name. ", if your browser doesnt automatically redirect you please ";

echo "<a href='".$url."'>CLICKHERE.</a>";

?>