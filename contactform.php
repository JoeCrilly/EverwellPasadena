<?php
$to = 'joe.crilly503@gmail.com';
$subject = 'New Message';

$email = $_POST['email'];
$title = $_POST['title'];
$message = $_POST['message'];

$message = <<<EMAIL
$email
$title
$message

EMAIL;
if($_POST){
mail($to, $title, $message, $subject, "From: " . $email);
}
echo "Your message has been sent";
?>

