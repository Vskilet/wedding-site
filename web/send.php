<?php
	ini_set('display_errors', 'On');

	$name = $_POST['Name'];
	$mail = $_POST['Email'];
	$subject = $_POST['Subject'];
	$message = $_POST['Message'];

	$headers = 'From: contact@constanceetvictor.fr' . "\r\n" .
	    'Reply-To: contact@constanceetvictor.fr' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($mail, $subject, $message, $headers);
?>
