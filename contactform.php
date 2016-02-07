<?php
$from_email = 'everwellrecruiting@gmail.com';
$to = 'everwellrecruiting@gmail.com';
$subject = 'New Message';

$headers = 'From: ' . $from_email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();

$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['message'];

$message = <<<EMAIL
$email
$title
$message

EMAIL;

if($_POST){
@mail($to, $subject, $message, $headers, $email);  
}
echo "Your message has been sent";
?>



