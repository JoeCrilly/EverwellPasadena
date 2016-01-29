<?php
	$email = $_POST['email'];
	$title = $_POST['title'];
	$message = $_POST['message'];
	
	$to = "joe.crilly503@gmail.com";
	$subject = 'New Message'
	
	mail($to, $title, $message, $subject, "From: " . $email);
	echo "Your message has been sent"
?>