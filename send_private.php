<?php
/*
This first bit sets the email address that you want the form to be submitted to.
You will need to change this value to a valid email address that you can access.
*/
$webmaster_email = "brent.hanna@gmail.com";

/*
This bit sets the URLs of the supporting pages.
If you change the names of any of the pages, you will need to change the values here.
*/
$index = "index.html";
$error_page = "error.html";
$sentsuccess_page = "sentsuccess.html";

/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/
$email_address = $_REQUEST['private_email'] ;
$comments = $_REQUEST['comments'] ;
$alias_name = $_REQUEST['private_name'] ;
$phone_number = $_REQUEST['private_phone'] ;
$msg = 
"First Name: " . $alias_name . "\r\n" . 
"Email: " . $email_address . "\r\n" . 
"Phone #: " . $phone_number . "\r\n" . 
"Comments: " . $comments ;

// If we passed all previous tests, send the email then redirect to the thank you page.

	mail( "$webmaster_email", "Feedback Form Results", $msg );

	header( "Location: $sentsuccess_page" );

?>