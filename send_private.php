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

/*
The following function checks for email injection.
Specifically, it checks for carriage returns - typically used by spammers to inject a CC list.
*/
function isInjected($str) {
	$injections = array('(\n+)',
	'(\r+)',
	'(\t+)',
	'(%0A+)',
	'(%0D+)',
	'(%08+)',
	'(%09+)'
	);
	$inject = join('|', $injections);
	$inject = "/$inject/i";
	if(preg_match($inject,$str)) {
		return true;
	}
	else {
		return false;
	}
}

// If the user tries to access this script directly, redirect them to the feedback form,
if (!isset($_REQUEST['email_address'])) {
header( "Location: $index" );
}

// If the form fields are empty, redirect to the error page.
// elseif (empty($first_name) || empty($email_address)) {
// header( "Location: $error_page" );
// }

/* 
If email injection is detected, redirect to the error page.
If you add a form field, you should add it here.
*/
elseif ( isInjected($phone_number) || isInjected($email_address) || isInjected($alias_name)  || isInjected($comments) ) {
header( "Location: $error_page" );
}

// If we passed all previous tests, send the email then redirect to the thank you page.
else {

	mail( "$webmaster_email", "Feedback Form Results", $msg );

	header( "Location: $sentsuccess_page" );
}
?>