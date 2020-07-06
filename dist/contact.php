<?php
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$email_from = 'RedPill Torah';
		$email_subject=' New Message from RedPill Torah Contact';
		$email_body = "Name: $name. \n".
					  "Email: $email. \n".
					  "Message: $message. \n";

	    $to = "moregano.carr@gmail.com";
	    $headers = "From : $email_from \r\n";
	    $headers .= "Reply-To : $email \r\n";

	    mail($to,$email_subject,$email_body,$headers);
	    header("location: index.html");
?>