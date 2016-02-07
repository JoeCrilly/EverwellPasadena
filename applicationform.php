<?php
if($_POST && isset($_FILES['file1']))
{
    $from_email = 'everwellrecruiting@gmail.com'; //sender email
    $to = 'everwellrecruiting@gmail.com'; //recipient email
    $subject = 'New Application'; //subject of email
    $message = 'Required Information:'; //message body
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	$phone = $_POST['phone'];
	$team = $_POST['team'];
	$interest = $_POST['interest'];
	
    
    //get file details we need
    $file_tmp_name    = $_FILES['file1']['tmp_name'];
    $file_name        = $_FILES['file1']['name'];
    $file_size        = $_FILES['file1']['size'];
    $file_type        = $_FILES['file1']['type'];
    $file_error       = $_FILES['file1']['error'];
	
    
    $user_email = filter_var($_POST["mail"], FILTER_SANITIZE_EMAIL);
	
    if($file_error>0)
    {
        die('upload error');
    }
    //read from the uploaded file & base64_encode content for the mail
    $handle = fopen($file_tmp_name, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $encoded_content = chunk_split(base64_encode($content));
	


        $boundary = md5("sanwebe"); 
        //header
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$user_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
        
        //plain text 
		
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
		$body .= chunk_split(base64_encode("Email: " . $mail . "\r\n " . "Name: " . $name . "\r\n" . "Phone: " . $phone . "\r\n" . "District: " .  $team . "\r\n" . "Interest: " . $interest));
		
        
        //attachment
        $body .= "--$boundary\r\n";
        $body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
        $body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
        $body .="Content-Transfer-Encoding: base64\r\n";
        $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
        $body .= $encoded_content; 
		
		//other
		
		
    
    $sentMail = @mail($to, $subject, $body, $headers);
    if($sentMail) //output success or failure messages
    {       
        die('Thank you for your application!');
    }else{
        die('Could not send mail! Please check your PHP mail configuration.');  
    }

}
?>