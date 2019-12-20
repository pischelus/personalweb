<?php
	$to = "krdarmasaputra@gmail.com";
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$body = "You have received a new message from $name.\n".
			"Here is the message:\n $message".
	$headers = "From: $visitor_email \r\n";

	mail($to,$subject,$body,$headers);
?>