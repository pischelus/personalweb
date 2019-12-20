<?php
	function IsInjected($str)
	{
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
		
		if(preg_match($inject,$str))
		{
			return true;
		}
		else
			{
			return false;
		}
	}

	if(IsInjected($visitor_email))
	{
		echo "Bad email value!";
		exit;
	}
	
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