<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'file:///C:/Users/v/Desktop/Final%20Project/contacts.html';

$email_body = "User Name: $name.\n".
				"User Email: $visitor_email.\n.
					"User Message: $message .\n".

$to = 'ocyoallen@gmail.com';
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_body,$headers); 

header("Location: contact.html");

?>