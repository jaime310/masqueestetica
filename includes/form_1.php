<?php	
	if(empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['name']) && strlen($_POST['name']) == 0 || empty($_POST['input_945']) && strlen($_POST['input_945']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$email = $_POST['email'];
	$name = $_POST['name'];
	$input_945 = $_POST['input_945'];
	$message = $_POST['message'];
	
	$to = 'receiver@yoursite.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from My Blocs Website.";
	$email_body = "You have received a new message. \n\n".
				  "Email: $email \nName: $name \nInput_945: $input_945 \nMessage: $message \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $input_945";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>