<?php
	if (empty($_POST['name_24998_3138']) && strlen($_POST['name_24998_3138']) == 0 || empty($_POST['email_24998_3138']) && strlen($_POST['email_24998_3138']) == 0 || empty($_POST['message_24998_3138']) && strlen($_POST['message_24998_3138']) == 0)
	{
		return false;
	}
	
	$name_24998_3138 = $_POST['name_24998_3138'];
	$email_24998_3138 = $_POST['email_24998_3138'];
	$message_24998_3138 = $_POST['message_24998_3138'];
	$optin_24998_3138 = $_POST['optin_24998_3138'];
	
	// Create Message	
	$to = 'receiver@yoursite.com';
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\nName_24998_3138: $name_24998_3138 \nEmail_24998_3138: $email_24998_3138 \nMessage_24998_3138: $message_24998_3138 \nOptin_24998_3138: $optin_24998_3138 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\r\n";
	$headers .= "Reply-To: $email_24998_3138";

	// Post Message
	if (function_exists('mail'))
	{
		$result = mail($to,$email_subject,$email_body,$headers);
	}
	else // Mail() Disabled
	{
		$error = array("message" => "The php mail() function is not available on this server.");
	    header('Content-Type: application/json');
	    http_response_code(500);
	    echo json_encode($error);
	}	
?>